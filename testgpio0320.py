# -*- coding: utf-8 -*-
import RPi.GPIO as GPIO
import time
import datetime
import MySQLdb
import database as db
import threading
import rfidflask as rfid
import send_sms as send
print "all status"
#print db.status
GPIO.setwarnings(False)
db.loop()
med1 = 0
med2 = 0
med3 = 0
sol1 = 0
sol2 = 0
sol3 = 0
flag1= 0
flag2= 0
flag3= 0
flag0 =0
takenow=0 ### 1 for mor, 2 for atn ,3 for evn, 4 for nig ####
def upstatustime():
    global takenow
    db = MySQLdb.connect("localhost","root","raspberry","medicine")
    cursor=db.cursor()
    sql = "UPDATE medicine_status SET status = %d WHERE id = 48" % takenow  
    try:
        cursor.execute(sql)
        db.commit()
    except:
        db.rollback()
        db.close()
def update():
    global sol1
    global sol2
    global sol2
    db = MySQLdb.connect("localhost","root","raspberry","medicine")
    cursor=db.cursor()
    sql = "UPDATE medicine_status SET status = %d WHERE id = 45" % sol1
    sql2 = "UPDATE medicine_status SET status = %d WHERE id = 46" % sol2
    sql3 = "UPDATE medicine_status SET status = %d WHERE id = 47" % sol3
        
    try:
   # Execute the SQL command
        cursor.execute(sql)
        cursor.execute(sql2)
        cursor.execute(sql3)
   # Commit your changes in the database
        db.commit()
    except:
   # Rollback in case there is any error
        db.rollback()

# disconnect from server
        db.close()
def my_callback(channel):
    global med1
    if (med1 > 0):
        med1 = med1 - 1
    print "medicine1 count : %d" % med1
    print GPIO.input(11)
    db = MySQLdb.connect("localhost","root","raspberry","medicine")
    cursor=db.cursor()
    sql = "UPDATE medicine_status SET status = %d WHERE id = 24" % med1  
    try:
    #Execute the SQL command
        cursor.execute(sql)
        print "succes"
   # Commit your changes in the database
        db.commit()
    except:
   # Rollback in case there is any error
        db.rollback()
        print "error"
    # disconnect from server
        db.close()
def my_callback2(channel):
    global med2
    if (med2 > 0):
        med2 = med2 - 1
    print "medicine2 count : %d" % med2
    #print GPIO.input(13)
    db = MySQLdb.connect("localhost","root","raspberry","medicine")
    cursor=db.cursor()
    sql = "UPDATE medicine_status SET status = %d WHERE id = 25" % med2  
    try:
        cursor.execute(sql)
        db.commit()
    except:
        db.rollback()
        db.close()
def my_callback3(channel):
    global med3
    GPIO.remove_event_detect(channel)
    if (med3 >0):
        med3 = med3 - 1
    print "medicine3 count : %d" % med3
    #print GPIO.input(7)
    db = MySQLdb.connect("localhost","root","raspberry","medicine")
    cursor=db.cursor()
    sql = "UPDATE medicine_status SET status = %d WHERE id = 26" % med3  
    try:
        cursor.execute(sql)
        db.commit()
    except:
        db.rollback()
        db.close()
def clearFlag():
    global flag0
    global flag1
    global flag2
    global flag3
    flag1 = 0
    flag2 = 0
    flag3 = 0
    flag0 = 0
