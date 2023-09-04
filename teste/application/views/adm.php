
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

		.mainBtn{
        	background-color: #73265f;
            color: white;
            border: none;
        }

        .mainBtn:hover {background-color: #4c1a3f;}
		.mainBtn:focus {background-color: #4c1a3f;}

        .dropbtn {
            background-color: #73265f;
            color: white;
            border: none;
            padding: 3px 10px;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            right: 0;
            min-width: 80px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            padding: 10px;
            text-align: center
        }
        .dropdown-content a {
            color: black;
            text-decoration: none;
            display: block;
            margin-bottom: 5px;
        }
        .dropdown-content a:hover {background-color: #ddd;}
        .dropdown:hover .dropdown-content {display: block;}
        .dropdown:hover .dropbtn {background-color: #4c1a3f;}

        .datagrid{
        	font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
			border-radius: 10px;
        }
        .datagrid th { background-color: #73265f; border: 1px solid #73265f; }
        .datagrid td { background-color: #ffcff3; color: black; border: 1px solid #73265f; }
        .datagrid td, th {
		    text-align: left;
		    padding: 8px;
		}
		.datagrid tr:nth-child(even) {
		    background-color: #dddddd;
		}

		.modal{color: black;}
		.formInput{
			width: 100%; 
			border-radius: 8px; 
			padding: 5px 10px;
			border: 1px solid #a8a8a8;
		}
	</style>

	<div class='row' style='margin: 0; min-height: 100vh; background-color: #4c1a3f; color: white;'>
        <div class='col-12'>
			<div class='row desktop_top'>
				<div class='col-12' style='background-color: #73265f; height: 80px; box-shadow: 0px 0px 5px 2px #1a1a1a78; position: fixed; top: 0;'>
					<div class='row'>
						<div class='col-md-11 col-sm-12 col-xs-12' style='padding-top: 10px; padding-left: 10px'>
							<img class="img-fluid" src='https://www.manwich.com/sites/g/files/qyyrlu376/files/images/logos/MAN_GLO_HDR_Logo.png' style='max-height: 60px'>
						</div>
						<div class='col-md-1 col-sm-1 col-xs-1 d-flex align-items-center' style='text-align: right!important; display: block!important;'>
							<a href='<?php echo base_url('logout') ?>' class='btn btn-primary' style='margin-top: 15%; margin-right: 10px; background-color: #1a1a1a; border-color: #1a1a1a'><i class="fa fa-power-off"></i></a>
						</div>
					</div>
				</div>
			</div>

			<div class='row mobile_top'>
				<div class='col-12 text-center' style='background-color: #73265f; height: 70px; box-shadow: 0px 0px 5px 2px #1a1a1a78; position: fixed; top: 0;'>
					<div class='row'>
						<div class='col-md-2 col-sm-12 col-xs-12' style='padding-top: 10px; padding-left: 10px'>
							<img class="img-fluid" src='https://www.manwich.com/sites/g/files/qyyrlu376/files/images/logos/MAN_GLO_HDR_Logo.png' style='max-height: 100px; height: 60px;'>
						</div>
						<div class='col-md-1 col-sm-1 col-xs-1 d-flex align-items-center' style='text-align: right!important;'>
							<a href='<?php echo base_url('logout') ?>' class='btn btn-primary' style='background-color: #1a1a1a; border-color: #1a1a1a; position: absolute; right: 10px; top: 10px;'><i class="fa fa-power-off"></i></a>
						</div>
					</div>
				</div>
			</div>

            <div class='row'>
				<div class='col-12' style='margin-top: 100px; margin-bottom: 20px; text-align: center'>
					<h1>Área Adiminstrativa</h1><br>
                    <h2><b>Restaurantes</b></h2>
				</div>
			</div>

			<div class='row'>
				<div class='col-12' style="margin-bottom: 10px; text-align: center">
					<button type="button" id="btnAdicionar" class="btn btn-primary mainBtn" data-bs-toggle="modal" data-bs-target="#ModalAdicionar" style='background-color: #1a1a1a; border-color: #1a1a1a'>
						Adicionar&nbsp;&nbsp;
						<i class="fa fa-plus"></i>
					</button>
				</div>	
				<div class='col-12' style='overflow-y: auto;'>
					<table class='datagrid'>
						<tr>
							<th>Nome</th>
							<th>Descrição</th>
							<th>Telefone</th>
							<th>Endereço</th>
							<th>Ações</th>
						</tr>

						<?php foreach($restaurantes as $rest){ ?>
							<tr>
								<td><?php echo $rest['restaurante_nome']; ?></td>
								<td><?php echo $rest['restaurante_descricao']; ?></td>
								<td><?php echo $rest['restaurante_telefone']; ?></td>
								<td><?php echo $rest['restaurante_endereco']; ?></td>
								<td>
									<div class="dropdown" style="float:right;">
                                        <button class='btn btn-primary dropbtn mainBtn'><i class="fa fa-bars"></i></button>
                                        <div class="dropdown-content">
                                            <a href="<?php echo base_url('adminRestaurante/').$rest['restaurante_id'] ?>">Ver</a>
                                            <a class="btnEditar" data-bs-toggle="modal" data-bs-target="#ModalAdicionar" data-id="<?php echo $rest['restaurante_id'];?>" data-nome="<?php echo $rest['restaurante_nome'];?>" data-descricao="<?php echo $rest['restaurante_descricao'];?>" data-tel="<?php echo $rest['restaurante_telefone'];?>" data-endereco="<?php echo $rest['restaurante_endereco'];?>" data-action="<?php echo base_url('editarRestaurante') ?>">
												Editar
											</a>
                                            <a href="<?php echo base_url('deletarRestaurante/').$rest['restaurante_id'] ?>">Excluir</a>
                                        </div>
                                    </div>
								</td>
							</tr>
						<?php } ?>
					</table>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade" id="ModalAdicionar" tabindex="-1" role="dialog" aria-labelledby="Adicioar" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="Adicioar">Adicioar Restaurante</h5>
			        		<button type="button" class="close" data-bs-dismiss="modal" aria-label="Fechar">
			         		 	<span aria-hidden="true">&times;</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
			        		<form id='novoRestaurante' method="post" action="<?php echo base_url('novoRestaurante') ?>">
			        			<input type="hidden" id="idRest" name="idRest">

			        			<div class='row'>
			        				<div class='col-12' style="text-align: center; margin-bottom: 15px">
			        					<label for="nome">Nome:</label><br>
						  				<input class='formInput' type="text" id="nome" name="nome" placeholder="Nome" required >
			        				</div>
			        				<div class='col-12' style="text-align: center; margin-bottom: 15px">
			        					<label for="descricao">Descrição:</label><br>
							  			<input class='formInput' type="text" id="descricao" name="descricao" placeholder="Descrição" required >
			        				</div>
			        				<div class='col-12' style="text-align: center; margin-bottom: 15px">
			        					<label for="tel">Telefone:</label><br>
							  			<input class='formInput' type="text" id="tel" name="tel" placeholder="Telefone" required >
			        				</div>
			        				<div class='col-12' style="text-align: center; margin-bottom: 15px">
			        					<label for="endereco">Endereço:</label><br>
							  			<input class='formInput' type="text" id="endereco" name="endereco" placeholder="Endereço" required >
			        				</div>
			        				<div class='col-12' style="text-align: center; margin-bottom: 15px">
			        					<input class="btn btn-primary mainBtn" type="submit" value="Salvar">
			        				</div>
			        			</div>
							</form>
			      		</div>
			    	</div>
			  	</div>
			</div>
        </div>
    </div>

    <script type="text/javascript">
    	$("#btnAdicionar").on("click", function(){
		    $("#Adicioar").text("Adicionar Restaurante");
		    $("#idRest").val('');
		    $("#nome").val('');
		    $("#descricao").val('');
		    $("#tel").val('');
		    $("#endereco").val('');
		    $("#novoRestaurante").attr('action', '<?php echo base_url('novoRestaurante') ?>');
		});

    	$(".btnEditar").on("click", function(){
		    $("#Adicioar").text("Editar Restaurante");
		    $("#idRest").val($(this).data('id'));
		    $("#nome").val($(this).data('nome'));
		    $("#descricao").val($(this).data('descricao'));
		    $("#tel").val($(this).data('tel'));
		    $("#endereco").val($(this).data('endereco'));
		    $("#novoRestaurante").attr('action', $(this).data('action'));
		});
    </script>

	