<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Play Fours - Math Puzzles</title>

    <script src="jquery-3.2.1.min.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/style.css" rel="stylesheet">

    <script>
      window.onload = function() {
        firebase.auth().onAuthStateChanged(function(user) {
            if (user) {
              $_SESSION['loggedin'] = true;
              alert('logged in');
            } else {
              $_SESSION['loggedin'] = false;
            }
        });
      };
    </script>

  </head>
  <body data-spy="scroll" data-target=".navbar-collapse">

  <!---------- MARK: NAVBAR ---------->

  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="www.getfoursapp.com" class="navbar-brand"><img src="assets/float_icon_4.png" width="40px" id="brandImage"></a>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="landing.php#home">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="landing.php#about">About</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Play <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Play Fours</a></li>
            <li><a href="landing.php#leaderboard">Leaderboard</a></li>
            <li><a href="#">Tutorial</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="https://itunes.apple.com/us/app/fours-unlimited-kenken-puzzles!/id1181549788?mt=8" target="_blank">Download the App</a></li>
          </ul>
        </li>
      </ul>  

      <?php
        if($_SESSION['loggedin']){
          include 'menu_authenticated.php';
        }
        else{
          include 'menu_unauthenticated.php';
        }
      ?>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>