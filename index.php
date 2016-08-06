<?php
	ini_set("display_errors", "On");
	ini_set('include_path', '~/www/beauty-nttu');
	
	require "vendor/autoload.php";
	require "script/ConnectDB.php";
	
	use flight\Engine;
	
	$app = new Engine();
	
	$app -> route('GET /', function() {
		
		$sql = "SELECT `message`, `obj_id`, `created_time` FROM  `beauty_nttu`  WHERE `message` LIKE '%【正妹】%'";
		$conn = new ConnectDB();
		$link = $conn -> InitialDB();
		$data = $conn -> ProcessData($link, $sql, array(), "get-image-id");
		$conn -> ConnectClose($link);
		
		$str = ' <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-0">
                            <img src="http://placehold.it/150x150&text=zero">
                        </a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/150x150&text=2"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/150x150&text=3"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/150x150&text=4"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/150x150&text=5"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-6"><img src="http://placehold.it/150x150&text=6"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-7"><img src="http://placehold.it/150x150&text=7"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-8"><img src="http://placehold.it/150x150&text=8"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-9"><img src="http://placehold.it/150x150&text=9"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-10"><img src="http://placehold.it/150x150&text=10"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-11"><img src="http://placehold.it/150x150&text=11"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-12"><img src="http://placehold.it/150x150&text=12"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-13"><img src="http://placehold.it/150x150&text=13"></a>
                    </li>
                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-14"><img src="http://placehold.it/150x150&text=14"></a>
                    </li>

                    <li class="col-sm-3">
                        <a class="thumbnail" id="carousel-selector-15"><img src="http://placehold.it/150x150&text=15"></a>
                    </li>';
		$len = count($data);

		/*
		for($index=0;$index<$len;$index++) {
			$str .= '<li class="col-sm-3">';
			$str .= "<a title=" . '\"' . $data[$index]["message"] . '\"' . ' class="img-thumbnail swipebox" href=' . '\"' . "https://graph.facebook.com/" + $data[$index]["obj_id"] + "/picture?type=normal" . '\"' . '>';
			$str .= '<img data-src=' . '\"' . "https://graph.facebook.com/" + $data[$index]["obj_id"] + "/picture?type=thumbnail" . '\"' . ' class="img-responsive">';
			$str .= '</a>';
			$str .= '</li>';
		}
		*/
		
		Flight::render('index_view.php', array('data' => $str));
	});
	
	$app -> route('GET /bower_components/bootswatch/flatly/@FileName', function($FileName) {
		$FileName = htmlentities($FileName, "utf-8");
		echo @file_get_contents($FileName);
	});
	
	$app -> route('GET /css/@FileName', function($FileName) {
		$FileName = htmlentities($FileName, "utf-8");
		echo @file_get_contents($FileName);
	});
	
	$app -> route('GET /bower_components/jquery/dist/@FileName', function($FileName) {
		$FileName = htmlentities($FileName, "utf-8");
		echo @file_get_contents($FileName);
	});
	
	$app -> route('GET /bower_components/bootstrap/dist/js/@FileName', function($FileName) {
		$FileName = htmlentities($FileName, "utf-8");
		echo @file_get_contents($FileName);
	});
	
	$app -> route('GET /bower_components/lazyloadxt/dist/@FileName', function($FileName) {
		$FileName = htmlentities($FileName, "utf-8");
		echo @file_get_contents($FileName);
	});
	
	$app -> route('GET /bower_components/swipebox/src/js/@FileName', function($FileName) {
		$FileName = htmlentities($FileName, "utf-8");
		echo @file_get_contents($FileName);
	});
	
	$app -> route('GET /js/@FileName', function($FileName) {
		$FileName = htmlentities($FileName, "utf-8");
		echo @file_get_contents($FileName);
	});
	
	Flight::map('notFound', function(){
		// Handle not found
		echo "Not found";
	});

	$app -> start();
?>