<!DOCTYPE html>

<?php
  require_once('php/header_listings_index_EN.php');
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


<!-- LISTINGS SECTION -->
<section class="clearfix bg-dark listyPage">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="dashboardPageTitle">
					<h2>My rents</h2>
				</div>
				<div class="table-responsive"  data-pattern="priority-columns">
					<table class="table listingsTable">
						<thead>
							<tr class="rowItem">
								<th data-priority="">Listings</th>
								<th data-priority="1">Featured</th>
								<th data-priority="6">Views</th>
								<th data-priority="2">Reviews</th>
								<th data-priority="3">Posted on</th>
								<th data-priority="4">Last Edited</th>
								<th data-priority="5">Status</th>
							</tr>
						</thead>
						<tbody>
							<tr class="rowItem">
								<td>
									<ul class="list-inline listingsInfo">
										<li><a href="#"><img src="img/dashboard/listing.jpg" alt="Image Listings"></a></li>
										<li>
											<h3>Glory Hole Doughnuts <i class="fa fa-check-circle" aria-hidden="true"></i></h3>
											<h5>1569 Queen Street West <span class="cityName">Toronto</span></h5>
											<span class="category">Hotel</span>
											<p>From $50.00 /Night <span class="likeArea"><i class="fa fa-heart-o" aria-hidden="true"></i>10k</span></p>
										</li>
									</ul>
								</td>
								<td><i class="fa fa-check primaryColor" aria-hidden="true"></i></td>
								<td>784</td>
								<td>
									<ul class="list-inline rating">
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										<li>(7)</li>
									</ul>

								</td>
								<td>28/02/2018 <br>9.15am</td>
								<td>Today <br>11.00am</td>
								<td><span class="label label-warning">Pending</span></td>
							</tr>
							<tr class="rowItem">
								<td>
									<ul class="list-inline listingsInfo">
										<li><a href="#"><img src="img\things\things-5.jpg" alt="Image Listings"></a></li>
										<li>
											<h3>Burger House <i class="fa fa-check-circle" aria-hidden="true"></i></h3>
											<h5>2726 Shinn Street  <span class="cityName">New York</span></h5>
											<span class="category">Eat & Drink</span>
											<p>From $10.00 / Night <span class="likeArea"><i class="fa fa-heart-o" aria-hidden="true"></i>15k</span></p>
										</li>
									</ul>
								</td>
								<td><i class="fa fa-check primaryColor" aria-hidden="true"></i></td>
								<td>698</td>
								<td>
									<ul class="list-inline rating">
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										<li>(7)</li>
									</ul>

								</td>
								<td>15/12/2016 <br>9.15am</td>
								<td>Today <br>11.43am</td>
								<td><span class="label label-success">Active</span></td>
							</tr>
							<tr class="rowItem">
								<td>
									<ul class="list-inline listingsInfo">
										<li><a href="#"><img src="img\things\things-4.jpg" alt="Image Listings"></a></li>
										<li>
											<h3>Think Coffee <i class="fa fa-check-circle" aria-hidden="true"></i></h3>
											<h5>215 Terry Lane <span class="cityName"> New York</span></h5>
											<span class="category">Eat & drink</span>
											<p>From $50.00 /Night <span class="likeArea"><i class="fa fa-heart-o" aria-hidden="true"></i>10k</span></p>
										</li>
									</ul>
								</td>
								<td><i class="fa fa-check primaryColor" aria-hidden="true"></i></td>
								<td>450</td>
								<td>
									<ul class="list-inline rating">
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										<li>(9)</li>
									</ul>

								</td>
								<td>29/01/2018 <br>9.15am</td>
								<td>Today <br>12.27pm</td>
								<td><span class="label label-danger">Canceled</span></td>
							</tr>
							<tr class="rowItem">
								<td>
									<ul class="list-inline listingsInfo">
										<li><a href="#"><img src="img/things/things-10.jpg" alt="Image Listings"></a></li>
										<li>
											<h3>Tom's Restaurant <i class="fa fa-check-circle" aria-hidden="true"></i></h3>
											<h5>964 School Street <span class="cityName">New York</span></h5>
											<span class="category">Eat & Drink</span>
											<p>From $50.00 /Night <span class="likeArea"><i class="fa fa-heart-o" aria-hidden="true"></i>5.9k</span></p>
										</li>
									</ul>
								</td>
								<td><i class="fa fa-check primaryColor" aria-hidden="true"></i></td>
								<td>1.4K</td>
								<td>
									<ul class="list-inline rating">
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										<li>(9)</li>
									</ul>

								</td>
								<td>29/12/2017 <br>9.15am</td>
								<td>Today <br>9.13am</td>
								<td><span class="label label-success">Active</span></td>
							</tr>
							<tr class="rowItem">
								<td>
									<ul class="list-inline listingsInfo">
										<li><a href="#"><img src="img/things/things-8.jpg" alt="Image Listings"></a></li>
										<li>
											<h3>Hotel Govendor <i class="fa fa-check-circle" aria-hidden="true"></i></h3>
											<h5>1569 Queen Street West <span class="cityName">Toronto</span></h5>
											<span class="category">Hotel</span>
											<p>From $100.00 /Night <span class="likeArea"><i class="fa fa-heart-o" aria-hidden="true"></i>483</span></p>
										</li>
									</ul>
								</td>
								<td><i class="fa fa-check primaryColor" aria-hidden="true"></i></td>
								<td>450</td>
								<td>
									<ul class="list-inline rating">
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										<li>(7)</li>
									</ul>

								</td>
								<td>04/01/2018 <br>9.15am</td>
								<td>Yesterday <br>3.46pm</td>
								<td><span class="label label-success">Active</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="paginationCommon blogPagination text-center">
					<nav aria-label="Page navigation">
						<ul class="pagination">
							<li>
								<a href="#" aria-label="Previous">
									<span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
								</a>
							</li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>
								<a href="#" aria-label="Next">
									<span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>


<?php
  // disconnect to UniRent DB
  //$conn->close();

  require_once('php/footer_listings_EN.php');

  // print UniRent header
  do_unirent_footer();
?>

