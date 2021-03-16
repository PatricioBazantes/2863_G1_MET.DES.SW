from geopy.geocoders import Nominatim
geolocator=Nominatim(user_agent="proyecto_recomendaciones")
location=geolocator.reverse("-0.3413539,-78.4112328")
print(location.address)
print(location.raw.get('address').get('state'))
provincia=location.raw.get('address').get('state')

"""from geopy.geocoders import GoogleV3
point='-0.3413539,-78.4112328'
geolocator=GoogleV3()
address=geolocator.reverse(point)
print(address[0])"""