<?php

	session_start();

    if ($_GET["logout"]==1) {
        $_SESSION = array();
        session_destroy();
        $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/landing.php';
        header('Location: ' . $home_url);
    }
    include("connection.php");

    if ($_POST['submit'] == "Sign Up") {
        
        if (!$_POST['email']) {
            $error.="<br />Please enter your email address.";
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error.="<br />Please enter a valid email address.";
        }

        if (!$_POST['firstname']) {
            $error.="<br />Please enter your First Name.";
        }

        if (!$_POST['lastname']) {
            $error.="<br />Please enter your Last Name.";
        }
        
        if (!$_POST['password']) {
            $error.="<br />Please enter your password.";
        } else {
            if (strlen($_POST['password']) < 8) {
                $error.="<br />Please enter a password with atleast 8 characters in length.";
            }
            if (!preg_match('`[A-Z]`', $_POST['password'])) {
                $error.="<br />Please include at least one capital letter in your password.";
            }
        }
        
        if ($error) {
            $error = "There were error(s) in your registration details:".$error;
        } else {
            
            $query="SELECT * FROM `users` WHERE `email`='".mysqli_real_escape_string($link, $_POST['email'])."'";
            $result=mysqli_query($link, $query);
            $results=mysqli_num_rows($result);
            
            if ($results) {
                $error = "That email address is already registered. Do you wish to log in?";
            } else {
                // $query="INSERT INTO `users` (`email`, `firstname`, `lastname`, `password`) VALUES('".mysqli_real_escape_string($link, $_POST['email'])."', '".mysqli_real_escape_string($link, $_POST['firstname'])."', '".mysqli_real_escape_string($link, $_POST['lastname'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
                // mysqli_query($link, $query);
                echo "
                    <script type=\"text/javascript\">
                        document.querySelector('#sign-up').addEventListener('click', function(e) {
                        var email = document.querySelector('#sign-up-email').value;
                        var firstName = document.querySelector('#sign-up-firstName').value;
                        var lastName = document.querySelector('#sign-up-lastName').value;
                        var password = document.querySelector('#sign-up-password').value
                      

                        firebase.auth().createUserWithEmailAndPassword(" . $_POST['email'] . ", " . $_POST['password'] . ").catch(function(error) {
                            // Handle Errors here.
                            var errorCode = error.code;
                            var errorMessage = error.message;
                            document.getElementById('testTitle').innerText = error.message;
                        })
                    </script>
                ";

                // SIGN UP USER

                $_SESSION['id']= //USER ID
                $_SESSION['firstname'] = $_POST['firstname'];
                $_SESSION['loggedin'] = true;

                // Redirect to logged in page
                $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/landing.php';
                header('Location: ' . $home_url);
                die();


            }
        }
    }

    if ($_POST['submit']=="Log In") {

        $query="SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";

        $result = mysqli_query($link, $query);

        $row = mysqli_fetch_array($result);

        if ($row) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['loggedin'] = true;

            // Redirect to logged in page
            $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/landing.php';
            header('Location: ' . $home_url);
            die();

        } else {

            $error = "We could not find a user with that email and password.  Please try again.";

        }

    }
?>