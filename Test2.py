import csv

# If you want to remove the first column and then every column after the fifth, keeping
# in mind that Python indexes start at 0

begin = 1
end = 5

with open(groceries, "r") as file_in:
    with open(groceries2, "w") as file_out:

        writer = csv.writer(file_out)

        for row in csv.reader(file_in):
            writer.writerow(row[begin:end])
