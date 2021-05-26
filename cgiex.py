#!C:/Program Files/Python39/python.exe
# Import modules for CGI handling 
import cgi, cgitb 

# Create instance of FieldStorage 
form = cgi.FieldStorage() 

# Get data from fields
fname = form.getvalue('fname')
lname = form.getvalue('lname')
address  = form.getvalue('address')
gender  = form.getvalue('gender')
phone  = form.getvalue('phone')
email  = form.getvalue('email')
username  = form.getvalue('username')
password  = form.getvalue('password')

print ("Content-type:text/html\r\n\r\n")
print ("<html>")
print ("<head>")
print ("<title>Hello - Python CGI Program</title>")
print ("</head>")
print ("<body>")

print ("</body>")
print ("</html>")

import mysql.connector
con=mysql.connector.connect(user='root',password='',host='8022',database='qwerty')
cur=con.cursor()

cur.execute("insert into entry_details values(%s,%s,%s,%s,%s,%s,%s,%s)",(fname, lname, address, gender, phone, email, username, password))
con.commit()
cur.close()
con.close()
print("<h3>Record Inserted</h3>")
print("<a href='http://localhost/run/signup.php'>click here to go back</a>")