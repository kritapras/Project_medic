# -*- coding: utf-8 -*-
from twilio.rest import Client
from credentials import account_sid, auth_token, my_cell, my_twilio

# Find these values at https://twilio.com/user/account
a = "มื้อเช้า"
b = "มื้อกลางวัน"
c = "มื้อเย็น"
def sendsms():
    client = Client(account_sid, auth_token)
    
    my_msg = "ได้เวลารับประทานยา"
    
    message = client.messages.create(to=my_cell, from_=my_twilio,
                                     body=my_msg)
##sendsms()
