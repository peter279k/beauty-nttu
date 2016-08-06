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
	<link ref="css/index.css">
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
                <ul class="hide-bullets">
					'<?php echo $data; ?>'
                </ul>
            </div>
            <!--/Slider-->
        </div>

    </div>
</div>
</body> 
</html>
