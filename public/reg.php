<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/flatly.css">
</head>

<body>
<div class="jumbotron">
    <div class="container">
        <h2>Stample</h2>
    </div>
</div>
<div class="container">
    <form method="post" class="form-horizontal" action="/public/account/login">
        <fieldset>
            <div class="form-group">
                <input class="form-control input-lg" type="text" name="login-name"
                    placeholder="Namn ex. Stefan Folkesson">
            </div>
            <div class="form-group">
                <input class="form-control input-lg" type="email" name="login-email"
                       placeholder="Email ex.stefan.folkesson@it-gymnasiet.se">
            </div>
            <div class="form-group">
                <input class="form-control input-lg" type="password" name="login-password" placeholder="Lösenord">
            </div>
            <div class="form-group">
                <input class="form-control input-lg" type="password" name="" placeholder="Bekräfta Lösenord">
            </div>
            <div class="form-group">
                <input class="btn btn-primary btn-rasied" value="Registrera dig" type="submit">
            </div>
        </fieldset>
    </form>
</div>
</body>


<footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</footer>