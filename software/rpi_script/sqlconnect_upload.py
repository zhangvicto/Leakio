import mysql.connector
#import subprocess

def convertToBinaryData(filename):
    # Convert digital data to binary format
    with open(filename, 'rb') as file:
        binaryData = file.read()
    return binaryData

def insertBLOB(id, audioFile):
    print("Inserting BLOB into audio table")
    try:
        connection = mysql.connector.connect(host='34.130.199.48',
                                             database='test_2',
                                             user='root',
                                             password='victor')

        cursor = connection.cursor()
        sql_insert_blob_query = "INSERT INTO `audio` (userid, file) VALUES (%s, %s)"

        #convert to binary
        #userId = convertToBinaryData(id)
        file = convertToBinaryData(audioFile)

        insert_blob_double = (id, file)

        result = cursor.execute(sql_insert_blob_query, insert_blob_double)
        connection.commit()
        
        print("File inserted successfully as a BLOB into audio table", result)

    except mysql.connector.Error as error:
        print("Failed inserting BLOB data into MySQL table {}".format(error))

    finally:
        if connection.is_connected():

            #close connection to sql
            cursor.close()
            connection.close()
            print("MySQL connection is closed")

# result = subprocess.run(
#     ['php', 'image.php'],    # program and arguments
#     stdout=subprocess.PIPE,  # capture stdout
#     check=True               # raise exception if program fails
# )
# print(result.stdout)         # result.stdout contains a byte-string