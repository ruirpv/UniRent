<!DOCTYPE html>

<?php
  require_once('php/header.php');
  // print UniRent header
  do_unirent_header('Login - UniRent');
?>


<!-- LOGIN SECTION -->
<section class="clearfix loginSection">
	<div class="container">
		<div class="row">
			<div class="center-block col-md-5 col-sm-6 col-xs-12">
				<div class="panel panel-default loginPanel">
					<div class="panel-heading text-center">Members log in</div>
					<div class="panel-body">
						<form class="loginForm">
							<div class="form-group">
								<label for="userName">User Name *</label>
								<input type="text" class="form-control" id="userName">
								<p class="help-block">Enter your Foundation username.</p>
							</div>
							<div class="form-group">
								<label for="userPassword">Password *</label>
								<input type="password" class="form-control" id="userPassword">
								<p class="help-block">Enter the password that accompanies your username.</p>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary pull-left">Log In</button>
								<a href="#" class="pull-right link">Fogot Password?</a>
							</div>
						</form>
					</div>
					<div class="panel-footer text-center">
						<p>Not a member yet? <a href="sign-up.php" class="link">Sign up</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
  require_once('php/footer.php');
  // print UniRent header
  do_unirent_footer();
?>
