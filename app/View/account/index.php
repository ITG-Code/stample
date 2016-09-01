<?php
$lastcheck = $data['lastcheck'];
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/public/css/flatly.css">
  <script type="text/javascript" src="/public/js/klocka.js"></script>
</head>

<body onload="startTid()">
<div class="jumbotron">
  <div class="container">
    <h2>Namn</h2>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-2 col-xs-12 col-md-2">
      <a href="/public/account/checkin" class="btn btn-primary btn-lg">Stämpla in</a>
    </div>
    <div class="col-lg-2 col-xs-6 col-md-2">
      <div class="well">
        <p id="txt"></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-xs-12">
      <a href="/public/account/logout" class="btn btn-danger btn-lg">Logga ut</a>
    </div>
  </div>
  <?php
  //echo $lastcheck->getCheckValue() ? "Du är instämplad!" : "Du är inte instämplad!";
  ?>
</div>
</body>


<footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</footer>
</html>