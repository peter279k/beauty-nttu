<?php
	require __DIR__ . "/vendor/autoload.php";
	require "./php/CnnectDB.php";
	
	$client = new Guzzle\HttpClient;
	
	$AppToken = "";
	
	$handle = @fopen("./token/tokens.txt", "r");
	
	if(!$handle) {
		echo "the token file is not existed.";
		exit();
	}
	else {
		while(!feof($handle)) {
			if(strlen(fgets($handle)) != 0)
			$AppToken = fgets($handle);
		}
	}
	
	$contents = array();
	
	$response = $client -> get("https://graph.facebook.com/1450930895146846/feed?access_token=" . $AppToken);
	
	$DomCrawler = new 
?>
