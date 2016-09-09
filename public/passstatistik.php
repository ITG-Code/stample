
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link id="theme" rel="stylesheet" type="text/css" href="/public/css/flatly.css">
	<link rel="stylesheet" type="text/css" href="/public/css/stil.css">
	<title></title>
	<script type="text/javascript">
		var switsh = false;
		
		function changeCSS() {
   			if (switsh) {
   				switsh = false;
   				document.getElementById("theme").setAttribute("href", '/public/css/flatly.css');
   			}else{
   				switsh = true;
   				document.getElementById("theme").setAttribute("href", '/public/css/darkly.css');
   			}
   		}

	</script>
</head>
<body>
	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-8">
					<a href="" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-chevron-left"></span>Tillbaka</a>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-6 col-xs-4">
					<h2>Pass Statistik</h2>
				</div>
			</div>
		</div>
	</div>
	<a href="javascript:changeCSS()">Stil1</a>
	<div class="container">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Namn</th>
					<th>Instämpling</th>
					<th>Utstämpling</th>
					<th>Antal Timmar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Olof Persson</td>
					<td>2016-09-05 08:35:38</td>
					<td>2016-09-05 16:26:38</td>
					<td>7.4h</td>
				</tr>
				<tr>
					<td>Olof Persson</td>
					<td>2016-09-05 08:35:38</td>
					<td>2016-09-05 16:26:38</td>
					<td>7.4h</td>
				</tr>
				<tr>
					<td>Olof Persson</td>
					<td>2016-09-05 08:35:38</td>
					<td>2016-09-05 16:26:38</td>
					<td>7.4h</td>
				</tr>
				<tr>
					<td>Olof Persson</td>
					<td>2016-09-05 08:35:38</td>
					<td>2016-09-05 16:26:38</td>
					<td>7.4h</td>
				</tr>
				<tr>
					<td>Olof Persson</td>
					<td>2016-09-05 08:35:38</td>
					<td>2016-09-05 16:26:38</td>
					<td>7.4h</td>
				</tr>
			</tbody>
		</table>
	</div>
	<footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="/public/js/klocka.js" charset="utf-8"></script>
	</footer>

</body>
</html>