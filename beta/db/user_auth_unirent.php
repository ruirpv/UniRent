<?php
	// PHP file to insert a new User in DB
	
	function register($firstName, $lastName, $emailAdress, $username, $password, $passwordAgain) {
		// register new person with db
		// return true or error message
	
		// connect to db
		$conn = db_connect();

		// check if username is unique
		$result = $conn->query("select * from User where username='" . $username . "'");
	
		if (!$result) {
			throw new Exception('Could not execute query');
		}

		if ($result->num_rows>0) {
			throw new Exception('That username is taken - go back and choose another one.');
		}
	
		// If ok, put in db
		$result = $conn->query("insert into User values('" . $firstName . "', '" . $lastName . "', '" . $emailAdress . "', '". $username . "', sha1('" . $password . "'), sha1('" . $passwordAgain . "')");

		if (!$result) {
			throw new Exception('Could not register you in database - please try again later.');
		}

		return true;
	}

?>