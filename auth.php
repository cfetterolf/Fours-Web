
<!-- <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-header">

  
  <header class="mdl-layout__header mdl-color-text--white mdl-color--light-blue-700">
    <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-grid">
      <div class="mdl-layout__header-row mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--8-col-desktop">
        <a href="/"><h3>Firebase Authentication</h3></a>
      </div>
    </div>
  </header>

  <main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-grid">

      
      <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-cell--12-col-tablet mdl-cell--12-col-desktop">
        <div class="mdl-card__title mdl-color--light-blue-600 mdl-color-text--white">
          <h2 class="mdl-card__title-text">Firebase Email &amp; Password Authentication</h2>
        </div>
        <div class="mdl-card__supporting-text mdl-color-text--grey-600">
          <p>Enter an email and password below and either sign in to an existing account or sign up</p>

          <input class="mdl-textfield__input" style="display:inline;width:auto;" type="text" id="email" name="email" placeholder="Email"/>
          &nbsp;&nbsp;&nbsp;
          <input class="mdl-textfield__input" style="display:inline;width:auto;" type="password" id="password" name="password" placeholder="Password"/>
          <br/><br/>
          <button disabled class="mdl-button mdl-js-button mdl-button--raised" id="quickstart-sign-in" name="signin">Sign In</button>
          &nbsp;&nbsp;&nbsp;
          <button class="mdl-button mdl-js-button mdl-button--raised" id="quickstart-sign-up" name="signup">Sign Up</button>
          &nbsp;&nbsp;&nbsp;
          <button class="mdl-button mdl-js-button mdl-button--raised" disabled id="quickstart-verify-email" name="verify-email">Send Email Verification</button>
          &nbsp;&nbsp;&nbsp;
          <button class="mdl-button mdl-js-button mdl-button--raised" id="quickstart-password-reset" name="verify-email">Send Password Reset Email</button>

          
          <div class="quickstart-user-details-container">
            Firebase sign-in status: <span id="quickstart-sign-in-status">Unknown</span>
            <div>Firebase auth <code>currentUser</code> object value:</div>
            <pre><code id="quickstart-account-details">null</code></pre>
          </div>
        </div>
      </div>

    </div>
  </main>
</div> -->

<? include('includes/header.php'); ?>

<!------------ Login ------------>

<div class="container contentContainer" id="footer">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Log In</div>
                    <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                </div>     

                <div style="padding-top:30px" class="panel-body" >

                    <?php
                    if ($error) {
                        echo '<div class="alert alert-danger col-sm-12">'.addslashes($error).'</div>';
                    }
                    ?>
                        
                    <form id="loginform" class="form-horizontal" role="form" method="post">      
                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="login-email" type="email" class="form-control" name="loginemail" value="<? echo addslashes($_POST['loginemail']); ?>" placeholder="Email">                                        
                                </div>
                            
                        <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                    <input id="login-password" type="password" class="form-control" name="loginpassword" placeholder="Password" value="<? echo addslashes($_POST['loginpassword']); ?>">
                                </div>

                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->

                                <div class="col-sm-12 controls">
                                    <input type="submit" name="submit" class="btn btn-success" id="btn-login" value="Log In">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:90%" >
                                        Don't have an account?
                                    <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                        Sign Up Here
                                    </a>
                                    </div>
                                </div>
                            </div>    
                        </form>     



                    </div>                     
                </div>  
    </div>



    <!------------ SIGN UP ------------>

    <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title" id="testTitle">Sign Up</div>
                        <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Log In</a></div>
                    </div>  
                    <div class="panel-body" >
                        <form id="signupform" class="form-horizontal" role="form" method="post">
                            
                            <?php
                                if ($error) {
                                    echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
                                }
                            ?>
                              
                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input type="text" id="sign-up-email" class="form-control" name="email" placeholder="something@example.com" value="<? echo addslashes($_POST['email']); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="firstname" class="col-md-3 control-label">First Name</label>
                                <div class="col-md-9">
                                    <input id="sign-up-firstName" type="text" class="form-control" name="firstname" placeholder="ex: Paul" value="<? echo addslashes($_POST['firstname']); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                <div class="col-md-9">
                                    <input id="sign-up-lastName" type="text" class="form-control" name="lastname" placeholder="ex: Watson" value="<? echo addslashes($_POST['lastname']); ?>">
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <label for="password" class="col-md-3 control-label">Password</label>
                                <div class="col-md-9">
                                    <input id="sign-up-password" type="password" class="form-control" name="password" placeholder="Password" value="<? echo addslashes($_POST['password']); ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <!-- Button -->                                        
                                <div class="col-md-offset-3 col-md-9">
                                    <input type="button" value="Sign Up" id="sign-up" class="btn btn-success" />  
                                </div>
                            </div>
                            
                            
                            
                        </form>
                     </div>
                </div>   
     </div> 
