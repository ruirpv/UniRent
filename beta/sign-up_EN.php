<!DOCTYPE html>

<?php
  require_once('php/header_EN.php');
  require_once('db/unirent_functions.php');
  
  // print UniRent header
  do_unirent_header('Sign-Up - UniRent');
  
  // connect to UniRent DB
  $conn = db_connect();
?>

<style type="text/css">
 .scrollable{
   overflow: auto;
   width: 270px; /* adjust this width depending to amount of text to display */
   height: 120px; /* adjust height depending on number of options to display */
 }
 .scrollable select{
   border: none;
 }
</style>


<!-- PAGE TITLE SECTION -->
<section class="clearfix pageTitleSection" style="background-image: url();">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pageTitle">
					<h2>Sign Up Page</h2>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- SIGN UP SECTION -->
<section class="clearfix signUpSection">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div class="priceTableWrapper">
					<div class="priceTableTitle">
						<h2>Free <small>Pay only by your rentals</small></h2>
					</div>
					<div class="priceAmount">
						<h2>0<small> USD/Year</small></h2>
					</div>
					<div class="priceInfo">
						<ul class="list-unstyled">
							<li>15% of the transaction is ours</li>
							<li>And the rest to the renter</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-8 col-xs-12">
				<div class="signUpFormArea">
					<div class="priceTableTitle">
						<h2>Account Registration</h2>
						<p>Please fill out the fields below to create your account. We will send your account information to the email address you enter. Your email address and information will NOT be sold or shared with any 3rd party. If you already have an account, please, <a href="login_EN.php">click here</a>.</p>
					</div>
					<div class="signUpForm">
						<form action="db/register_new_user.php" method="POST">
							<div class="formSection">
								<h3>Contact Information</h3>
								<div class="row">
									<div class="form-group col-sm-6 col-xs-12">
										<label for="firstName" class="control-label">First Name*</label>
										<input type="text" class="form-control" id="firstName" name="firstName">
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="lastName" class="control-label">Last Name*</label>
										<input type="text" class="form-control" id="lastName" name="lastName">
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="firstName" class="control-label">Email Address*</label>
										<input type="email" class="form-control" id="emailAdress" name="emailAdress">
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="lastName" class="control-label">Phone Number*</label>
										<input type="text" class="form-control" id="phoneNumber" name="phoneNumber">
									</div>
								</div>
							</div>
							<div class="formSection">
								<h3>Account Information</h3>
								<div class="row">
									<div class="form-group col-xs-12">
										<label for="usernames" class="control-label">Username*</label>
										<input type="text" class="form-control" id="username" name="username">
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="passwordFirst" class="control-label">Password*</label>
										<input type="password" class="form-control" id="password" name="password">
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="passwordAgain" class="control-label">Password (re-type)*</label>
										<input type="password" class="form-control" id="passwordAgain" name="passwordAgain">
									</div>
								</div>
							</div>
							<div class="formSection">
								<h3>Address Information</h3>
								<div class="row">
									<div class="form-group col-sm-6 col-xs-12">
										<label for="selectSome" class="control-label">Country</label>
										<div class="contactSelect">
											<select name="country" id="country" class="select-drop" >

												<?php

													$result_Country = $conn->query("select id, countryEN from Country");

													while ($row = $result_Country->fetch_assoc()) {
                  										unset($id, $name);
									                	$id = $row['id'];
									                	$name = $row['countryEN']; 
									                	echo '<option value="'.$id.'">'.$name.'</option>';
													}

												?>

											</select>
										</div>
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="selectSome" class="control-label">City</label>
										<div class="contactSelect">
											<select name="city" id="city" class="select-drop">
												
												<?php

													$result_City = $conn->query("select id, name from City");

													while ($row = $result_City->fetch_assoc()) {
	                  									unset($id, $name);
										                $id = $row['id'];
										                $name = $row['name']; 
										                echo '<option value="'.$id.'">'.$name.'</option>';
													}

												?>

											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="formSection">
								<h3>More Information</h3>
								<div class="row">
									<div class="form-group col-sm-6 col-xs-12">
										<label for="usernames" class="control-label">Nationality*</label>
										<input type="text" class="form-control" id="nationality" name="nationality">
									</div>
									<div class="form-group col-sm-6 col-xs-12">
										<label for="selectSome" class="control-label">Gender</label>
										<div class="contactSelect">
											<select name="gender" id="gender" class="select-drop">
												<option value="0">Male</option>
												<option value="1">Female</option>
												<option value="2">No specified</option>           
											</select>
										</div>
									</div>
									<div class="form-group col-xs-12">
										<label for="usernames" class="control-label">Student Number</label>
										<input type="text" class="form-control" id="studentNumber" name="studentNumber">
									</div>
									<div class="form-group col-xs-12">
										<label for="usernames" class="control-label">Student Degree</label>
										<input type="text" class="form-control" id="studentDegree" name="studentDegree">
									</div>
								</div>
							</div>
							<div class="formSection">
								<h3>Security Control</h3>
									<div class="form-group col-xs-12">
										<div class="checkbox">
											<label>
												<input type="checkbox">
												I agree to the <a href="terms-of-services_EN.php">Terms of Use</a>. Your business listing is fully backed by our 100% money back guarantee.
											</label>
										</div>
									</div>
									<div class="form-group col-xs-12 mb0">
										<button type="submit" name="submit" class="btn btn-primary">Create Account</button>
									</div>
								</div>
							</div>
							<div class="formSection">
								<div class="cardBox">
									<div class="paymentMethod">
										<img src="img/business/paypal.png" alt="Image paypal">
									</div>
									<ul class="list-inline">
										<li><a href="#"><img src="img/business/visa.jpg" alt="Image card"></a></li>
										<li><a href="#"><img src="img/business/master-card.jpg" alt="Image card"></a></li>
										<li><a href="#"><img src="img/business/american-express.jpg" alt="Image card"></a></li>
										<li><a href="#"><img src="img/business/discover.jpg" alt="Image card"></a></li>
									</ul>
								</div>
								<p>We use <span>PayPal</span> to process all transactions securely. <span>Payments can be made using any major credit card, without the need for a PayPal account</span>. If you already have a PayPal account, you can also pay with PayPal funds or through your bank account. We don't keep any credit card information stored on our site. No tax is added to your order. For more information <a href="https://www.paypal.com" target="_blank">www.paypal.com</a></p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
  // disconnect to UniRent DB
  $conn->close();

  require_once('php/footer_EN.php');
  // print UniRent header
  do_unirent_footer();
?>
