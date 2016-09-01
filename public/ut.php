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
				<div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
					<a href="#" class="btn btn-danger btn-lg">Logga ut</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="well">
						<p>Du stämplade in:</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="well">
						<p id="txt"></p>
					</div>
				</div>
				<div class="hidden-lg hidden-md col-sm-12 col-xs-12">
					<a href="#" class="btn btn-danger btn-lg">Logga ut</a>
				</div>

			</div>
		</div>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#vecka" data-toggle="tab" aria-expanded="false">Vecka</a></li>
			<li><a href="#monad" data-toggle="tab" aria-expanded="false">Månad</a></li>
			<li><a href="#ar" data-toggle="tab" aria-expanded="false">År</a></li>
		</ul>
		<div id="myTabContent" class="tab-content">
			<div class="container">
				<div class="tab-pane fade active in" id="vecka">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							<div class="well">
								<p>Mån</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							<div class="well">
								<p>Tis</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							<div class="well">
								<p>Ons</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							<div class="well">
								<p>Tor</p>
							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">
							<div class="well">
								<p>Fre</p>
							</div>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-6 col-xs-6">
							<div class="well">
								<p>Lör</p>
							</div>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
							<div class="well">
								<p class="text-danger">Sön</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="monad">
					<div class="row">
						<div class="col-lg-1 ">
							
						</div>
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