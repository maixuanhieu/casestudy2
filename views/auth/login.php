<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in S1team</title>
    <link rel="stylesheet" href="/views/auth/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="icon" type="image/jpg" href="/Image/s1team-re.jpg" />

</head>

<body class="text-center">

    <?php
    echo $_SESSION["invalid_credentials"] ?? null;
    unset($_SESSION["invalid_credentials"]);
    ?>

    <form class="form-signin" method="POST">
        <img class="mb-4" src="/Image/s1team-re.jpg" alt="" width="200px" height="200px" style="margin: 0px !important;">
        <h1 class="h3 mb-3 font-weight-normal"><b>SIGN IN</b></h1>
        <div>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required=>
        </div>
        <div>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" name='password' placeholder="Password" required>
        </div>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me" style="color: white;"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">SIGN IN</button>
        <p class="mt-5 mb-3 text-muted">© 2012-2021</p>
    </form>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</html>