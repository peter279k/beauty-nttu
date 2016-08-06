<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>表特牆</title>
	<link href="bower_components/bootswatch/flatly/bootstrap.min.css" rel="stylesheet">
	<style>
		.hide-bullets {
			list-style:none;
			margin-left: -40px;
			margin-top:20px;
		}
	
		.carousel-inner>.item>img, .carousel-inner>.item>a>img {
			width: 100%;
		}
	
		.thumbnail{
			border: 1px solid white;
			padding: 2px;
		}
	</style>
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bower_components/lazyloadxt/dist/jquery.lazyloadxt.min.js"></script>
	<script src="bower_components/swipebox/src/js/jquery.swipebox.min.js"></script>
	<script src="js/index.js"></script>
</head>
<body>
	
<div class="container">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-sm-12" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets"><?php echo $data; ?></ul>
            </div>
           
            <!--/Slider-->
        </div>

    </div>
</div>
</body> 
</html>
