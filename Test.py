import csv
...

with open('manu_datasset.csv') as in_file:
    with open('manu_datasset2.csv', 'w') as out_file:
        writer = csv.writer(out_file)
        for row in csv.reader(in_file):
            if any(field.strip() for field in row):
                writer.writerow(row)
