<?php

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://moderatecontent-adult-image-detection-v1.p.rapidapi.com/api/v2?url=https%3A%2F%2Fwww.moderatecontent.com%2Fimg%2Fsample_face_5.jpg",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"x-rapidapi-host: moderatecontent-adult-image-detection-v1.p.rapidapi.com",
		"x-rapidapi-key: 8ead6d1cb1msh79679a2f443fb21p168342jsne432efec36ff"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
