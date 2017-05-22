# Download the Python helper library from twilio.com/docs/python/install
from twilio.rest import Client

# Your Account Sid and Auth Token from twilio.com/user/account
account_sid = "ACad378b210390068cb24f571c5f042cae"
auth_token = "4549e29f4105dff469c5445310e8030b"

client = Client(account_sid, auth_token)

country = client.pricing \
                .messaging \
                .countries("TH") \
                .fetch()

for inbound_sms_price in country.inbound_sms_prices:
    print("{} {}".format(inbound_sms_price['number_type'],
                         inbound_sms_price['current_price']))
