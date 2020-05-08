'''
Generates frequent item sets and association rules from given datasets using Apriori algorithm.
'''
# pylint: disable=invalid-name
#!/usr/bin/env python
import csv
import itertools
import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="",
  database="proj_f"
)
mycursor = mydb.cursor()
sql = "DELETE FROM ai "
mycursor.execute(sql)
mydb.commit()
DataFile = open('manu_datasset4B.csv', 'r',encoding='utf-8')
minsup = 0.05
f2 = "Rules.txt"
f1 = "FItems.txt"
minconf = 60

def L1():
    '''
    Find frequent 1-itemsets
    '''
    
    DataCaptured = csv.reader(DataFile, delimiter=',')
    data = list(DataCaptured)
    for e in data:
        e = sorted(e)
    count = {}
    for items in data:
        for item in items:
            if item not in count:
                count[(item)] = 1
            else:
                count[(item)] = count[(item)] + 1
    #บอกจำนวนวไอเทมที่มีอยู่
    print("C1 Length : ", len(count))
    print()

    
    count2 = {k: v for k, v in count.items() if v >= minsup*240}
    print("L1 Length : ", len(count2))
    print()

    return count2, data


def generateCk(Lk_1, flag, data):
    '''
    Generate Ck by joining 2 Lk-1
    '''
    Ck = []

    if flag == 1:
        flag = 0
        for item1 in Lk_1:
            for item2 in Lk_1:
                if item2 > item1:
                    Ck.append((item1, item2))
        print("C2: ", Ck[1:3])
        print("length : ", len(Ck))
        print()

    else:
        for item in Lk_1:
            k = len(item)
        for item1 in Lk_1:
            for item2 in Lk_1:
                if (item1[:-1] == item2[:-1]) and (item1[-1] != item2[-1]):
                    if item1[-1] > item2[-1]:
                        Ck.append(item2 + (item1[-1],))
                    else:
                        Ck.append(item1 + (item2[-1],))
        print("C" + str(k+1) + ": ", Ck[1:3])
        print("Length : ", len(Ck))
        print()
    L = generateLk(set(Ck), data)
    return L, flag


def generateLk(Ck, data):
    '''
    If item in Ck belongs to a transaction,
    it makes it into list Ct
    Then Ct is thresholded to form L
    '''
    count = {}
    for itemset in Ck:
        #print(itemset)
        for transaction in data:
            if all(e in transaction for e in itemset):
                if itemset not in count:
                    count[itemset] = 1
                else:
                    count[itemset] = count[itemset] + 1

    print("Ct Length : ", len(count))
    print()

    count2 = {k: v for k, v in count.items() if v >= minsup*240}
    print("L Length : ", len(count2))
    print()
    return count2


def rulegenerator(fitems):
    '''
    Generates association rules from the frequent itemsets
    '''
    counter = 0
    for itemset in fitems.keys():
        if isinstance(itemset, str):
            continue
        length = len(itemset)

        union_support = fitems[tuple(itemset)]
        for i in range(1, length):

            lefts = map(list, itertools.combinations(itemset, i))
            for left in lefts:
                if len(left) == 1:
                    if ''.join(left) in fitems:
                        leftcount = fitems[''.join(left)]
                        conf = union_support / leftcount
                        conf = conf * 100
                        conf = "{0:.2f}".format(conf)
                        conf = float(conf)
                else:
                    if tuple(left) in fitems:
                        leftcount = fitems[tuple(left)]
                        conf = union_support / leftcount
                        conf = conf *100
                        conf = "{0:.2f}".format(conf)
                        conf = float(conf)
                if conf >= minconf:
                    fo = open(f2, "w",encoding = "utf8")
                    right = list(itemset[:])
                    for e in left:
                        right.remove(e)
                        if len(left) == 1:#เช็ค left ว่ามีข้อมูลใน list 1 ตัวใช่ไหม
                            print(str(left[0]) + ' นิยมทานคู่กับ ' + str(right[0]) + ' ร้อยละ = ' + str(conf) + '')
                            mycursor = mydb.cursor()
                            sql = "INSERT INTO ai (Name_A, Name_B,Percent) VALUES (%s, %s, %s)"
                            val = (str(left[0]), str(right[0]),str(conf))
                            mycursor.execute(sql, val)
                            mydb.commit()
                        else :#left มีข้อมูลใน list 2 ตัว
                            if left[0] == '':#left [0] มันว่างไหม
                                print(str(left[1])+ ' นิยมทานคู่กับ ' + str(right[0]) + ' ร้อยละ = ' + str(conf) + '')
                                mycursor = mydb.cursor()
                                sql = "INSERT INTO ai (Name_A, Name_B,Percent) VALUES (%s, %s, %s)"
                                val = (str(left[1]), str(right[0]),str(conf))
                                mycursor.execute(sql, val)
                                mydb.commit()
                            else:#left [0] มันมี2ตัว
                                print(str(left[0])+ ' กับ ' + str(left[1])+ ' นิยมทานคู่กับ ' + str(right[0]) + ' ร้อยละ = ' + str(conf) + '')
                                mycursor = mydb.cursor()
                                sql = "INSERT INTO ai (Name_A, Name_B,Percent) VALUES (%s, %s, %s)"
                                val = (str(left[:2]), str(right[0]),str(conf))
                                mycursor.execute(sql, val)
                                mydb.commit()
                        fo.write(str(left[0]) + ' นิยมทานคู่กับ ' + str(right[0]) + ' ร้อยละ = [' + str(conf) + ']' + '\n')
                        counter = counter + 1
                    #Greater than 1???

                    fo.close()
    print(counter, "rules generated")


def apriori():
    '''
    The runner function
    '''
    L, data = L1()
    flag = 1
    FreqItems = dict(L)
    while(len(L) != 0):
      #  fo = open(f1, "a+")
      
        fo = open(f1,"w", encoding="utf8")
        for k, v in L.items():
            fo.write(str(k) + ' >>> ' + str(v) + '\n\n')
        fo.close()

        L, flag = generateCk(L, flag, data)
        FreqItems.update(L)
    rulegenerator(FreqItems)


if __name__ == '__main__':
    apriori()
