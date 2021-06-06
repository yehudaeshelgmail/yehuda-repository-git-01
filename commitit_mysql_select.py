
import mysql.connector

mydb = mysql.connector.connect(
  host="3.216.108.154",
  user="yehuda",
  password="yehuda123",
  database="nginxdb"
)

mycursor = mydb.cursor()

mycursor.execute("SELECT * FROM lab_test")

myresult = mycursor.fetchone()

for x in myresult:
  print(x)

