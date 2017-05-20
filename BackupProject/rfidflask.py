#!/usr/bin/env python
# -*- coding: utf8 -*-

import RPi.GPIO as GPIO
import MFRC522
import signal
import threading
import MySQLdb

global uid
x = True
# Capture SIGINT for cleanup when the script is aborted

def end_read(signal,frame):
    global continue_reading
    print ("Ctrl+C captured, ending read.")
    continue_reading = False
    GPIO.cleanup()

def updateid(uid):
    db = MySQLdb.connect("localhost","root","raspberry","medicine")
    cursor=db.cursor()
    sql = "UPDATE rfid SET rfid= %d WHERE status = 1" % uid
    sql2 = "UPDATE rfid SET rfid= %d WHERE status = 2 " % x
        
    try:
   # Execute the SQL command
        cursor.execute(sql)
        cursor.execute(sql2)
   # Commit your changes in the database
        db.commit()
    except:
   # Rollback in case there is any error
        db.rollback()

# disconnect from server
        db.close()
        
#@app.route('/')
#def index():
#    return reading() 


# Hook the SIGINT
signal.signal(signal.SIGINT, end_read)

# Create an object of the class MFRC522
MIFAREReader = MFRC522.MFRC522()

# Welcome message
print ("Welcome to the MFRC522 data read example")
print ("Press Ctrl-C to stop.")
GPIO.setwarnings(False)
# This loop keeps checking for chips. If one is near it will get the UID and authenticate
def reading():
    global x
    global uid
    # Scan for cards    
    (status,TagType) = MIFAREReader.MFRC522_Request(MIFAREReader.PICC_REQIDL)
    y=0
    # If a card is found
    if status == MIFAREReader.MI_OK:
        print ("Card detected")
        y=1
    
    # Get the UID of the card
    (status,uid) = MIFAREReader.MFRC522_Anticoll()

    # If we have the UID, continue
    if status == MIFAREReader.MI_OK:
        # Print UID
        print ("Card read UID: "+str(uid[0])+","+str(uid[1])+","+str(uid[2])+","+str(uid[3]))
        # This is the default key for authentication
        key = [0xFF,0xFF,0xFF,0xFF,0xFF,0xFF]
        
        # Select the scanned tag
        MIFAREReader.MFRC522_SelectTag(uid)

        # Authenticate
        status = MIFAREReader.MFRC522_Auth(MIFAREReader.PICC_AUTHENT1A, 8, key, uid)

        # Check if authenticated
        if status == MIFAREReader.MI_OK:
            MIFAREReader.MFRC522_Read(8)
            MIFAREReader.MFRC522_StopCrypto1()

        # check card------------------------------------------------------------------------------------
        Ruid = (uid[0]),(uid[1]),(uid[2]),(uid[3])
        uid  = 0
        uid1 = 149,133,36,164
        uid2 = 108,87,36,164
        uid3 = 123,233,35,164
        uid4 = 55,236,35,164
        uid5 = 214,220,35,164
        uid6 = 219,170,36,164
        uid7 = 242,226,35,164
        uid8 = 64,238,35,164
        uid9 = 154,213,35,164
        uid10 = 208,18,36,164
        uid11 = 11,243,35,164
        uid12 = 205,78,36,164
        uid13 = 3,57,36,164
        uid14 = 82,140,36,164
        uid15 = 10,64,36,164
        uid16 = 158,69,36,164
        uid17 = 206,6,36,164
        uid18 = 226,15,36,164
        uid19 = 23,182,36,164
        uid20 = 215,229,35,164
        
        if Ruid == uid1:
            print ("Pop Up: 1")
            uid = 1
            print ("%d"% uid)
        elif Ruid == uid2:
            print ("Pop Up: 2")
            uid = 2
            print ("%d"% uid)
        elif Ruid == uid3:
            print ("Pop Up: 3")
            uid = 3
            print ("%d"% uid)
        elif Ruid == uid4:
            print ("Pop Up: 4")
            uid = 4
            print ("%d"% uid)
        elif Ruid == uid5:
            print ("Pop Up: 5")
            uid = 5
            print ("%d"% uid)
        elif Ruid == uid6:
            print ("Pop Up: 6")
            uid = 6
            print ("%d"% uid)
        elif Ruid == uid7:
            print ("Pop Up: 7")
            uid = 7
            print ("%d"% uid)
        elif Ruid == uid8:
            print ("Pop Up: 8")
            uid = 8
            print ("%d"% uid)
        elif Ruid == uid9:
            print ("Pop Up: 9")
            uid = 9
            print ("%d"% uid)
        elif Ruid == uid10:
            print ("Pop Up: 10")
            uid = 10
            print ("%d"% uid)
        elif Ruid == uid11:
            print ("Pop Up: 11")
            uid = 11
            print ("%d"% uid)
        elif Ruid == uid12:
            print ("Pop Up: 12")
            uid = 12
            print ("%d"% uid)
        elif Ruid == uid13:
            print ("Pop Up: 13")
            uid = 13
            print ("%d"% uid)
        elif Ruid == uid14:
            print ("Pop Up: 14")
            uid = 14
            print ("%d"% uid)
        elif Ruid == uid15:
            print ("Pop Up: 15")
            uid = 15
            print ("%d"% uid)
        elif Ruid == uid16:
            print ("Pop Up: 16")
            uid = 16
            print ("%d"% uid)
        elif Ruid == uid17:
            print ("Pop Up: 17")
            uid = 17
            print ("%d"% uid)
        elif Ruid == uid18:
            print ("Pop Up: 18")
            uid = 18
            print ("%d"% uid)
        elif Ruid == uid19:
            print ("Pop Up: 19")
            uid = 19
            print ("%d"% uid)
        elif Ruid == uid20:
            print ("Pop Up: 20")
            uid = 20
            print ("%d"% uid)
   
            
        else:
            print ("Authentication error")
            uid = 99
            print ("%d"% uid)

        updateid(uid)
        if y == 1:
            x=not x
        
        print "x = %d" % x
        print y


def loop():
    global x
    global uid
    reading()
    threading.Timer(1.0,loop).start()
    

loop()
