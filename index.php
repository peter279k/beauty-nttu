<?php
	require "vendor/autload.php";
	
	Flight::route('/', function() {
		//Flight::render('hello.php', array('name' => 'Bob'));
		echo 'hello world!';
	});

	Flight::start();
?>