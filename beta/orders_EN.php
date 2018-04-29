<!DOCTYPE html>

<?php
  require_once('php/header_listings_EN.php');
  //require_once('db/unirent_functions.php');
  include('db/session.php');

  // print UniRent header
  do_unirent_header('Rented');

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
                <a href="listings_EN.php"><i aria-hidden="true"></i> <?php echo  "Welcome: " . $login_session; ?></a>
              </li>
              <li><a href="dashboard_EN.php"><i class="fa fa-tachometer icon-dash" aria-hidden="true"></i> Dashboard</a></li>
              <li class="dropdown singleDrop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-ul icon-dash" aria-hidden="true"></i> Rents <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul class="dropdown-menu dropdown-menu-left">
                  <li><a href="listings_EN.php">My rents</a></li>
                  <li><a href="add-listings_EN.php">Add a rent</a></li>
                  <li><a href="#">Edit my rents</a></li>
                </ul>
              </li>
              <li class="dropdown singleDrop">
                <a href="orders_EN.php" class="scrolling"><i class="fa fa-star-o" aria-hidden="true"></i> Rented</a>
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
        <h2>Rented</h2>
        <ol class="breadcrumb">
          <li><a href="listings_EN.php">Home</a></li>
          <li class="active">My rented itens</li>
        </ol>
      </div>
    </div>
  </div>
</div>


<!-- DASHBOARD ORDERS SECTION -->
<section class="clearfix bg-dark dashboardOrders">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
					<div class="dashboardBoxBg mb30">
						<div class="profileIntro">
							<div class="row">
								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="orderId">Order ID</label>
									<input type="text" class="form-control" id="orderId" placeholder="Order ID">
								</div>
								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="orderStatus">Order Status</label>
									<input type="text" class="form-control" id="orderStatus" placeholder="Order Status">
								</div>
								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="customer">Customer</label>
									<input type="text" class="form-control" id="customer" placeholder="Customer">
								</div>
								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="dateAdded">Date Added</label>
									<div class="dateSelect">
										<div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
											<input type="text" class="form-control" placeholder="mm/dd/yyyy">
											<div class="input-group-addon">
												<i class="icon-listy icon-calendar"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="dateModified">Date Modified</label>
									<div class="dateSelect">
										<div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
											<input type="text" class="form-control" placeholder="mm/dd/yyyy">
											<div class="input-group-addon">
												<i class="icon-listy icon-calendar"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="amount">Amount</label>
									<input type="text" class="form-control" id="amount" placeholder="Amount">
								</div>
							</div>
						</div>
					</div>
			</div>
			<div class="col-xs-12">
				<div class="table-responsive bgAdd"  data-pattern="priority-columns">
					<table id="ordersTable" class="table table-small-font table-bordered table-striped" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Order ID</th>
								<th data-priority="">Customer</th>
								<th data-priority="2">Amount</th>
								<th data-priority="6">Date Added</th>
								<th data-priority="6">Date Modified</th>
								<th data-priority="3">Status</th>
								<th data-priority="2">Action</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>Order ID</th>
								<th>Customer</th>
								<th>Amount</th>
								<th>Date Added</th>
								<th>Date Modified</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</tfoot>
						<tbody>
							<tr>
								<td>2475</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-warning">Pending</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">approve</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2475</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-warning">Pending</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">approve</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2470</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-success">Active</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2471</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-danger">Canceled</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2472</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-success">Active</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2465</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-warning">Pending</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">approve</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2474</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-success">Active</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2461</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-danger">Canceled</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2463</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-success">Active</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2468</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-warning">Pending</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">approve</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2466</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-success">Active</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2457</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-danger">Canceled</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2354</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-success">Active</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2648</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-warning">Pending</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">approve</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2145</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-success">Active</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2874</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-danger">Canceled</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2963</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-success">Active</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2854</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-warning">Pending</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">approve</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2654</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-success">Active</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2185</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-danger">Canceled</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2598</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-success">Active</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2176</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-warning">Pending</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">approve</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2211</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-success">Active</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2323</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-danger">Canceled</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2636</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-success">Active</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2525</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-warning">Pending</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">approve</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2727</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-success">Active</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2929</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-danger">Canceled</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2424</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-success">Active</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">Edit</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
							<tr>
								<td>2531</td>
								<td>Tiger Nixon</td>
								<td>$700</td>
								<td>12/12/2017</td>
								<td>15/12/2017</td>
								<td><span class="label label-warning">Pending</span></td>
								<td>
									<div class="btn-group">
										<button type="button" class="btn btn-primary">View</button>
										<button type="button" class="btn btn-primary">approve</button>
										<button type="button" class="btn btn-primary">Delete</button>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
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
