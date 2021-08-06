
<?php require_once "signinvalidation.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>signin</title>
</head>
<body>
    <div class="container vh-100 ">
        <div class="row justify-content-center vh-100 align-items-center">
            <form action="login.php" method="POST">
            <div class="form-group">
            <div class="text-danger"><?php echo userinvalid($signinusername ,$array); ?></div>
                    <label for="Username">Userame</label>
                    <input type="text" class="form-control" id="Username" name="Username" placeholder="Userame" required>
                </div>
                <div class="form-group">
                <div class="text-danger"><?php echo passinvalid($signinpassword ,$signinusername ,$array); ?></div>
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="password" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Signin</button>
                    <a class="btn btn-primary" href="http://localhost/m.54/p5/signup.php" role="button">signup</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>