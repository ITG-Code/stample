<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/public/css/flatly.css">
		<script type="text/javascript" src="/public/js/klocka.js"></script>
		<title>
			
		</title>
	</head>
	<body onload="startTid()">
		<div class="jumbotron">
			<div class="container">
				<h2>Namn</h2>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<a href="#" class="btn btn-primary btn-lg">Stämpla ut</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="well">
						<p id="txt"></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="hidden-lg hidden-md col-sm-12 col-xs-12">
					<div class="well">
						<p>här ska det vara klockslaget när man stämplade in</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<a href="#" class="btn btn-danger btn-lg">Logga ut</a>
				</div>
				<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
					<div class="well">
						<p>här ska det vara klockslaget när man stämplade in</p>
					</div>
				</div>
			</div>
		</div>
	</body>
	<footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</footer>
</html>