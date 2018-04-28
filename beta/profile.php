<!DOCTYPE html>

<?php
  require_once('php/header_listings.php');
  //require_once('db/unirent_functions.php');
  include('db/session.php');

  // print UniRent header
  do_unirent_header('Dashboard | UniRent');

  // connect to UniRent DB
  //$conn = db_connect();
?>

    <!-- Dashboard header -->
    <section class="navbar-dashboard-area">
      <nav class="navbar navbar-default lightHeader navbar-dashboard" role="navigation">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-dash">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-dash">
            <ul class="nav navbar-nav mr0">
              <li class="active">
                <a href="#"><i aria-hidden="true"></i> <?php echo  "Welcome: " . $login_session; ?></a>
              </li>
              <li><a href="#"><i class="fa fa-tachometer icon-dash" aria-hidden="true"></i> Dashboard</a></li>
              <li class="dropdown singleDrop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-ul icon-dash" aria-hidden="true"></i> Rents <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul class="dropdown-menu dropdown-menu-left">
                  <li><a href="#">My rents</a></li>
                  <li><a href="#">Add a rent</a></li>
                  <li><a href="#">Edit my rents</a></li>
                </ul>
              </li>
              <li class="dropdown singleDrop">
                <a href="#" class="scrolling"><i class="fa fa-star-o" aria-hidden="true"></i> Rented</a>
              </li>
            </ul>
            <div class="row adjustRow">
              <div class="pull-right col-xs-12 col-sm-4">
                <form class="navbar-form" role="search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="q">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><i class="icon-listy icon-search-2"></i></button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </section>


<!-- Dashboard breadcrumb section -->
<div class="section dashboard-breadcrumb-section bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2>Minha Conta</h2>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li><a href="dashboard.html">Dashboard</a></li>
          <li class="active">My Profile</li>
        </ol>
      </div>
    </div>
  </div>
</div>


<!-- DASHBOARD PROFILE SECTION -->
<section class="clearfix bg-dark profileSection">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-5 col-xs-12">
				<div class="dashboardBoxBg mb30">
					<div class="profileImage">
						<img src="img/dashboard/recent-user-5.jpg" alt="Image User" class="img-circle">
						<div class="file-upload profileImageUpload">
							<div class="upload-area">
								<input type="file" name="img[]" class="file">
								<button class="browse" type="button">Upload a Picture <i class="icon-listy icon-upload"></i></button>
							</div>
						</div>
					</div>
					<div class="profileUserInfo bt profileName">
						<p>Your Current Plan</p>
						<h2>Platinum Package</h2>
						<h5>Next Payment: <span>15/01/2017</span></h5>
						<a href="#" class="btn btn-primary">Change</a>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-7 col-xs-12">
				<form>
					<div class="dashboardBoxBg">
						<div class="profileIntro">
							<h2>Your Profile</h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form Ipsum available.</p>
						</div>
					</div>
					<div class="dashboardBoxBg mt30">
						<div class="profileIntro">
							<h3>About You</h3>
							<div class="row">
								<div class="form-group col-sm-6 col-xs-12">
									<label for="firstNameProfile">Fast Name</label>
									<input type="text" class="form-control" id="firstNameProfile" placeholder="Jane">
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="lastNameProfile">Last Name</label>
									<input type="text" class="form-control" id="lastNameProfile" placeholder="Doe">
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="emailProfile">Email</label>
									<input type="text" class="form-control" id="emailProfile" placeholder="Jane@example.com">
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="phoneProfile">Phone</label>
									<input type="text" class="form-control" id="phoneProfile" placeholder="254 - 265 - 3265">
								</div>
								<div class="form-group col-xs-12">
									<label for="aboutYou">About You</label>
									<textarea class="form-control" rows="5" id="aboutYou" placeholder="About You"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="dashboardBoxBg mt30">
						<div class="profileIntro">
							<h3>Social Network</h3>
							<div class="row">
								<div class="form-group col-sm-6 col-xs-12">
									<label for="linkedInUrl">Linked in URL</label>
									<input type="text" class="form-control" id="linkedInUrl" placeholder="http://linkedin.com/listty">
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="facebookUrl">Facebook URL</label>
									<input type="text" class="form-control" id="facebookUrl" placeholder="http://facebook.com/listty">
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="twitterUrl">Twitter URL</label>
									<input type="text" class="form-control" id="twitterUrl" placeholder="http://twitter.com/listty">
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="youTubeUrl">You Tube URL</label>
									<input type="text" class="form-control" id="youTubeUrl" placeholder="http://youtube.com/listty">
								</div>
							</div>
						</div>
					</div>
					<div class="btn-area mt30">
						<button class="btn btn-primary" type="button">Save Change</button>
					</div>
					<div class="dashboardBoxBg mt30">
						<div class="profileIntro">
							<h3>Update password</h3>
							<div class="row">
								<div class="form-group col-xs-12">
									<label for="currentPassword">Current Password</label>
									<input type="password" class="form-control" id="currentPassword" placeholder="********">
								</div>
								<div class="form-group col-xs-12">
									<label for="newPassword">New Password</label>
									<input type="password" class="form-control" id="newPassword" placeholder="New Password">
								</div>
								<div class="form-group col-xs-12">
									<label for="confirmPassword">Confirm Password</label>
									<input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
								</div>
								<div class="form-group col-xs-12">
									<button class="btn btn-primary" type="button">Change Password</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


    <!-- FOOTER -->
    <footer class="copyRightDashboard">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <p>Copyright © 2016. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- JAVASCRIPTS -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/jquery/jquery-migrate.js"></script>
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
  <script src="plugins/waypoints/waypoints.min.js"></script>
  <script src="plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="plugins/datepicker/bootstrap-datepicker.min.js"></script>
  <script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
  <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/isotope/isotope.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="plugins/isotope/isotope-triger.min.js"></script>
  <script src="plugins/rateyo/jquery.rateyo.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script>
  <script src="plugins/map/js/rich-marker.js"></script>
  <script src="plugins/map/js/infobox_packed.js"></script>
  <script src="js/map.js"></script>
  <script src="js/custom.js"></script>


</body>

</html>

