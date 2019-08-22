import requests

url = "https://moderatecontent-adult-image-detection-v1.p.rapidapi.com/api/v2"

querystring = {"url":"https://www.moderatecontent.com/img/sample_face_5.jpg"}

headers = {
    'x-rapidapi-host': "moderatecontent-adult-image-detection-v1.p.rapidapi.com",
    'x-rapidapi-key': "8ead6d1cb1msh79679a2f443fb21p168342jsne432efec36ff"
    }

response = requests.request("GET", url, headers=headers, params=querystring)

print(response.text)
