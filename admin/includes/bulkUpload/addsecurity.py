import pymysql
import xlrd
import sys
import re
import json
mapper = {
    
    "securityid_col": 1,
    "name_col": 2,
    "contactnumber_col": 3,
    "shift_col": 4,
    "createdat_col": 5,
    "updatedat_col":6,
    "host": 7,
    "username_db": 9,
    "password_db": 11,
    "dbname": 10,
    "file_location": 8,    
    "upload_constraint": 12,
    "login_role": 13,
}

header = []
header_id = {}
end_col = 6
startcol_index = 1
passw = ""
file = xlrd.open_workbook(sys.argv[mapper['file_location']])
data = file.sheet_by_index(0)
for y in range(0, data.ncols):
    header.append(data.cell(0, y).value)
# print(header)
if len(sys.argv) != 14:
    # print("len",len(sys.argv))
    end_col = 6
else: 
    passw = sys.argv[mapper['password_db']]
try:
    for x in range(startcol_index, len(sys.argv)-end_col):
        # print("x:",sys.argv[x])
        header_id[sys.argv[x]] = header.index(sys.argv[x])


except Exception as e:
    # print("ex occured!")
    print(re.findall(r"'(.*?)'", str(e),)
          [0]+" is not a column in the uploaded sheet")
    sys.exit(0)

# print("hi")
insert_security = """ Insert into security(SecurityID , Name , ContactNumber , Shift , created_at , updated_at) VALUES(%s,%s,%s,%s,%s,''); """
update_security = "update security set ContactNumber=%s,Shift=%s,updatedAt=%s where SecurityID=%s and Name=%s"

# print (insert_faculty)
# print(sys.argv[mapper['dbname']])
# print("hi")
connection = pymysql.connect(host=sys.argv[mapper['host']],
                             user=sys.argv[mapper['username_db']],
                             passwd=passw,
                             database=sys.argv[mapper['dbname']])
# print("hi conn established!")
cursor = connection.cursor()
# print(cursor)
timestamp = sys.argv[mapper['timestamp']]
# added = sys.argv[mapper['added']]
upload_constraint = sys.argv[mapper['upload_constraint']]
login_role = sys.argv[mapper['login_role']]
# print("hi")
password_set = 0
inserted_records_count = 0
updated_records_count = 0

def insert_record(update_values, values_insert):
    global updated_records_count, inserted_records_count
    # operation_performed = ""
    # status = ""

    if sys.argv[mapper['upload_constraint']] == "2":
        # operation_performed = "UPDATE"
        # status = "updated details " 
        updated_records_count += cursor.execute(update_security, update_values)
        
    else:
        # operation_performed = "INSERT"
        # status = "Area record inserted"
        cursor.execute(insert_security, values_insert)
        inserted_records_count += 1        

try:
    # print("inside try")
    # print(data.nrows)
    for x in range(1, data.nrows):
        # print("in for loop")
        # print(x)
        # print(data.cell(x, header_id[sys.argv[mapper['block_col']]]).value)
        securityid = data.cell(
            x, header_id[sys.argv[mapper['securityid_col']]]).value
        # print("b",blockno)
        name = data.cell(
            x, header_id[sys.argv[mapper['name_col']]]).value
        # print(seriesno)
        contactnumber = data.cell(
            x, header_id[sys.argv[mapper['contactnumber_col']]]).value.upper()  
        shift = data.cell(
            x, header_id[sys.argv[mapper['shift_col']]]).value
        createdat = data.cell(
            x, header_id[sys.argv[mapper['createdat_col']]]).value
        values = (securityid,name,contactnumber,shift,createdat,'')

        try:
            if login_role in ['admin']:
                update_values = (securityid,name,contactnumber,shift,createdat,'')
                insert_record(update_values, values)    

        except Exception as e:
            if "Duplicate entry" in str(e):
                if upload_constraint == "0":
                    pass
                elif upload_constraint == "1":
                    values = (securityid,name,contactnumber,shift,createdat,'')
                    try:
                        # operation_performed = "UPDATE"
                        cursor.execute(update_security, values)
                        updated_records_count += 1
                       
                    except Exception as e:
                        print(e)
                        print("error+" + str(e))
                        sys.exit(0)
                else:
                    print("something's wrong :(")
                    sys.exit(0)
                

            else:
                print("The upload was unsuccessful.")
                print(e)
                sys.exit(0)
except Exception as e:
    print(str(e))
    sys.exit(0)

connection.commit()
output = {"insertedRecords": inserted_records_count,
          "updatedRecords": updated_records_count, "totalRecords": data.nrows-1}
print('Successful+%s' %
      (json.dumps(output)))
connection.close()
