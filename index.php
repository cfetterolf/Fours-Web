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
    <link href="https://fonts.googleapis.com/css?family=Fresca" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/style.css" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    
  </head>
  <body data-spy="scroll" data-target=".navbar-collapse">

  <!---------- MARK: NAVBAR ---------->

  
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- <div class="navbar-header" style="display: inline-block;">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> -->

      <!-- <div style="display: inline-block;" class="navbar-left">
        <a href="landing.php"><img src="assets/float_icon_4.png" width="50px" id="brandImage"></a>
        <h2>FOURS</h2>
      </div> -->

      <!-- <a href="landing.php"><img src="assets/float_icon_4.png" width="50px" id="brandImage" class="navbar-left" style="margin-top: 10px;"></a> -->

      <!-- <a class="navbar-brand">FOURS</a> -->
      
      
    <!-- </div> -->

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="landing.php" class="navbar-brand">FOURS</a>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="margin-left: 20px;">
        <li class="active"><a href="#home">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#leaderboard">Leaderboard</a></li>
        <li><a href="https://itunes.apple.com/us/app/fours-unlimited-kenken-puzzles!/id1181549788?mt=8" target="_blank">Download the App</a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Play <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Play Fours</a></li>
            <li><a href="#leaderboard">Leaderboard</a></li>
            <li><a href="#">Tutorial</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="https://itunes.apple.com/us/app/fours-unlimited-kenken-puzzles!/id1181549788?mt=8" target="_blank">Download the App</a></li>
          </ul>
        </li> -->
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<!---------- MARK: ALERT ---------->




<!---------- MARK: BODY1 ---------->

<div class="container contentContainer" id="home" style="margin-top: -15px;">
  <div class="row">

      <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
          <h1 class="center title big-title" id="topRow">FOURS</h1>
          <p class="lead center">Play unlimited math puzzles, for free.</p>
          <p class="bold"></p>
          <p class="center">
            <a href="https://itunes.apple.com/us/app/fours-unlimited-kenken-puzzles!/id1181549788?mt=8" target="_blank">
              <img class="app-icon-small" src="assets/apple_logo.png" />
            </a>
            <a href="#" id="pop" data-toggle="modal" data-target="#myModal">
              <img class="app-icon-small" src="assets/android_logo.png" />
            </a>
          </p>

          
      </div>
      
      <div class="col-sm-6 vertical-center" style="margin-top: 30px;">
          <img id="slider" src="assets/slide-4.png" class="img-fluid new-width marginBottom" alt="Responsive image">
      </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Hang Tight!</h3>
      </div>
      <div class="modal-body">
        Unfortunately, Fours is only available on iOS right now.  Keep your eyes peeled, though - Fours is coming to Android soon!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!---------- MARK: BODY2 ---------->

<div class="container contentContainer" id="about">

  <div class="row"><h1 class="marginTopBig"></h1></div>

  <div class="row">
    <div class="col-sm-6 vertical-center">
      <img src="assets/example_image_full.png" class="img-fluid new-width marginBottom" alt="Responsive image">
    </div>

    <div class="col-sm-6" style="margin-top: 15px;">
      <!-- <span><img src="assets/float_icon_3.png" class="float-icon"></span> -->
      <h1 class="center" style="font-family: 'Fresca', sans-serif; font-weight: bold; font-size: 3em;"> What is Fours? </h1>
      <hr></hr>
      <p class="center marginBottom text-muted" id="description-text">Fours is an app that offers a modern take on the popular KenKen® puzzles. Fours can generate over 600,000 different puzzles, allows you to keep track of your best finish times, and includes engaging challenge modes to test your skills.  What's more, Fours not only allows you to play unlimited puzzles, it teaches you how to play with a step by step, interactive tutorial.</p>
      <p></p>
      <p class="center marginBottom text-muted" id="description-text">Fours puzzles, otherwise known as Mathdoku, are like Sudoku puzzles with an arithmetic twist. Each row and column must contain the numbers 1-4 with no repeated values, much like Sudoku. The board is broken up into cages, with each cage containing a "target" number and an operation. The values inside of each cage must use themselves, combined with the operator, to make the target number. Once the board is filled correctly, the puzzle is solved.</p>
    </div>
  </div>
