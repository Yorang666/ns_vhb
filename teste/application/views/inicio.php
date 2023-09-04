
	<style>
		/** pc */
		@media (min-width: 576px) { 
			.mobile_top{
				display: none!important;
			}
			.desktop_top{
				display: block!important;
			}
		}
		/** mobile */
		@media (max-width: 575px) { 
			.mobile_top{
				display: block!important;
			}
			.desktop_top{
				display: none!important;
			}
		}
	</style>
	
	<div class='row' style='margin: 0; min-height: 100vh; background-color: #4c1a3f; color: white;'>
        <div class='col-12'>
			<div class='row desktop_top'>
				<div class='col-12' style='background-color: #73265f; height: 120px; box-shadow: 0px 0px 5px 2px #1a1a1a78; position: fixed; top: 0;'>
					<div class='row'>
						<div class='col-md-2 col-sm-12 col-xs-12' style='padding-top: 10px; padding-left: 10px'>
							<img class="img-fluid" src='https://www.manwich.com/sites/g/files/qyyrlu376/files/images/logos/MAN_GLO_HDR_Logo.png' style='max-height: 100px'>
						</div>
						<div class='col-md-9 col-sm-12 col-xs-12 d-flex align-items-center'>
							<input type='text' class='form-control' id='buscar' name='buscar' placeholder='Pesquisar'>
						</div>
						<div class='col-md-1 col-sm-1 col-xs-1 d-flex align-items-center' style='text-align: right!important; display: block!important;'>
							<a href='<?php echo base_url('logout') ?>' class='btn btn-primary' style='margin-top: 25%; margin-right: 10px; background-color: #1a1a1a; border-color: #1a1a1a'><i class="fa fa-power-off"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class='row mobile_top'>
				<div class='col-12 text-center' style='background-color: #73265f; height: 120px; box-shadow: 0px 0px 5px 2px #1a1a1a78; position: fixed; top: 0;'>
					<div class='row'>
						<div class='col-md-2 col-sm-12 col-xs-12' style='padding-top: 10px; padding-left: 10px'>
							<img class="img-fluid" src='https://www.manwich.com/sites/g/files/qyyrlu376/files/images/logos/MAN_GLO_HDR_Logo.png' style='max-height: 100px; height: 60px;'>
						</div>
						<div class='col-md-9 col-sm-12 col-xs-12 d-flex align-items-center'>
							<input type='text' class='form-control' id='buscar' name='buscar' placeholder='Pesquisar'>
						</div>
						<div class='col-md-1 col-sm-1 col-xs-1 d-flex align-items-center' style='text-align: right!important;'>
							<a href='<?php echo base_url('logout') ?>' class='btn btn-primary' style='background-color: #1a1a1a; border-color: #1a1a1a; position: absolute; right: 10px; top: 10px;'><i class="fa fa-power-off"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col-12' style='margin-top: 140px'>
					<?php foreach($restaurantes as $rest){ ?>
						<div class='col-12' style='background-color: #ffcff3; padding: 15px; margin-bottom: 15px; border-radius: 10px; color: black'>
							<div class='row'>	
								<div class='col-10'>
									<label style="font-weight: bold"><?php echo $rest['restaurante_nome']?></label>
									<br>
									<label><?php echo $rest['restaurante_descricao']?></label>
								</div>
								<div class='col-2' style='text-align: right'>
									<a href='<?php echo base_url('restaurante/').$rest['restaurante_id'] ?>' class='btn btn-primary' style='text-decoration: none; background-color: #98317f; border-color: #73265f'><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
        </div>
    </div>

	