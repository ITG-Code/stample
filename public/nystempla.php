<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" id="theme" href="/public/css/{{ skin }}.css">
	<link rel="stylesheet" type="text/css" href="/public/css/main.css">

	<title></title>
</head>
<body>
	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-md-8 col-sm-8 col-xs-8">
					<h2>namn</h2>
				</div>
				<div class="well col-lg-2 col-md-4 col-sm-4 col-xs-4">
					<p>Klocka</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
					<a href="" class="btn btn-primary">Stuff</a>
				</div>
				<div class="col-lg-1 col-lg-offset-8 col-md-1 col-md-offset-8 col-sm-3 col-sm-offset-6 col-xs-3 col-xs-offset-6">
					<a href="" class="btn btn-danger">Logga Ut</a>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-cog responsive"></span></button>
					<ul class="dropdown-menu">
						<li><a href="">Byt Lösenord</a></li>
						<li><a href="">Adminpanel</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<a href="" class="btn btn-primary btn-lg col-lg-8 col-md-8 col-sm-6 col-xs-6"><h3>Stämpla In</h3></a>
		</div>
	</div>
	<ul class="nav nav-tabs" id="statis">
		<li class="active"><a href="#vecka" data-toggle="tab">Vecka</a></li>
		<li><a href="#monad" data-toggle="tab">Månad</a></li>
	</ul>
	<div id="myTabContent" class="tab-content">
		<div class="tab-pane fade active in" id="vecka">
			<div class="container stati">
				<div class="row text-center">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="well">
							<p></p>
							<div class="progress">
								<div class="progress-bar progress-bar-{{ colors[loop.index0] }}"
								style="width: {{ progress }}%"></div>
							</div>
							<div class="progress">
								<div class="progress-bar" style="width: 0%"></div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="monad">
			<div class="container stati">
				<div class="row text-center">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="well" data-toggle="collapse" data-target="#Juli">
							<div>
								<p>Juni</p>
								<div class="progress">
									<div class="progress-bar progress-bar-default"
									style="width: 40%"></div>
								</div>
							</div>
							<div id="Juli" class="collapse">
								<div class="row">
									<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
										<div class="well">
											<p>Den 1:a</p>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
										<div class="well">
											<p>Den 2:a</p>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
										<div class="well">
											<p>den tredje</p>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
										<div class="well">
											<p>den fjärde</p>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
										<div class="well">
											<p>den femte</p>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
										<div class="well">
											<p>den sjätte</p>
										</div>
									</div>
									<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
										<div class="well">
											<p>den sjunde</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="/public/js/main.js" charset="utf-8"></script>
	</footer>
</body>
</html>