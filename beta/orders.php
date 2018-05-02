<!DOCTYPE html>

<?php
	require_once('php/header_listings.php');
	require_once('db/unirent_functions.php');
	include('db/session.php');

	// print UniRent header
	do_unirent_header('Alugados');

	// connect to UniRent DB
	$conn = db_connect();

	// Retrieve Login ID 
	$Login_idLogin = retrieve_Login($login_session);

	/*********************************************************************************/
	/********************************** CUSTUMOR DB **********************************/
	/*********************************************************************************/

	// check for Customer data in Customer DB
	$result = $conn->query("select id, name, surname from Customer where Login_idLogin = " . $Login_idLogin . "");

	if (!$result) {
		throw new Exception('Could not execute Customer query');
	}

	// Customer variables
	$idCustomer;
	$firstName;
	$surname;

	if ($result->num_rows>0) {
		while ($row = $result->fetch_assoc()) {
			unset($idCustomer, $firstName, $surname);
		    $idCustomer = $row['id'];
		    $firstName  = $row['name'];
			$surname	= $row['surname'];
		}
	}

	/*********************************************************************************/
	/********************************** RENTAL DB ************************************/
	/*********************************************************************************/


	// check for Customer rentals in Rental DB
	$result_Rental = $conn->query("select * from Rental where Customer_id = " . $idCustomer . "");

	if (!$result_Rental) {
		throw new Exception('Could not execute Rental query');
	}

	// Rentals variables
	$Item_id;
	$initialRentalDay;
	$endRentalDay;
	$totalPrice;

	if ($result_Rental->num_rows>0) {
		while ($row = $result_Rental->fetch_assoc()) {
			unset($Item_id, $initialRentalDay, $endRentalDay, $totalPrice);
		    $Item_id  		  = $row['Item_id'];
			$initialRentalDay = $row['initialRentalDay'];
			$endRentalDay     = $row['endRentalDay'];
			$totalPrice       = number_format($row['totalPrice'], 2, '.', '');
		}
	}

	$idT = !empty($Item_id) ? $Item_id : "";
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
                <a href="listings.php"><i aria-hidden="true"></i> <?php echo  "Bem vindo: " . $login_session; ?></a>
              </li>
              <li><a href="dashboard.php"><i class="fa fa-tachometer icon-dash" aria-hidden="true"></i> Dashboard</a></li>
              <li class="dropdown singleDrop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-list-ul icon-dash" aria-hidden="true"></i> Aluguéis <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                <ul class="dropdown-menu dropdown-menu-left">
                  <li><a href="listings.php">Meus aluguéis</a></li>
                  <li><a href="add-listings.php">Adicionar um aluguel</a></li>
                  <li><a href="#">Editar meus aluguéis</a></li>
                </ul>
              </li>
              <li class="dropdown singleDrop">
                <a href="orders.php" class="scrolling"><i class="fa fa-star-o" aria-hidden="true"></i> Alugados</a>
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
        <h2>Alugados</h2>
        <ol class="breadcrumb">
          <li><a href="listings.php">Início</a></li>
          <li class="active">Meus alugados</li>
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
							<form action="" method="" class="listing__form">
								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="itemName">Nome do item</label>
									<input type="text" class="form-control" id="itemName" name="itemName" placeholder="Nome do item">
								</div>
								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="ownerUsername">Username do owner do item</label>
									<input type="text" class="form-control" id="ownerUsername" name="ownerUsername" placeholder="Username do owner">
								</div>
								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="totalPrice">Preço total</label>
									<input type="text" class="form-control" id="totalPrice" name="totalPrice" placeholder="€">
								</div>
								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="initialRentalDay">Data inicial do aluguer</label>
									<div class="dateSelect">
										<div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
											<input type="text" class="form-control" id="initialRentalDay" name="initialRentalDay" placeholder="mm/dd/yyyy">
											<div class="input-group-addon">
												<i class="icon-listy icon-calendar"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="endRentalDay">Data final do aluguer</label>
									<div class="dateSelect">
										<div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
											<input type="text" class="form-control" id="endRentalDay" name="endRentalDay" placeholder="mm/dd/yyyy">
											<div class="input-group-addon">
												<i class="icon-listy icon-calendar"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group col-md-4 col-sm-6 col-xs-12">
									<label for="publishDate">Data de publicação do item</label>
									<div class="dateSelect">
										<div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
											<input type="text" class="form-control" id="publishDate" name="publishDate" placeholder="mm/dd/yyyy">
											<div class="input-group-addon">
												<i class="icon-listy icon-calendar"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="form-footer text-center">
									<button type="submit" id="submit" name="submit" class="btn-submit">Pesquisar</button>
								</div>
							</form>
							</div>
						</div>
					</div>
			</div>
			<div class="col-xs-12">
				<div class="table-responsive bgAdd"  data-pattern="priority-columns">
					<table id="ordersTable" class="table table-small-font table-bordered table-striped" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th data-priority="0">ID do item</th>
								<th data-priority="1">Nome do item</th>
								<th data-priority="2">Preço total do aluguer</th>
								<th data-priority="3">Data inicial do aluguer</th>
								<th data-priority="4">Data final do aluguer</th>
								<th data-priority="5">Status</th>
								<th data-priority="6">Ações</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th>ID do item</th>
								<th>Nome do item</th>
								<th>Preço total do aluguer</th>
								<th>Data inicial do aluguer</th>
								<th>Data final do aluguer</th>
								<th>Status</th>
								<th>Ações</th>
							</tr>
						</tfoot>
						<tbody>
							<tr>
								<?php

									$result_CheckItem = $conn->query("select id, name from Item where Customer_id = " . $idCustomer . "");

									while ($row = $result_CheckItem->fetch_assoc()) {
	  									unset($id, $name);
						                $id = $row['id'];
						                $name = $row['name']; 
						                echo "<td>$id</td>";
						                echo "<td>$name</td>";
						                echo "<td>€ $totalPrice</td>";
						                echo "<td>$initialRentalDay</td>";
						                echo "<td>$endRentalDay</td>";
						                if(date('Y-m-d') < date('Y-m-d', strtotime($endRentalDay))){
											echo "<td><span class='label label-success'>Em curso</span></td>";
										} else if(date('Y-m-d') > date('Y-m-d', strtotime($endRentalDay))){
											echo "<td><span class='label label-danger'>Finalisado</span></td>";
										}
						                //echo "<td><span class='label label-warning'>Pending</span></td>";
						                echo "<td>";
						                	echo "<div class='btn-group'>";
						                	echo "<button type='button' class='btn btn-primary'>View</button>";
						                	echo "<button type='button' class='btn btn-primary'>Return</button>";
						                	echo "<button type='button' class='btn btn-primary'>Cancel</button>";
						                	echo "</div>";
						                echo "</td>";
									}

								?>
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

  require_once('php/footer_listings.php');

  // print UniRent header
  do_unirent_footer();
?>
