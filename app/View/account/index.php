<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/flatly.css">
    <script type="text/javascript">
        function startTid() {
            var idag = new Date();
            var t = idag.getHours();
            var m = idag.getMinutes();
            var s = idag.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('txt').innerHTML
        }
    </script>
</head>

<body>
<div class="jumbotron">
    <div class="container">
        <h2>Namn</h2>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <a href="#" class="btn btn-primary btn-lg">Stämlpa in</a>
        </div>
        <div class="col-lg-4">

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <a href="#" class="btn btn-danger btn-lg">Logga ut</a>
        </div>
    </div>
</div>
</body>


<footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</footer>