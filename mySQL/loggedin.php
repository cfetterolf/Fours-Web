<?php 

	echo $_COOKIE['id'];

	if ($_POST['submit']) {
		if (!$_POST['email']) $error.="<br />Please enter your email";
			else if !(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="<br />Please enter a valid email address";
		if (!$_POST['password']) $error.="<br />Please enter a password";
		else {
			if (strlen($_POST['password'])<8 $error.="<br />Please enter a password with at least 8 characters");
			if (!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br />Please include at least one capital letter in password";
		}

		if ($error) echo "There were error(s) in your signup details: ".$error;
	}

?>