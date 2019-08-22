OkHttpClient client = new OkHttpClient();

Request request = new Request.Builder()
	.url("https://moderatecontent-adult-image-detection-v1.p.rapidapi.com/api/v2?url=https%3A%2F%2Fwww.moderatecontent.com%2Fimg%2Fsample_face_5.jpg")
	.get()
	.addHeader("x-rapidapi-host", "moderatecontent-adult-image-detection-v1.p.rapidapi.com")
	.addHeader("x-rapidapi-key", "8ead6d1cb1msh79679a2f443fb21p168342jsne432efec36ff")
	.build();

Response response = client.newCall(request).execute();
