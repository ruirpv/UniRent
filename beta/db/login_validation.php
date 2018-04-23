<?php
	
	require_once('unirent_functions.php');

  	// connect to UniRent DB
  	$conn = db_connect();

	session_start(); // Starting Session
	$error = ''; // Variable To Store Error Message

	if (isset($_POST['submit'])) {
		$pageName = $_POST['pageName'];
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Username or Password is invalid1";
			echo $error;
		} else {
			// Define $username and $password
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			// SQL query to fetch information of registerd users and finds user match.
			$result = $conn->query("select * from Login where username = '$username' AND password = '$password'");
			//$rows = mysql_num_rows($query);

			if (!$result) {
				echo "Something is wrong!!";
			}

			if ($result->num_rows > 0) {
				$_SESSION['login_user'] = $username; // Initializing Session
				if ((strcmp("login",$pageName)) == 0) {
					header("location: ../listings.php"); // Redirecting To Portuguese Home Page
				} else{ 
					header("location: ../listings_EN.php"); // Redirecting To English Home Page
				}
			} else {
				$error = "Username or Password is invalid";
				echo $error;
			}

			// disconnect to UniRent DB
  			$conn->close();
		}
	}
?>