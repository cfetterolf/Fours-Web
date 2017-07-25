<? include("includes/login-user.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Play Fours - Math Puzzles</title>

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

    <script src="jquery-3.2.1.min.js"></script>

    <link href="css/style.css" rel="stylesheet">
    
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
      <a href="landing.php" class="navbar-brand"><img src="assets/float_icon_4.png" width="40px" id="brandImage"></a>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#home">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#about">About</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Play <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Play Fours</a></li>
            <li><a href="#leaderboard">Leaderboard</a></li>
            <li><a href="#">Tutorial</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="https://itunes.apple.com/us/app/fours-unlimited-kenken-puzzles!/id1181549788?mt=8" target="_blank">Download the App</a></li>
          </ul>
        </li>
      </ul>

      <?php
        if($_SESSION['loggedin']) {
          include 'menu_authenticated.php';
        }
        else{
          include 'menu_unauthenticated.php';
        }
      ?>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!------------ Login ------------>

<div class="container contentContainer" id="footer">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Log In</div>
                    <!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div> -->
                </div>     

                <div style="padding-top:30px" class="panel-body" >
                        
                    <form id="loginform" class="form-horizontal" role="form">      
                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="login-email" type="email" class="form-control" name="loginemail" placeholder="Email">                                        
                                </div>
                            
                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="login-password" type="password" class="form-control" name="loginpassword" placeholder="Password">
                                </div>

                            <div style="margin-top:10px" class="form-group">

                                <div class="col-sm-12 controls">
                                    <a class="btn btn-default" id="testLogin">Test Login</a>
                                    <button class="btn btn-success" id="btn-login">Log In</button>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:90%" >
                                        Don't have an account?
                                    <a href="https://itunes.apple.com/us/app/fours-unlimited-kenken-puzzles!/id1181549788?mt=8" target="_blank">
                                        Download the App
                                    </a>
                                    </div>
                                </div>
                            </div>    
                        </form>     
                    </div>                     
                </div>  
    </div>



    <!------------ SIGN UP ------------>

    <!-- <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title" id="testTitle">Sign Up</div>
                        <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Log In</a></div>
                    </div>  
                    <div class="panel-body" >
                        <form id="signupform" class="form-horizontal" role="form" method="post">
                              
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="text" id="sign-up-email" class="form-control" name="email" placeholder="something@example.com">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">First Name</label>
                                <div class="col-md-9">
                                    <input id="sign-up-firstName" type="text" class="form-control" name="firstname" placeholder="ex: Paul" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                <div class="col-md-9">
                                    <input id="sign-up-lastName" type="text" class="form-control" name="lastname" placeholder="ex: Watson" >
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input id="sign-up-password" type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group">
                                                                      
                                <div class="col-md-offset-3 col-md-9">
                                    <input type="button" value="Sign Up" id="sign-up" class="btn btn-success" />  
                                </div>
                            </div>
                            
                            
                            
                        </form>
                     </div>
                </div>   
     </div> 
</div> -->

 <!--Include firebase.js  -->
<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>

<script> 
    // Initialize Firebase
  var config = {
    apiKey: "AIzaSyDLsOqdBhPF-bFrtqsM_SDGm9SAq5HYDXA",
    authDomain: "fours-4b88b.firebaseapp.com",
    databaseURL: "https://fours-4b88b.firebaseio.com",
    projectId: "fours-4b88b",
    storageBucket: "fours-4b88b.appspot.com",
    messagingSenderId: "718975462618"
  };
  firebase.initializeApp(config);

  $(document).ready(function() {

    $('#testLogin').click(function() {
        alert('test');
    }

  }
    
</script>


<!---------- MARK: FOOTER ---------->

