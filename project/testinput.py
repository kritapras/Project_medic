import RPi.GPIO as GPIO
import time
import MySQLdb
GPIO.setmode(GPIO.BOARD)
GPIO.setup(11,GPIO.IN)
GPIO.setup(13,GPIO.IN)
GPIO.setup(7,GPIO.IN)
med1 = 100
med2 = 150
med3 = 200
GPIO.setup(8,GPIO.OUT)
GPIO.setup(10,GPIO.OUT)
GPIO.setup(12,GPIO.OUT)
def my_callback(channel):
    global med1
    if (med1 > 0):
        med1 = med1 - 1
    print "medicine1 count : %d" % med1

def my_callback2(channel):
    global med2
    if (med2 > 0):
        med2 = med2 - 1
    print "medicine2 count : %d" % med2

def my_callback3(channel):
    global med3
    if (med3 >0):
        med3 = med3 - 1
    print "medicine3 count : %d" % med3
def medcountup():
    db = MySQLdb.connect("localhost","root","raspberry","medicine")
    cursor=db.cursor()
    sql1 = "UPDATE medicine_status SET status = %d WHERE id = 24" % med1
    sql2 = "UPDATE medicine_status SET status = %d WHERE id = 25" % med2
    sql3 = "UPDATE medicine_status SET status = %d WHERE id = 26" % med3
    try:
        cursor.execute(sql1)
        cursor.execute(sql2)
        cursor.execute(sql3)
        db.commit()
    except:
        db.rollback()
        db.close()

while 1:
    medcountup()
    time.sleep(1)
    print "med1 %d" % med1
    print "med2 %d" % med2
    print "med3 %d" % med3
    
    GPIO.output(8,1)
    GPIO.add_event_detect(11, GPIO.BOTH, callback=my_callback, bouncetime=1000)
    print "Solenoid 1: ON"
    time.sleep(2)
    GPIO.remove_event_detect(11)
    GPIO.output(8,0)
    print "Solenoid 1: OFF"
    time.sleep(2)


    GPIO.output(10,1)
    GPIO.add_event_detect(13, GPIO.BOTH, callback=my_callback2, bouncetime=1000)
    print "Solenoid 2: ON"
    time.sleep(2)
    GPIO.remove_event_detect(13)
    GPIO.output(10,0)
    print "Solenoid 2: OFF"
    time.sleep(2)
    
    GPIO.output(12,1)
    GPIO.add_event_detect(7, GPIO.BOTH, callback=my_callback3, bouncetime=1000)
    print "Solenoid 3: ON"
    time.sleep(2)
    GPIO.remove_event_detect(7)
    GPIO.output(12,0)
    print "Solenoid 3: OFF"
    time.sleep(2)
