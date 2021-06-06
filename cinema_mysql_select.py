
import mysql.connector

mydb = mysql.connector.connect(
  host="34.89.238.35",
  user="root",
  password="7ENpz15IPxziD7va",
  database="stg_imported_VI"
)

mycursor = mydb.cursor()

mycursor.execute("SELECT * FROM wp_options")

myresult = mycursor.fetchall()

for x in myresult:
  print(x)
