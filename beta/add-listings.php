<!DOCTYPE html>

<?php
  require_once('php/header_listings.php');
  //require_once('db/unirent_functions.php');
  include('db/session.php');

  // print UniRent header
  do_unirent_header('Inserir um novo item');

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
        <h2>Inserir um novo item (bem)</h2>
        <ol class="breadcrumb">
          <li><a href="listings.php">Início</a></li>
          <li class="active">Adicionar um aluguel</li>
        </ol>
      </div>
    </div>
  </div>
</div>


<!-- DASHBOARD ORDERS SECTION -->
<section class="clearfix bg-dark listingSection">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<form action="" method="" class="listing__form">
					<div class="dashboardBoxBg mb30">
						<div class="profileIntro paraMargin">
							<h3>Sobre</h3>
							<p>Não nos responsabilizamos por quaisquer danos causados pelo uso deste website ou pela publicação de itens (bens) aqui. Por favor, use o nosso site a seu próprio critério e exercer bom senso, bem como o bom senso ao anunciar negócios aqui.</p>
							<div class="row">
								<div class="form-group col-sm-6 col-xs-12">
									<label for="itemName">Nome do item*</label>
									<input maxlength="45" type="text" class="form-control" id="itemName" name="itemName" placeholder="Nome do item">
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="listingCategory">Categoria</label>
									<div class="contactSelect">
										<select name="itemCategory" id="itemCategory" class="select-drop">
											<?php

                        $result_nationality = $conn->query("select id, name from ItemCategory where language = 'PT'");

                        while ($row = $result_nationality->fetch_assoc()) {
                          unset($id, $name);
                          $id = $row['id'];
                          $name = $row['name']; 
                          echo '<option value="'.$id.'">'.$name.'</option>';
                        }

                      ?>
										</select>
									</div>
								</div>
								<div class="form-group col-xs-12">
									<label for="itemDescription">Descrição do Item</label>
									<textarea maxlength="300" class="form-control" rows="3" id="itemDescription" name="itemDescription" placeholder="Descreva o seu item"></textarea>
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="itemPrice">Preço*</label>
									<input maxlength="6" type="text" class="form-control" id="itemPrice" name="itemPrice" placeholder="€">
								</div>
                <div class="dateSelect col-sm-6 col-xs-12">
                  <label for="yearBought" class="control-label">Ano que foi comprado</label>
                  <div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
                    <input maxlength="10" type="text" class="form-control" id="yearBought" name="yearBought" placeholder="mm/dd/yyyy">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
							</div>
						</div>
					</div>
					<div class="dashboardBoxBg mb30">
						<div class="profileIntro paraMargin">
							<h3>Galeria</h3>
							<p>Não nos responsabilizamos por quaisquer danos causados pelo uso deste website ou pela publicação de itens (bens) aqui. Por favor, use o nosso site a seu próprio critério e exercer bom senso, bem como o bom senso ao anunciar negócios aqui.</p>
							<div class="row">
								<div class="form-group col-xs-12">
									<div class="imageUploader text-center">
										<div class="file-upload">
											<div class="upload-area">
												<input type="file" id="img" name="img[]" class="file">
												<button class="browse" type="button">Clique ou arraste as imagens aqui</button>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group col-xs-12">
									<label for="videoUrl">Video URL</label>
									<input type="text" class="form-control" id="videoUrl" name="videoUrl" placeholder="http://">
								</div>
							</div>
						</div>
					</div>
					<div class="dashboardBoxBg mb30">
						<div class="profileIntro paraMargin">
							<h3>Política de segurança</h3>
							<p>Não nos responsabilizamos por quaisquer danos causados pelo uso deste website ou pela publicação de itens (bens) aqui. Por favor, use o nosso site a seu próprio critério e exercer bom senso, bem como o bom senso ao anunciar negócios aqui.</p>
							<div class="row">
								<div class="form-group col-sm-6 col-xs-12 contactSelect">
									<label for="scurityType">Tipo</label>
									<select name="securityType" id="securityType" class="select-drop">
												<option value="0">Caução</option>
												<option value="1">Termo de Responsabilidade</option>          
											</select>
								</div>
								<div class="form-group col-sm-6 col-xs-12">
									<label for="securityFee">Valor da taxa</label>
									<input  maxlength="6" type="text" class="form-control" id="securityFee" name="securityFee" placeholder="€" value="€">
								</div>
								<div class="form-group col-xs-12">
									<label for="securityDescription">Descrição do motivo da taxa</label>
									<input  maxlength="200" type="text" class="form-control" id="securityDescription" name="securityDescription" placeholder="Descreva o motivo da taxa">
								</div>
							</div>
						</div>
					</div>
					<div class="dashboardBoxBg mb30">
						<div class="profileIntro paraMargin">
							<h3>Duração do aluguer</h3>
							<div class="row">
								<div class="dateSelect col-sm-6 col-xs-12">
                  				<label for="initialRentalDay" class="control-label">Data de Início</label>
                  					<div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
                    				<input maxlength="10" type="text" class="form-control" id="initialRentalDay" name="initialRentalDay" placeholder="mm/dd/yyyy">
                    					<div class="input-group-addon">
                      					<i class="fa fa-calendar" aria-hidden="true"></i>
                    					</div>
                  					</div>
                			</div>
                			<div class="dateSelect col-sm-6 col-xs-12">
                  				<label for="endRentalDay" class="control-label">Data de Fim</label>
                  					<div class="input-group date ed-datepicker filterDate" data-provide="datepicker">
                    				<input maxlength="10" type="text" class="form-control" id="endRentalDay" name="endRentalDay" placeholder="mm/dd/yyyy">
                    					<div class="input-group-addon">
                      					<i class="fa fa-calendar" aria-hidden="true"></i>
                    					</div>
                  					</div>
                			</div>
							</div>
						</div>
					</div>
					<div class="form-footer text-center">
						<button type="submit" class="btn-submit">Registar Item</button>
					</div>
				</form>
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