#setup pin
sen1 = 11
sen2 = 13
sen3 = 15
GPIO.setup(11,GPIO.IN)
GPIO.setup(13,GPIO.IN)
GPIO.setup(7,GPIO.IN)
GPIO.setup(8,GPIO.OUT)
GPIO.setup(10,GPIO.OUT)
GPIO.setup(12,GPIO.OUT)
minute = 0
def mainfunc():
    global med1
    global med2
    global med3
    global flag0
    global flag1
    global flag2
    global flag3
    global minute
    global sol1
    global sol2
    global sol3
    global takenow
    #print "med3 count = %d " % med3
    ###########################################################################################################
    #variable of notification system
    #status for solenoid work------------------------------------------------------------------------real time
    now = datetime.datetime.now()
    sol1 = 0
    sol2 = 0
    sol3 = 0
    #initial from web------------------------------------------------------------------------number of medicine
    med1 = db.status[0]
    med2 = db.status[1]
    med3 = db.status[2]
    #status from web--------------------------------------------------------------------time to take a medicine
    bef1 = db.status[6]
    bef2 = db.status[7]
    bef3 = db.status[8]
    aft1 = not(bef1) #### now use only before
    aft2 = not(bef2)
    aft3 = not(bef2)
    mor1 = db.status[9]
    mor2 = db.status[10]
    mor3 = db.status[11]
    atn1 = db.status[12]
    atn2 = db.status[13]
    atn3 = db.status[14]
    #print "status mor = %d %d %d" % (mor1,mor2,mor3)
    evn1 = db.status[15]
    evn2 = db.status[16]
    evn3 = db.status[17]
    nig1 = db.status[18]
    nig2 = db.status[19]
    nig3 = db.status[20]
    #show&cal---------Solenoid&web123***********************************************************from web
    tmorhw = db.morning[0]
    tmormw = db.morning[1]
    tmorh1 = db.morning[0]
    tmorm1 = db.morning[1]
    tmorh2 = db.morning[0]
    tmorm2 = db.morning[1]
    tmorh3 = db.morning[0]
    tmorm3 = db.morning[1]
    tatnhw = db.afternoon[0]
    tatnmw = db.afternoon[1]
    tatnh1 = db.afternoon[0]
    tatnm1 = db.afternoon[1]
    tatnh2 = db.afternoon[0]
    tatnm2 = db.afternoon[1]
    tatnh3 = db.afternoon[0]
    tatnm3 = db.afternoon[1]
    tevnhw = db.evening[0]
    tevnmw = db.evening[1]
    tevnh1 = db.evening[0]
    tevnm1 = db.evening[1]
    tevnh2 = db.evening[0]
    tevnm2 = db.evening[1]
    tevnh3 = db.evening[0]
    tevnm3 = db.evening[1]
    tnighw = db.night[0]
    tnigmw = db.night[1]
    tnigh1 = db.night[0] 
    tnigm1 = db.night[1]
    tnigh2 = db.night[0]
    tnigm2 = db.night[1]
    tnigh3 = db.night[0]
    tnigm3 = db.night[1]
    medic_count1 = db.status[3]
    medic_count2 = db.status[4]
    medic_count3 = db.status[5]
    #time of system-------------------------------------------------------------------------------------------
    #print("Current time and date:")
    #print(str(now))
    #print db.status
    #print("Current hour: %d" %now.hour)
    #print("Current minute: %d" %now.minute)
    #GPIO.output(14,0) #solenoid 1
    #GPIO.output(15,0) #solenoid 2
    #GPIO.output(18,0)
    #print "bef1 : tmorm1 : tmormw : tmorhw : tmorh 1"
    print bef1,tmorm1,tmormw,tmorhw,tmorh1
    #print "time : %d : %d" %(now.hour,now.minute)
    #print "Flag1 : %d,Flag2 = %d:Flag3 = %d, Flag0 =%d , takenow = %d" %(flag1,flag2,flag3,flag0,takenow) 
    ###########################################################################################################
    #calculate time to use for active soleniod------------------------------------------------------------------
    ##before eat food-------------------------------------------------------------------------------------before
    ###medicine 1----------------------------------------------------------------------1
    ####morning
    print "minute : %d" % minute  
    if (minute != now.minute):
        clearFlag()
        minute = now.minute
    if bef1 == 1:
        if (mor1 == 1) & (tmormw >= 30):
           tmorm1 = tmormw - 30 
           if (tmorm1 == now.minute) & (tmorhw == now.hour):
               sol1 = 1
               takenow = 1
               upstatustime()
        if (mor1 == 1) & (tmormw <= 30):
            tmorm1 = 30+tmormw
            tmorh1 = tmorhw - 1
            if (tmorm1 == now.minute) & (tmorh1 == now.hour):
                sol1 = 1
                takenow = 1
                upstatustime()
    ####afternoon
    if bef1 == 1:
        if (atn1 == 1) & (tatnmw >= 30):
            tatnm1 = tatnmw - 30 
            if (tatnm1 == now.minute) & (tatnhw == now.hour):
                sol1 = 1
                takenow = 2
                upstatustime()
        if (atn1 == 1) & (tatnmw <= 30):
            tatnm1  = 30 + tatnmw
            tatnh1 = tatnhw - 1
            if (tatnm1 == now.minute) & (tatnh1 == now.hour):
                sol1 = 1
                takenow = 2
                upstatustime()
    ####evening
    if bef1 == 1:
        if (evn1 == 1) & (tevnmw >= 30):
            tevnm1 = tevnmw - 30 
            if (tevnm1 == now.minute) & (tevnhw == now.hour):
                sol1 = 1
                takenow = 3
                upstatustime()
        if (evn1 == 1) & (tevnmw <= 30):
            tevnm1 = 30 + tevnmw
            tevnh1 = tevnhw - 1
            if (tevnm1 == now.minute) & (tevnh1 == now.hour):
                sol1 = 1
                takenow = 3
                upstatustime()
    ####night
    if bef1 == 1:
        if (nig1 == 1) & (tnigmw >= 30):
            tnigm1 = tnigmw-30 
            if (tnigm1 == now.minute) & (tnighw == now.hour):
                sol1 = 1
                takenow = 4
                upstatustime()
        if (nig1 == 1) & (tnigmw <= 30):
            tnigm1 = 30 + tnigmw
            tnigh1 = tnighw - 1
            if (tnigm1 == now.minute) & (tnigh1 == now.hour):
                sol1 = 1
                takenow = 4
                upstatustime()
    ###medicine 2---------------------------------------------------------------------------2
    ####morning
    print bef3,mor2,tmormw,tmorhw
    if bef2 == 1:
        if (mor2 == 1) & (tmormw >= 30):
           tmorm2 = tmormw-30 
           if (tmorm2 == now.minute) & (tmorhw == now.hour):
               sol2 = 1
               takenow = 1
               upstatustime()
        if (mor2 == 1) & (tmormw <= 30):
            tmorm2 = 30+tmormw
            tmorh2 = tmorhw - 1
            print tmorm2,tmorh2
            if (tmorm2 == now.minute) & (tmorh2 == now.hour):
               sol2 = 1
               takenow = 1
               upstatustime()
    ####afternoon
    if bef2 == 1:
        if (atn2 == 1) & (tatnmw >= 30):

            tatnm2 = tatnmw-30 
            if (tatnm2 == now.minute) & (tatnhw == now.hour):
                sol2 = 1
                takenow = 2
                upstatustime()
        if (atn2 == 1) & (tatnmw <= 30):
            tatnm2 = 30+tatnmw
            tatnh2 = tatnhw - 1
            if (tatnm2 == now.minute) & (tatnh2 == now.hour):
                sol2 = 1
                takenow = 2
                upstatustime()
    ####evening
    if bef2 == 1:
        if (evn2 == 1) & (tevnmw >= 30):
            tevnm2 = tevnmw-30 
            if (tevnm2 == now.minute) & (tevnhw == now.hour):
                sol2 = 1
                #takenow = 3
                #upstatustime()
        if (evn2 == 1) & (tevnmw <= 30):
            tevnm2 = 30+tevnmw
            tevnh2 = tevnhw - 1
            if (tevnm2 == now.minute) & (tevnh2 == now.hour):
                sol2 = 1
                #takenow = 3
                #upstatustime()
    ####night
    if bef2 == 1:
        if (nig2 == 1) & (tnigmw >= 30):
            tnigm2 = tnigmw-30 
            if (tnigm2 == now.minute) & (tnighw == now.hour):
                sol2 = 1
                #takenow = 4
                #upstatustime()
        if (nig2 == 1) & (tnigmw <= 30):
            tnigm2 = 30+tnigmw
            tnigh2 = tnighw - 1
            if (tnigm2 == now.minute) & (tnigh2 == now.hour):
                sol2 = 1
                #takenow = 4
                #upstatustime()
    ###medicine 3-----------------------------------------------------------------------------3
    ####morning
    if bef3 == 1:
        if (mor3 == 1) & (tmormw >= 30):
           tmorm3 = tmormw-30 
           if (tmorm3 == now.minute) & (tmorhw == now.hour):
               sol3 = 1
               takenow = 1
               upstatustime()
        if (mor3 == 1) & (tmormw <= 30):
            tmorm3= 30+tmormw
            tmorh3 = tmorhw - 1
            if (tmorm3 == now.minute) & (tmorh3 == now.hour):
               sol3 = 1
               takenow = 1
               upstatustime()
    ####afternoon
    if bef3 == 1:
        if (atn3 == 1) & (tatnmw >= 30):
            tatnm3 = tatnmw - 30 
            if (tatnm3 == now.minute) & (tatnhw == now.hour):
                sol3 = 1
                takenow = 2
                upstatustime()
        if (atn3 == 1) & (tatnmw <= 30):
            tatnm3 = 30+tatnmw
            tatnh3 = tatnhw - 1
            if (tatnm3 == now.minute) & (tatnh3 == now.hour):
                sol3 = 1
                takenow = 2
                upstatustime()
    ####evening
    if bef3 == 1:
        if (evn3 == 1) & (tevnmw >= 30):
            tevnm3 = tevnmw - 30 
            if (tevnm3 == now.minute) & (tevnhw == now.hour):
                sol3 = 1
                takenow = 3
                upstatustime()
        if (evn3 == 1) & (tevnmw <= 30):
            tevnm3 = 30+tevnmw
            tevnh3 = tevnhw - 1
            if (tevnm3 == now.minute) & (tevnh3 == now.hour):
                sol3 = 1
                takenow = 3
                upstatustime()
    ####night
    if bef3 == 1:
        if (nig3 == 1) & (tnigmw >= 30):
            tnigm3 = tnigmw-30 
            if (tnigm3 == now.minute) & (tnighw == now.hour):
                sol3 = 1
                takenow = 4
                upstatustime()
        if (nig3 == 1) & (tnigmw <= 30):
            tnigm3 = 30+tnigmw
            tnigh3 = tnighw - 1
            if (tnigm3 == now.minute) & (tnigh3 == now.hour):
                sol3 = 1
                takenow = 4
                upstatustime()
    ##after eat food--------------------------------------------------------------------------------------------after
    ###medicine 1----------------------------------------------------------------------------------1
    ####morning
    #print ("aft = %d,tmorw = %d , tmorh = %d") % (aft1,tmormw,tmorhw)
    if aft1 == 1:
        if (mor1 == 1) & (tmormw <= 29):
            tmorm1 = tmormw + 30 
            if (tmorm1 == now.minute) & (tmorhw == now.hour):
                sol1 = 1
                takenow = 1
                upstatustime()
        if (mor1 == 1) & (tmormw >= 30):
            tmorm1 = (tmormw + 30)-60
            tmorh1 = tmorhw + 1
            print tmorh1,tmorm1
            if (tmorm1 == now.minute) & (tmorh1 == now.hour):
               sol1 = 1
               takenow = 1
               upstatustime()
    ####afternoon
    if aft1 == 1:
        if (atn1 == 1) & (tatnmw <= 29):
            tatnm1 = tatnmw + 30 
            if (tatnm1 == now.minute) & (tatnhw == now.hour):
               sol1 = 1
               takenow = 2
               upstatustime()
               
        if (atn1 == 1) & (tatnmw >= 30):
            tatnm1  = (tatnmw + 30)-60
            tatnh1 = tatnhw + 1
            if (tatnm1 == now.minute) & (tatnh1 == now.hour):
               sol1 = 1
               takenow = 2
               upstatustime()
    ####evening
    if aft1 == 1:
        if (evn1 == 1) & (tevnmw <= 29):
            tevnm1 = tevnmw + 30 
            if (tevnm1 == now.minute) & (tevnhw == now.hour):
                sol1 = 1
                takenow = 3
                upstatustime()
        if (evn1 == 1) & (tevnmw >= 30):
            tevnm1 = (tevnmw + 30)-60
            tevnh1 = tevnhw+1
            if (tevnm1 == now.minute) & (tevnh1 == now.hour):
               sol1 = 1
               takenow = 3
               upstatustime()
    ####night
    if aft1 == 1:
        if (nig1 == 1) & (tnigmw <= 29):
            tnigm1 = tnigmw + 30 
            if (tnigm1 == now.minute) & (tnighw == now.hour):
                sol1 = 1
                takenow = 4
                upstatustime()
        if (nig1 == 1) & (tnigmw >= 30):
            tnigm1 = (tnigmw + 30)-60
            tnigh1 = tnighw+1
            if (tnigm1 == now.minute) & (tnigh1 == now.hour):
               sol1 = 1
               takenow = 4
               upstatustime()
    ###medicine 2---------------------------------------------------------------------------2
    ####morning
    if aft2 == 1:
        if (mor2 == 1) & (tmormw <= 29):
           tmorm2 = tmormw + 30 
           if (tmorm2 == now.minute) & (tmorhw == now.hour):
               sol2 = 1
               takenow = 1
               upstatustime()
        if (mor2 == 1) & (tmormw >= 30):
            tmorm2 = (tmormw + 30)-60
            tmorh2 = tmorhw+1
            if (tmorm2 == now.minute) & (tmorh2 == now.hour):
               sol2 = 1
               takenow = 1
               upstatustime()
    ####afternoon
    if aft2 == 1:
        if (atn2 == 1) & (tatnmw <= 29):
            tatnm2 = tatnmw + 30 
            if (tatnm2 == now.minute) & (tatnhw == now.hour):
                sol2 = 1
                takenow = 2
                upstatustime()
        if (atn2 == 1) & (tatnmw >= 30):
            tatnm2 = (tatnmw + 30)-60
            tatnh2 = tatnhw+1
            if (tatnm2 == now.minute) & (tatnh2 == now.hour):
               sol2 = 1
               takenow = 2
               upstatustime()
    ####evening
    if aft2 == 1:
        if (evn2 == 1) & (tevnmw <= 29):
            tevnm2 = tevnmw + 30 
            if (tevnm2 == now.minute) & (tevnhw == now.hour):
                sol2 = 1
                takenow = 3
                upstatustime()
        if (evn2 == 1) & (tevnmw >= 30):
            tevnm2 = (tevnmw + 30)-60
            tevnh2 = tevnhw+1
            if (tevnm2 == now.minute) & (tevnh2 == now.hour):
               sol2 = 1
               takenow = 3
               upstatustime()
    ####night
    if aft2 == 1:
        if (nig2 == 1) & (tnigmw <= 29):
            tnigm2 = tnigmw + 30 
            if (tnigm2 == now.minute) & (tnighw == now.hour):
                sol2 = 1
                takenow = 4
                upstatustime()
        if (nig2 == 1) & (tnigmw >= 30):
            tnigm2 = (tnigmw + 30)-60
            tnigh2 = tnighw+1
            if (tnigm2 == now.minute) & (tnigh2 == now.hour):
               sol2 = 1
               takenow = 4
               upstatustime()
    ###medicine 3-----------------------------------------------------------------------------3
    ####morning
    if aft3 == 1:
        if (mor3 == 1) & (tmormw<= 29):
           tmorm3 = tmormw + 30 
           if (tmorm3 == now.minute) & (tmorhw == now.hour):
               sol3 = 1
               takenow = 1
               upstatustime()
        if (mor3 == 1) & (tmormw >= 30):
            tmorm3= (tmormw + 30)-60
            tmorh3 = tmorhw+1
            if (tmorm3 == now.minute) & (tmorh3 == now.hour):
               sol3 = 1
               takenow = 1
               upstatustime()
    ####afternoon
    if aft3 == 1:
        if (atn3 == 1) & (tatnmw <= 29):
            tatnm3 = tatnmw + 30 
            if (tatnm3 == now.minute) & (tatnhw == now.hour):
                sol3 = 1
                takenow = 2
                upstatustime()
        if (atn3 == 1) & (tatnmw >= 30):
            tatnm3 = (tatnmw + 30)-60
            tatnh3 = tatnhw+1
            if (tatnm3 == now.minute) & (tatnh3 == now.hour):
               sol3 = 1
               takenow = 2
               upstatustime()
    ####evening
    if aft3 == 1:
        if (evn3 == 1) & (tevnmw <= 29):
            tevnm3 = tevnmw + 30 
            if (tevnm3 == now.minute) & (tevnhw == now.hour):
                sol3 = 1
                takenow = 3
                upstatustime()
        if (evn3 == 1) & (tevnmw >= 30):
            tevnm3 = (tevnmw + 30)-60
            tevnh3 = tevnhw+1
            if (tevnm3 == now.minute) & (tevnh3 == now.hour):
               sol3 = 1
               takenow = 3
               upstatustime()
    ####night
    if aft3 == 1:
        if (nig3 == 1) & (tnigmw <= 29):
            tnigm3 = tnigmw + 30 
            if (tnigm3 == now.minute) & (tnighw == now.hour):
                sol3 = 1
                takenow = 4
                upstatustime()
        if (nig3 == 1) & (tnigmw >= 30):
            tnigm3 = (tnigmw + 30)-60
            tnigh3 = tnighw+1
            if (tnigm3 == now.minute) & (tnigh3 == now.hour):
               sol3 = 1
               takenow = 4
               upstatustime()
    update()   
    # output (solenoid)----------------------------------------------------------------------------------
    #if (sol1 == 1)&(sol2 == 1)&(sol3 == 1):
    #    GPIO.output(8,1)
    #   GPIO.output(10,1)
    #    GPIO.output(12,1)
    #    print "Solenoid 1: ON"
    #    print "Solenoid 2: ON"
    #    print "Solenoid 3: ON"
    if (sol1 == 1) & (flag1 == 0):
        update()
        #GPIO.remove_event(11)
        GPIO.add_event_detect(11, GPIO.FALLING, callback=my_callback, bouncetime=1000)
        for i in range (0,medic_count1):
            GPIO.output(8,1)
            print "Solenoid 1: ON"
            time.sleep(2)
            GPIO.output(8,0)
            print "Solenoid 1: OFF"
            time.sleep(2)
            flag1=1
            #popup
            #time.sleep(10)
        GPIO.remove_event_detect(11)
     
    if (sol2 == 1)  & (flag2 == 0):
        update()
        #GPIO.remove_event(13)
        GPIO.add_event_detect(13, GPIO.FALLING, callback=my_callback2, bouncetime=1000)
        for j in range (0,medic_count2):
            GPIO.output(10,1)
            print "Solenoid 2: ON"
            time.sleep(2)
            GPIO.output(10,0)
            print "Solenoid 2: OFF"
            time.sleep(2)
            flag2=1
            #popup
            #time.sleep(10)
        GPIO.remove_event_detect(13)
         
    if (sol3 == 1)  & (flag3 == 0):
        update()
        #GPIO.remove_event(7)
        GPIO.add_event_detect(7, GPIO.FALLING, callback=my_callback3, bouncetime=1000)
        for k in range (0,medic_count3):
            GPIO.output(12,1)
            print "Solenoid 3: ON"
            time.sleep(2)
            GPIO.output(12,0)
            print "Solenoid 3: OFF"
            time.sleep(2)
            flag3=1
            #popup
            #time.sleep(10)
        GPIO.remove_event_detect(7)
    if(((flag1==1) | (flag2 == 1) | (flag3 ==1)) & (flag0 ==0)):
        flag0=1
        print "flag0 = %d" % flag0
        #send.sendsms()

    #GPIO.output(8,0) #### med3
    #GPIO.output(10,0) #### med2
    #GPIO.output(12,1) ### med1 con
    #add pop up

    # sensor: count number of medicine-------------------------------------------------------------------
    ##if sen1 == 1:
    #    med1 = med1-1
    #    print "Number of medicine 1: "+str(med1)
       
        
    #if sen2 == 1:
    #    med2 = med2-1
    #    print "Number of medicine 2: "+str(med2)
        

    #if sen3 == 1:
    #    med3 = med3-1
     #   print "Number of medicine 3: "+str(med3)

    #when number of medicine lessthen 5-------------------------------------------------------------------
    if med1 <= 5:
        print "Number of medicine 1 is lessthan 5"
        #popup
        #time.sleep(10)

    if med2 <= 5:
        print "Number of medicine 2 is lessthan 5"
        #popup
        #time.sleep(10)   

    if med3 <= 5:
        print "Number of medicine 3 is lessthan 5"
        #popup
        #time.sleep(10)
    threading.Timer(1.0,mainfunc).start()
    
mainfunc()
