import pyodbc 
# Some other example server values are
# server = 'localhost\sqlexpress' # for a named instance
# server = 'myserver,port' # to specify an alternate port
server = 'tcp:visitdalmatia.database.windows.net' 
database = 'visitDalmatia' 
username = 'dalmatia' 
password = 'visitMe00' 
cnxn = pyodbc.connect('DRIVER={ODBC Driver 17 for SQL Server};SERVER='+server+';DATABASE='+database+';UID='+username+';PWD='+ password)
cursor = cnxn.cursor()

#Sample insert query
count = cursor.execute("""
INSERT INTO Korisnici (username, email) 
VALUES (mihael72, mihael.baresic@gmail.com)""",
'SQL Server Express New 20', 'SQLEXPRESS New 20', 0, 0, CURRENT_TIMESTAMP).rowcount
cnxn.commit()
print('Rows inserted: ' + str(count))