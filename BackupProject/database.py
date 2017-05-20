#!/usr/bin/python

import MySQLdb
import threading
import datetime
status =[];
time=[];
morning = [];
afternoon = [];
evening = [];
night = [];

def fetchdb():
   global status
   # Open database connection
   db = MySQLdb.connect("localhost","root","raspberry","medicine" )

   # prepare a cursor object using cursor() method
   cursor = db.cursor()

   sql = "SELECT status FROM medicine_status"
   try:
      # Execute the SQL command
      cursor.execute(sql)
      # Fetch all the rows in a list of lists.
      row = cursor.fetchall()
      status =list(sum(row, ()))
      #print status[1]+status[2] #for check operation of math can be use
      
   except:
      print "Error: unable to fecth data"
   # disconnect from server
   db.close()
def fetchtime():
   global time
   db = MySQLdb.connect("localhost","root","raspberry","medicine" )
   cursor = db.cursor()
   sql = "SELECT timeeat FROM timetake"
   try:
      cursor.execute(sql)
      row = cursor.fetchall()
      time=list(sum(row, ()))
      
   except:
      print "Error: unable to fecth data"
   db.close()
   
def loop():
   global status
   global time
   global morning
   global afternoon
   global evening
   global night
   fetchdb()
   fetchtime()
   threading.Timer(1.0,loop).start()
   #print status
   ################# Set initial after loop ##################
   morning = time[0]
   afternoon = time[1]
   evening = time[2]
   night = time[3]
   #print type(morning),afternoon,evening,night
   morning = days_hours_minutes(morning)
   afternoon = days_hours_minutes(afternoon)
   evening = days_hours_minutes(evening)
   night = days_hours_minutes(night)
   #print morning[0],morning[1]
   #print afternoon[0],afternoon[1]
   #print evening[0],evening[1]
   #print night[0],night[1]
   #################### Medicine status ######################
   med1_count=status[0]
   med2_count=status[1]
   med3_count=status[2]
   med1_take_count=status[3]
   med2_take_count=status[4]
   med3_take_count=status[5]
   med1_take_before=status[6]
   med2_take_before=status[7]
   med3_take_before=status[8]
   med1_meal_mor=status[9]
   med2_meal_mor=status[10]
   med3_meal_mor=status[11]
   med1_meal_atn=status[12]
   med2_meal_atn=status[13]
   med3_meal_atn=status[14]
   med1_meal_evn=status[15]
   med2_meal_evn=status[16]
   med3_meal_evn=status[17]
   med1_meal_nig=status[18]
   med2_meal_nig=status[19]
   med3_meal_nig=status[20]
   #print status
   #print morning[0],morning[1]

def days_hours_minutes(td):
    return td.seconds//3600, (td.seconds//60)%60

loop()

########### Get Time Date form now ########################
now = datetime.datetime.now()
hrnow=int(now.hour)
mnnow=int(now.minute)



