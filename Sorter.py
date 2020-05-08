import csv

myFile = open('manu_datasset2.csv', 'w', newline = ' ')
with myFile:
    for line in open("manu_datasset.csv"):
        transaction = line.strip('\n')
        transaction = transaction.split(',')#returns a list ["1","50","60"]
        transaction.sort()
        print(transaction," ")
        writer = csv.writer(myFile)
       # writer.writerows(transaction)
        writer.writerow(transaction)
