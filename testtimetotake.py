import RPi.GPIO as GPIO
import time
import datetime

now = datetime.datetime.now()
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)

sen1 = 17
sen2 = 27
sen3 = 22
GPIO.setup(sen1,GPIO.IN)
GPIO.setup(sen2,GPIO.IN)
GPIO.setup(sen3,GPIO.IN)
GPIO.setup(14,GPIO.OUT)
GPIO.setup(15,GPIO.OUT)
GPIO.setup(18,GPIO.OUT)

sol1 = 0
bef1 = 0
aft1 = 1
mor1 = 1
tmorhw =7
tmormw =20
tmorh1 =0
tmorm1 =0 

print("Current hour: %d" %now.hour)
print("Current minute: %d" %now.minute)

if bef1 == 1:
    if (mor1 == 1) & (tmormw >= 30):
       tmorm1 = tmormw - 30 
       #if (tmorm1 == now.minute) & (tmorhw == now.hour):
       if (tmorm1 == 10) & (tmorhw == 7):
           sol1 = 1
           print "Solenoid 1: "+str(sol1)
           print "time1: "+str(tmorhw)
           print "time1: "+str(tmorm1)
           print "mor -"
    if (mor1 == 1) & (tmormw << 30):
        tmorm1 = 30 - tmormw
        tmorh1 = tmorhw - 1
        #if (tmorm1 == now.minute) & (tmorh1 == now.hour):
        if (tmorm1 == 50) & (tmorh1 == 6):
           sol1 = 1
           print "mor +"

if aft1 == 1:
    if (mor1 == 1) & (tmormw <= 29):
        tmorm1 = tmormw + 30
        #if (tmorm1 == now.minute) & (tmorhw == now.hour):
        if (tmorm1 == 50) & (tmorhw == 7):
            sol1 = 1
            print "Solenoid 1: "+str(sol1)
            print "time1: "+str(tmorhw)
            print "time1: "+str(tmorm1)
            print "mor --"
    if (mor1 == 1) & (tmormw >= 30):
        tmorm1 = (tmormw + 30)-60
        tmorh1 = tmorhw + 1
        #if (tmorm1 == now.minute) & (tmorh1 == now.hour):
        if (tmorm1 == 10) & (tmorh1 == 8):
           sol1 = 1
           print "mor ++"

if sol1 == 1:
 GPIO.output(14,1)
 print "Solenoid 1: ON"
 time.sleep(2)
 GPIO.output(14,0)
 print "Solenoid 1: OFF"
 time.sleep(2)
    #popup
 time.sleep(10)
 
