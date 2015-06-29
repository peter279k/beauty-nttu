<?php
	require 'LIB_http.php';
	$get_json = http_get("https://api.flickr.com/services/rest/?method=flickr.people.getPublicPhotos&api_key=88912736e3599cce706c5b523496eb26&user_id=132845938@N08&per_page=200&format=json", $refer = "");
	//print_r($get_json["FILE"]);
	$get_json = str_replace( 'jsonFlickrApi(', '', $get_json["FILE"] );
	$get_json = substr( $get_json, 0, strlen( $get_json ) - 1 ); //strip out last paren
	str_replace(")", "]", $get_json);
	echo $get_json;
?>