</div>

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
  </script>

  <script type="text/javascript">
    /**
     * Handles the sign in button press.
     */
    function toggleSignIn() {
      if (firebase.auth().currentUser) {
        // [START signout]
        firebase.auth().signOut();
        // [END signout]
      } else {
        var email = document.getElementById('login-email').value;
        var password = document.getElementById('login-password').value;
        if (email.length < 4) {
          alert('Please enter an email address.');
          return;
        }
        if (password.length < 4) {
          alert('Please enter a password.');
          return;
        }
        // Sign in with email and pass.
        // [START authwithemail]
        firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
          // Handle Errors here.
          var errorCode = error.code;
          var errorMessage = error.message;
          // [START_EXCLUDE]
          if (errorCode === 'auth/wrong-password') {
            alert('Wrong password.');
          } else {
            alert(errorMessage);
          }
          console.log(error);
          // document.getElementById('quickstart-sign-in').disabled = false;
          // [END_EXCLUDE]
        });
        // [END authwithemail]
      }
      // document.getElementById('quickstart-sign-in').disabled = true;
    }
    /**
     * Handles the sign up button press.
     */
    function handleSignUp() {
      var email = document.getElementById('sign-up-email').value;
      var password = document.getElementById('sign-up-password').value;
      if (email.length < 4) {
        alert('Please enter an email address.');
        return;
      }
      if (password.length < 4) {
        alert('Please enter a password.');
        return;
      }
      // Sign in with email and pass.
      // [START createwithemail]
      firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // [START_EXCLUDE]
        if (errorCode == 'auth/weak-password') {
          alert('The password is too weak.');
        } else {
          alert(errorMessage);
        }
        console.log(error);
        // [END_EXCLUDE]
      });
      // [END createwithemail]
    }
    /**
     * Sends an email verification to the user.
     */
    // function sendEmailVerification() {
    //   // [START sendemailverification]
    //   firebase.auth().currentUser.sendEmailVerification().then(function() {
    //     // Email Verification sent!
    //     // [START_EXCLUDE]
    //     alert('Email Verification Sent!');
    //     // [END_EXCLUDE]
    //   });
    //   // [END sendemailverification]
    // }
    // function sendPasswordReset() {
    //   var email = document.getElementById('email').value;
    //   // [START sendpasswordemail]
    //   firebase.auth().sendPasswordResetEmail(email).then(function() {
    //     // Password Reset Email Sent!
    //     // [START_EXCLUDE]
    //     alert('Password Reset Email Sent!');
    //     // [END_EXCLUDE]
    //   }).catch(function(error) {
    //     // Handle Errors here.
    //     var errorCode = error.code;
    //     var errorMessage = error.message;
    //     // [START_EXCLUDE]
    //     if (errorCode == 'auth/invalid-email') {
    //       alert(errorMessage);
    //     } else if (errorCode == 'auth/user-not-found') {
    //       alert(errorMessage);
    //     }
    //     console.log(error);
    //     // [END_EXCLUDE]
    //   });
    //   // [END sendpasswordemail];
    // }
    /**
     * initApp handles setting up UI event listeners and registering Firebase auth listeners:
     *  - firebase.auth().onAuthStateChanged: This listener is called when the user is signed in or
     *    out, and that is where we update the UI.
     */
    function initApp() {
      // Listening for auth state changes.
      // [START authstatelistener]
      firebase.auth().onAuthStateChanged(function(user) {
          if (user) {
            $_SESSION['loggedin'] = true;
            $_SESSION['firstname'] = firebase.database().ref("users/"+user.uid);
          } else {
            $_SESSION['loggedin'] = false;
          }
        // [START_EXCLUDE silent]
        // document.getElementById('quickstart-verify-email').disabled = true;
        // [END_EXCLUDE]
        // if (user) {
        //   // User is signed in.
        //   var displayName = user.displayName;
        //   var email = user.email;
        //   var emailVerified = user.emailVerified;
        //   var photoURL = user.photoURL;
        //   var isAnonymous = user.isAnonymous;
        //   var uid = user.uid;
        //   var providerData = user.providerData;
        //   // [START_EXCLUDE]
        //   document.getElementById('quickstart-sign-in-status').textContent = 'Signed in';
        //   document.getElementById('quickstart-sign-in').textContent = 'Sign out';
        //   document.getElementById('quickstart-account-details').textContent = JSON.stringify(user, null, '  ');
        //   if (!emailVerified) {
        //     document.getElementById('quickstart-verify-email').disabled = false;
        //   }
        //   // [END_EXCLUDE]
        // } else {
        //   // User is signed out.
        //   // [START_EXCLUDE]
        //   document.getElementById('quickstart-sign-in-status').textContent = 'Signed out';
        //   document.getElementById('quickstart-sign-in').textContent = 'Sign in';
        //   document.getElementById('quickstart-account-details').textContent = 'null';
        //   // [END_EXCLUDE]
        // }
        // // [START_EXCLUDE silent]
        // document.getElementById('quickstart-sign-in').disabled = false;
        // // [END_EXCLUDE]
      });
      // [END authstatelistener]
      document.getElementById('btn-login"').addEventListener('click', toggleSignIn, false);
      document.getElementById('sign-up').addEventListener('click', handleSignUp, false);
      // document.getElementById('quickstart-verify-email').addEventListener('click', sendEmailVerification, false);
      // document.getElementById('quickstart-password-reset').addEventListener('click', sendPasswordReset, false);
    }
    window.onload = function() {
      initApp();
    };
  </script>

</body>
</html>