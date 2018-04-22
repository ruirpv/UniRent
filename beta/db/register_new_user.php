<?php
	// Include function files for this application
	require_once('unirent_functions.php');

	// Personal Information variables
	$firstName      		  = $_POST['firstName'];
	$surname        		  = $_POST['surname'];
	$emailAdress    		  = $_POST['emailAdress'];
	$phoneNumber    		  = $_POST['phoneNumber'];
	$dateOfBirthday 		  = $_POST['dateOfBirthday'];
	$nationality    		  = $_POST['nationality'];
	$gender         		  = $_POST['gender'];

	// Account Information variables
	$username       		  = $_POST['username'];
	$password       		  = $_POST['password'];
	$passwordAgain  		  = $_POST['passwordAgain'];

	// Address Information variables
	$country        		  = $_POST['country'];
	$city           		  = $_POST['city'];
	$addressLine1   		  = $_POST['addressLine1'];
	$addressLine2  		  	  = $_POST['addressLine2'];
	$postalCode     		  = $_POST['postalCode'];
	
	// Student Information variables
	$countryOfStudy			  = $_POST['countryOfStudy'];
	$EducationalEstablishment = $_POST['EducationalEstablishment'];
	$courseArea  		  	  = $_POST['courseArea'];
	$course          		  = $_POST['course'];
	$studentDegree  		  = $_POST['studentDegree'];
	$studentNumber  		  = $_POST['studentNumber'];

	// Start session which may be needed later
	// Start it now because it must go before headers
	session_start();

	try {
		// Check forms filled in
		if (!filled_out($_POST)) {
			throw new Exception('You have not filled the form out correctly – please go back and try again.');
			//BootstrapDialog.alert('I want banana!');
		}

		// Email address not valid
//		if (!valid_email($emailAdress)) {
//			throw new Exception('That is not a valid email address. Please go back and try again.');
//		}

		// Passwords not the same
		if ($password != $passwordAgain) {
			throw new Exception('The passwords you entered do not match – please go back and try again.');
		}

		// Check password length is ok
		// OK if username truncates, but passwords will get
		// Munged if they are too long.
		if ((strlen($password) < 6) || (strlen($password) > 16)) {
			throw new Exception('Your password must be between 6 and 16 characters. Please go back and try again.');
		}

		// Attempt to register Loing DB
		register_Login($username, $password, $passwordAgain);

		// Retrieve Login ID 
		$Login_idLogin = retrieve_Login($username);

		// Attempt to register Address DB
		$Address_id = register_Address($addressLine1, $addressLine2, $postalCode, $city, $country);

		// Attempt to register Customer DB
		register_Customer($firstName, $surname, $dateOfBirthday, $emailAdress, $phoneNumber, $nationality, $gender, $studentNumber, $studentDegree, $EducationalEstablishment, $course, $Address_id, $Login_idLogin);

		// Register session variable
		$_SESSION['valid_user'] = $username;

		// provide link to members page
		do_html_header('Registration successful');
		echo 'Your registration was successful!';
		do_html_url('listings.php', 'Go to members page');

		// end page
//		do_html_footer();
	} catch (Exception $e) {
//		do_html_header('Problem:');
		echo $e->getMessage();
//		do_html_footer();
		exit;
	}
?>