</div>

 <hr align="center" width="90%"></hr>


 <!---------- MARK: LEADERBOARD ---------->

 <div class="container contentContainer" id="leaderboard" style="margin-bottom: 50px;">
   <div class="row" style="text-align: center; margin-top: 65px;"><h1 class="center" style="font-family: 'Fresca', sans-serif; font-weight: bold; font-size: 3em;">Global Leaderboard</h1></div>

   <hr align="center" width="60%"></hr>

     <!---------- EASY LEADERBOARD ---------->
      <div class="row marginTopBig">
        <div class="col-md-3" style="margin-top: 20px;">
          <div class="table-bg">
          <h3 class="center" id="easyTitle">Easy Times</h3>
          
          <table class="table" id="easyTable">
            <tbody id="easyBody">
            </tbody>
          </table>
          </div>
        </div>
        <!---------- MEDIUM LEADERBOARD ---------->
        <div class="col-md-3" style="margin-top: 20px;">
          <div class="table-bg">
          <h3 class="center">Medium Times</h3>
          <table class="table" id="mediumTable">
            <tbody id="mediumBody">
            </tbody>
          </table>
          </div>
        </div>
        <!---------- HARD LEADERBOARD ---------->
        <div class="col-md-3" style="margin-top: 20px;">
          <div class="table-bg">
          <h3 class="center">Hard Times</h3>
          <table class="table" id="hardTable">
            <tbody id="hardBody">
            </tbody>
          </table>
          </div>
        </div>
        <!---------- OVERALL LEADERBOARD ---------->
        <div class="col-md-3" style="margin-top: 20px;margin-bottom: 20px;">
          <div class="table-bg">
          <h3 class="center">Overall Times</h3>
          <table class="table" id="overallTable">
            <tbody id="overallBody">
            </tbody>
          </table>
          </div>
        </div>

   </div>
 </div>



<!---------- MARK: BODY3 ---------->

<div class="container contentContainer" id="footer">
  <div class="row">
    <h1 class="center title" style="font-family: 'Fresca', sans-serif; font-weight: bold; font-size: 3.5em;">Get the App</h1>
    <p class="lead center">Start your journey now, and download Fours for free!</p>
    <p class="center" style="margin-top: 50px;"><a href="https://itunes.apple.com/us/app/fours-unlimited-kenken-puzzles!/id1181549788?mt=8" target="_blank">
      <img id="appIcon" src="assets/app_store.svg" />
    </a></p>
  </div>
</div>

<!---------- MARK: FOOTER ---------->

<?php include('includes/footer.php'); ?>

<!------ FIREBASE ---->


<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
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

  let rootRef = firebase.database().ref("leaderboard");

  // INIT EASY TABLE
  let easyRef = firebase.database().ref("leaderboard/easy-leaderboard");
  var i = 1;
  easyRef.orderByChild("time").limitToFirst(10).on("child_added", function(snapshot) {
      document.getElementById("easyBody").appendChild(addNode(snapshot));
  });

  // INIT Medium TABLE
  let medRef = firebase.database().ref("leaderboard/medium-leaderboard");
  var i = 1;
  medRef.orderByChild("time").limitToFirst(10).on("child_added", function(snapshot) {
      document.getElementById("mediumBody").appendChild(addNode(snapshot));
  });

  // INIT HARD TABLE
  let hardRef = firebase.database().ref("leaderboard/hard-leaderboard");
  var i = 1;
  hardRef.orderByChild("time").limitToFirst(10).on("child_added", function(snapshot) {
      document.getElementById("hardBody").appendChild(addNode(snapshot));
  });

  // INIT OVERALL TABLE
  let bestRef = firebase.database().ref("leaderboard/best-leaderboard");
  var i = 1;
  bestRef.orderByChild("time").limitToFirst(10).on("child_added", function(snapshot) {
      document.getElementById("overallBody").appendChild(addNode(snapshot));
  });

  // Helper Function
  function addNode(snapshot) {
      var node = document.createElement("TR");

      var avatarNode = document.createElement("TD"); 
      var DOM_img = document.createElement("img");
      DOM_img.src = 'assets/avatar/avatar_'+snapshot.val().avatar+'.png'; 
      DOM_img.className = 'avatar-img';
      avatarNode.appendChild(DOM_img);
      avatarNode.style.cssText = 'width: 40px;';
      node.appendChild(avatarNode);

      var nameNode = document.createElement("TD");  
      var textNode = document.createTextNode(snapshot.val().name)
      nameNode.appendChild(textNode);
      node.appendChild(nameNode);
      
      var timeNode = document.createElement("TD");  
      timeNode.appendChild(document.createTextNode(convertTime(snapshot.val().time)));
      node.appendChild(timeNode);

      return node;
  }

  // Mkae time pretty
  function convertTime(sec) {
      let minutes = Math.floor(sec / 60);
      let seconds = sec - (60*minutes);
      var minString = '';
      var secString = '';
      if (minutes < 10) {minString+='0';}
      if (seconds < 10) {secString+='0';}
      minString+=minutes;
      secString+=seconds;
      return minString+':'+secString;
  }
</script>
