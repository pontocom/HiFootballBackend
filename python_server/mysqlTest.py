import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="testuser",
  passwd="test",
  database="testdatabase"
)

mycursor = mydb.cursor()
# here is where the SQL commands come in
sql = "INSERT INTO people (firstname, lastname) VALUES (%s, %s)"
val = ("Test", "McTesterson")
mycursor.execute(sql, val)

mydb.commit()

mycursor.execute("SELECT * FROM people")

myresult = mycursor.fetchall()

for x in myresult:
  print(x)