import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BOARD)  
GPIO.setup(11, GPIO.IN)
med1 = 20
med2 = 20
med3 = 20
def my_callback(channel):
    global med1
    med1 = med1-1
    print channel
    print GPIO.input(11)
    print med1

GPIO.add_event_detect(11, GPIO.FALLING, callback=my_callback, bouncetime=1000)  

raw_input()
