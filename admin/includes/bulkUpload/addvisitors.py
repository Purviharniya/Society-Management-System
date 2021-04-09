import pymysql
import xlrd
import sys
# PENDING
import re
import json
mapper = {
    # check this
    "added": 1,
    "timestamp": 2,
    "vname_col": 3,
    "vcno_col": 4,
    "alternatevcno_col": 5,
    "block_col": 6,
    "flatno_col": 7,
    "people_col": 8,
    "whom_col": 9,
    "reason_col": 10,
    "startdate_col": 11,
    "duration_col": 12,
    "host": 13,
    "username_db": 15,
    "password_db": 17,
    "dbname": 16,
    "file_location": 14,   
    "upload_constraint": 18,
    "login_role": 19,
}

header = []
header_id = {}
end_col = 7 
startcol_index = 3
passw = ""
file = xlrd.open_workbook(sys.argv[mapper['file_location']])
data = file.sheet_by_index(0)
for y in range(0, data.ncols):
    header.append(data.cell(0, y).value)
# print(header)
if len(sys.argv) != 20:
    # print("len",len(sys.argv))
    end_col = 7
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

print("hi")
# FLAT ID DOUBT
insert_visitors = """ Insert into visitors(VisitorID, FlatID, VisitorName, VisitorContactNo, AlternateVisitorContactNo, BlockNumber, FlatNumber, NoOfPeople, WhomToMeet, ReasonToMeet, OTP, StartDate, Duration, updated_by, updated_at)
                        VALUES('',%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s); """

#check the where clause visitor name add karna h ya nahi-->check this-->ek baar dala h vname
# yaha otp ka updation bakhi h just remember ->check this
update_visitors = "update visitors set VisitorContactNo=%s, WhomToMeet=%s, ReasonToMeet=%s, NoOfPeople=%s, StartDate=%s, Duration=%s, updated_by=%s,updated_at=%s where BlockNumber=%s and FlatNumber=%s and VisitorName=%s"

# fetch Flat Id from flats table
flatId = "select FlatID from flats where BlockNumber=%s and FlatNumber=%s"

# print (insert_visitors)
print(sys.argv[mapper['dbname']])
print("hi")
connection = pymysql.connect(host=sys.argv[mapper['host']],
                             user=sys.argv[mapper['username_db']],
                             passwd=passw,
                             database=sys.argv[mapper['dbname']])
print("hi conn established!")
cursor = connection.cursor()
print(cursor)
timestamp = sys.argv[mapper['timestamp']]
added = sys.argv[mapper['added']]
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
        updated_records_count += cursor.execute(update_visitors, update_values)
        
    else:
        # operation_performed = "INSERT"
        # status = "Area record inserted"
        cursor.execute(insert_visitors, values_insert)
        inserted_records_count += 1        

try:
    print("inside try")
    print(data.nrows)
    for x in range(1, data.nrows):
        print("in for loop")
        print(x)
        print(data.cell(x, header_id[sys.argv[mapper['block_col']]]).value)
        
        vname = data.cell(
            x, header_id[sys.argv[mapper['vname_col']]]).value
        print(vname)

        vcno = data.cell(
            x, header_id[sys.argv[mapper['vcno_col']]]).value

        alternatevcno = data.cell(
            x, header_id[sys.argv[mapper['alternatevcno_col']]]).value

        blockno = data.cell(
            x, header_id[sys.argv[mapper['block_col']]]).value
        print(blockno)
        
        flatno = data.cell(
            x, header_id[sys.argv[mapper['flatno_col']]]).value
        # flatno = str(int(flatno)).zfill(2)
        print(flatno)

        people = data.cell(
            x, header_id[sys.argv[mapper['people_col']]]).value

        whom = data.cell(
            x, header_id[sys.argv[mapper['whom_col']]]).value

        reason = data.cell(
            x, header_id[sys.argv[mapper['reason_col']]]).value

        startdate = data.cell(
            x, header_id[sys.argv[mapper['startdate_col']]]).value

        duration = data.cell(
            x, header_id[sys.argv[mapper['duration_col']]]).value

        val = (str(blockno),int(flatno))
        print(val)
        cursor.execute(flatId, val) 
        flatId_tuple = cursor.fetchone()

        #for i in flatId_tuple:
        #   flatID = i 
        # print(cursor.execute(flat_area_id, val))
        flatID = 2
        print("flatid",flatID)

        otp = 1234 #just now now-->check this

        #for Insert query
        values = (flatID, vname, vcno, alternatevcno, blockno, flatno, people, whom, reason, otp, startdate, duration, added, timestamp)
        

        try:
            if login_role in ['admin']:
                update_values = (vcno, whom, reason, people, startdate, duration, added, timestamp, blockno, flatno,vname)
                insert_record(update_values, values)    

        except Exception as e:
            if "Duplicate entry" in str(e):
                if upload_constraint == "0":
                    pass
                elif upload_constraint == "1":
                    values = (vcno, whom, reason, people, startdate, duration, added, timestamp, blockno, flatno,vname)
                    try:
                        # operation_performed = "UPDATE"
                        cursor.execute(update_visitors, values)
                        updated_records_count += 1
                       
                    except Exception as e:
                        print(e)
                        print("error+" + str(e))
                        sys.exit(0)
                else:
                    print("error+Block No.: "+blockno+", Flat No.: " +
                          flatno + " and Visitor Name: "+vname+" has duplicate entry.")
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
