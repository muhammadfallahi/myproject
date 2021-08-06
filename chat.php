<?php

require_once "messageerror.php";
require_once "message.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>chatroom</title>
  </head>
  <body>
  <div class="main">
  <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
  <a class="navbar-brand">Chatroom</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/m.54/p5/contacts.php">contacts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">edit</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container p-5 mb-5"> <?php messageshow($allmessage)  ?>  </div>
<div class="p-2 bg-light fixed-bottom ">
<form action="savemessage.php" method="POST">
    <div class="container">
  <div class="input-group mb-3">
  
  <input type="text" class="form-control" name="message" placeholder="message <?php echo  messageerror() ?>"  aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Send</button>
  </div>
</div>
</div>
</form>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>