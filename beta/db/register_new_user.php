<?php
	// Include function files for this application
	require_once('unirent_functions.php');

	// Contact Information variables
	$firstName     = $_POST['firstName'];
	$lastName      = $_POST['lastName'];
	$emailAdress   = $_POST['emailAdress'];

	// Account Information variables
	$username      = $_POST['username'];
	$password      = $_POST['password'];
	$passwordAgain = $_POST['passwordAgain'];

	// Start session which may be needed later
	// Start it now because it must go before headers
	session_start();

	try {
		// Check forms filled in
		if (!filled_out($_POST)) {
			throw new Exception('You have not filled the form out correctly – please go back and try again.');
		}

		// Email address not valid
		if (!valid_email($emailAdress)) {
			throw new Exception('That is not a valid email address. Please go back and try again.');
		}

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

		// Attempt to register
		// This function can also throw an exception
		register($firstName, $lastName, $emailAdress, $username, $password, $passwordAgain);

		// register session variable
		$_SESSION['valid_user'] = $username;

		// provide link to members page
//		do_html_header('Registration successful');
//		echo 'Your registration was successful. Go to the members page to start setting up your bookmarks!';
//		do_html_url('member.php', 'Go to members page');

		// end page
//		do_html_footer();
	} catch (Exception $e) {
//		do_html_header('Problem:');
		echo $e->getMessage();
//		do_html_footer();
		exit;
	}
?>