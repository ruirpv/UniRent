<?php
	// PHP file to insert a new User in DB

	function register_Login($username, $password, $passwordAgain) {
		// register new Login in db
		// return true or error message
	
		// connect to db
		$conn = db_connect();

		// check if username is unique
		$result = $conn->query("select * from Customer where username = '" . $username . "'");
	
		if (!$result) {
			throw new Exception('Could not execute query');
		}

		if ($result->num_rows>0) {
			throw new Exception('That username is taken - go back and choose another one.');
		}
	
		// If ok, put in db
		$result = $conn->query("insert into Login values('', '" . $username . "', sha1('" . $password . "'), sha1('" . $passwordAgain . "'))");

		if (!$result) {
			throw new Exception('Could not register you in database - please try again later.');
		}

		return true;
	}
	
	function register_Customer($firstName, $surname, $dateOfBirthday, $emailAdress, $phoneNumber, $nationality, $gender, $studentNumber, $studentDegree, $Login_idLogin) {
		// register new Customer in db
		// return true or error message
	
		// connect to db
		$conn = db_connect();

		// check if email is unique
		$result = $conn->query("select * from Customer where email = '" . $emailAdress . "'");
	
		if (!$result) {
			throw new Exception('Could not execute query');
		}

		if ($result->num_rows>0) {
			throw new Exception('That username is taken - go back and choose another one.');
		}
	
		// If ok, put in db
		$result = $conn->query("insert into Customer values('', '" . $firstName . "', '" . $surname . "', '" . $dateOfBirthday . "', '" . $emailAdress . "', '". $phoneNumber . "', '". $nationality . "', ". $gender . ", '', '', '', '". $studentNumber . "', '". $studentDegree . "', ". $Login_idLogin . ")");

		if (!$result) {
			throw new Exception('Could not register you in database - please try again later.');
		}

		return true;
	}

	function retrieve_Login($emailAdress) {
		// register new Customer in db
		// return true or error message
	
		// connect to db
		$conn = db_connect();

		// check if email is unique
		$result = $conn->query("select id from Login where email = '" . $emailAdress . "'");
	
		if (!$result) {
			throw new Exception('Could not execute query');
		}

		if ($result->num_rows>0) {
			// return ID
		}
	}

?>