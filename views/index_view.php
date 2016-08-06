<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>表特牆</title>
	<link href="bower_components/bootswatch/darkly/bootstrap.min.css" rel="stylesheet">
	<link href="bower_components/swipebox/src/css/swipebox.min.css" rel="stylesheet">
	<style>
		body {
			padding-top: 70px;
			/* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
		}
	</style>
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bower_components/swipebox/src/js/jquery.swipebox.min.js"></script>
	<script src="js/index.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">表特東大</a>
            </div>
        </div>
        <!-- /.container -->
    </nav>
	<div class="container">
		<div class="row">
            <div class="col-lg-12 text-center">
				<h2>資料來源：<a href="https://www.facebook.com/BeautyNTTU/?fref=ts">表特東大</a></h2>
				<p>僅提供瀏覽，欣賞</p>
				<?php echo $data; ?>
			</div>
		</div>
	</div>
</body> 
</html>
