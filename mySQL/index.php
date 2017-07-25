<?php

	//session_start();

	//$_SESSION['loginid'] = 1;
	//echo $_SESSION['loginid'];

	/*
	$link = mysqli_connect("shareddb1a.hosting.stackcp.net", "exampledb-343e25", "ME9DLaRcjblW", "exampledb-343e25");
	if (mysqli_connect_error()) {
		die("Could not connect to database");
	}

	// INSERT DATA into DATABASE

	// $query = "INSERT INTO `users` (`name`, `email`, `password`)
						// VALUES('Bob', 'bob@gmail.com', 'pass123')";
	// $query="UPDATE `users` SET `email`='ian@hotmail.com' WHERE `id`=3 LIMIT 1";
	//mysqli_query($link, $query);

	$name = "Chris";

	$query = "SELECT * FROM users WHERE `name`='".mysqli_real_escape_string($link, $name)."'";

	if ($result = mysqli_query($link, $query)) {

		while ($row = mysqli_fetch_array($result)) {

			print_r($row);
			print_r("<br />");

		}
	}
	*/

	// echo $_COOKIE['id'];

	session_start();

    if ($_POST['submit']) {
        
        if (!$_POST['email']) {
            $error.="<br />Please enter your email address.";
        } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error.="<br />Please enter a valid email address.";
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
            echo "There were error(s) in your registration details.".$error;
        } else {
            $link = mysqli_connect("shareddb1a.hosting.stackcp.net", "exampledb-343e25", "ME9DLaRcjblW", "exampledb-343e25");
            $query="SELECT * FROM `users` WHERE `email`='".mysqli_real_escape_string($link, $_POST['email'])."'";
            $result=mysqli_query($link, $query);
            $results=mysqli_num_rows($result);
            
            if ($results) {
                echo "That email address is already registered. Do you wish to log in?";
            } else {
                $query="INSERT INTO `users` (`email`, `password`) VALUES('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
                mysqli_query($link, $query);
                
                echo "Your account has been signed up!";

                $_SESSION['id']=mysqli_insert_id($link);

                print_r($_SESSION);
            }
        }
    }
?>

<form method="post">
    <input type="email" name="email" id="email" />
    <input type="password" name="password" />
    <input type="submit" value="Sign Up" name="submit"/>    
</form>
















