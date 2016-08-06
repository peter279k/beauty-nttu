<!DOCTYPE HTML>
<html>
<head>
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>表特牆</title>
	<link ref="bower_components/bootswatch/flatly/bootstrap.min.css">
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bower_components/lazyloadxt/dist/jquery.lazyloadxt.min.js"></script>
	<script src="bower_components/swipebox/src/js/jquery.swipebox.min.js"></script>
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
</head>
<body>
	<div class="container">
    <div id="main_area">
        <!-- Slider -->
        <div class="row">
            <div class="col-sm-12" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-3">
                        <a class="img-thumbnail" id="carousel-selector-0">
                            <img src="http://placehold.it/150x150&text=zero" class="img-responsive">
                        </a>
                    </li>
                </ul>
            </div>
            <!--/Slider-->
        </div>

    </div>
</div>
</body> 
</html>
