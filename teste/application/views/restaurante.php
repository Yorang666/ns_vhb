
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
							<a href='<?php echo base_url('main') ?>' class='btn btn-primary' style='margin-top: 25%; margin-right: 10px; background-color: #1a1a1a; border-color: #1a1a1a'><i class="fa fa-arrow-left"></i></a>
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
							<a href='<?php echo base_url('main') ?>' class='btn btn-primary' style='background-color: #1a1a1a; border-color: #1a1a1a; position: absolute; right: 10px; top: 10px;'><i class="fa fa-arrow-left"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class='row'>
				<div class='col-12' style='margin-top: 140px'>
                    <div class='col-12' style='background-color: #ffcff3; padding: 15px; margin-bottom: 20px; border-radius: 10px; color: black; text-align: center'>
                        <h1><?php echo $restaurante['restaurante_nome'] ?></h1>
                        <label><?php echo $restaurante['restaurante_endereco'] ?></label><br>
                        <label><?php echo $restaurante['restaurante_telefone'] ?></label>
                    </div>
					<?php foreach($pratos as $prato){ ?>
						<div class='col-12' style='background-color: #ffcff3; padding: 15px; margin-bottom: 15px; border-radius: 10px; color: black'>
							<div class='row'>	
								<div class='col-8'>
									<label style="font-weight: bold"><?php echo $prato['prato_nome']?></label>
									<br>
									<label><?php echo $prato['prato_descricao']?></label>
								</div>
								<div class='col-4' style='text-align: right'>
                                    <label style='font-weight: bold; font-size: 16px'>R$ <?php echo str_replace('.', ',', $prato['prato_preco'])?></label>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
        </div>
    </div>