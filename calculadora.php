<!DOCTYPE HTML>
<html lang = "en">
	<head>
		<title>Agro Silos</title>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<style type="text/css">

		.mobileHide { display: inline; }

		/* Smartphone Portrait and Landscape */
		@media only screen
		  and (min-device-width : 320px)
		  and (max-device-width : 480px){
		   .mobileHide { display: none;}
		}}

</style>		
	</head>
	<br>
	<body>			
		<?php
				include 'navbar.php';
			?>
		<br>
		<div class="container col-sm-6 rounded" style="background-color: white; ">
			
		<div class="form-row">
				<div class=" form-group col">
				<br>
				<h4 align="left">Inserir</h4>
				<hr>

				<form method="post" action="gravar.php">

				<div class="form-group col">
				<label for="inputtext" >Número de Animais</label>
				<input type="number" class="form-control " name="numero_animais" placeholder="" min="1" max="1024">
				</div>

				<div class="form-group col">
					<label for="inputtext" >Dias de Fornecimento</label>
					<input type="number" class="form-control " name="dias_fornecimento" placeholder="" min="1" max="1024">
				</div>

				<div class="form-group col">
					<label for="inputtext" >Consumo de forragem de cada animal por dia (kg)</label>
					<input type="number" class="form-control " name="consumo_forragem" placeholder="" min="1" max="1024">
				</div>

				<div class="form-group col">
					<label for="inputtext" > H - Altura do Silo (m)  <p style=" color:red; font-size: 10px; display:inline;" >*mínimo de 2 metros e máximo de 4 metros</p></label>
					<input name="altura_silo"  class="form-control " type="number" min="2" max="4" step=0.1 va> 
				</div>

				<div class="form-group col">
					<label for="inputtext" > <a href="index.php "><img src="images/mudar.png"></a> Espessura da fatia a ser retirada diariamente (cm)  <p style=" color:red; font-size: 10px; display:inline;" >*mínimo de 20 cm</p> </label>
					<input type="number" class="form-control" name="espessura_fatia" placeholder="" value="" min="20">
				</div>

				<div class="form-group col">
					<label for="inputtext" >Densidade considerada (kg/m³)</label>
					<input type="number" class="form-control " name="densidade" placeholder=""				
					onkeyup="     
	 					$(this).keydown(function (event) {
							if (event.key == 'Enter') 
							{
								$('[name=btn_calcular]').trigger('click');
								event.preventDefault()
								return false
							}
						})
					"
					>
				</div>

				<div class="form-group col text-center">
					<button type='button' class='btn btn-green' name="btn_calcular" data-toggle="modal" data-target="#exampleModal">Calcular</button>
				</div>

				<script>
					/*
					var input = document.getElementById("densidade");
					input.addEventListener("keyup", function(event) {
					  if (event.keyCode === 13) {
						event.preventDefault();
					   document.getElementById("btn_calcular").click();
					  }
					});
					*/
				</script>

			</div>
		</div>
	</div>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" 	aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    			<div class="modal-content">
    	  			<div class="modal-header">
    	    			<h5 class="modal-title" id="exampleModalLabel"> Resultados</h5>
    	    			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    	      				<span aria-hidden="true">&times;</span>
    	    			</button>
    	 			 </div>
    	  				<div class="modal-body">
						  <div class="form-row">
				                <div class=" form-group col">
                                    <form>
										<div class="form-group">
											<label for="inputtext" > QS - Quantidade de silagem que o silo deve armazenar (kg)</label>
											<input type="text" class="form-control  " name="quantidade_silo" placeholder="" readonly="readonly">
										</div>

										<div class="form-group">
											<label for="inputtext" > VS - Volume do silo (m³)</label>
											<input type="text" class="form-control  " name="volume_silo" placeholder="" readonly="readonly">
										</div>

										<div class="form-group">
											<label for="inputtext" > VD - Volume diário (m³)</label>
											<input type="text" class="form-control  " name="volume_dia" placeholder="" readonly="readonly">
										</div>

										<div class="form-group">
											<label for="inputtext" > AS - Área da seção a ser retirada por dia (m²)</label>
											<input type="text" class="form-control  " name="area_secao" placeholder="" readonly="readonly">
										</div>

										<div class="form-group">
											<label for="inputtext" > b - Base Menor do Silo (m)</label>
											<input type="text" class="form-control  " name="base_menor" placeholder="" readonly="readonly">
										</div>

										<div class="form-group">
											<label for="inputtext" > B - Base Maior do Silo (m)</label>
											<input type="text" class="form-control  " name="base_maior" placeholder="" readonly="readonly">
										</div>

										<div class="form-group">
											<label for="inputtext" > C - Comprimento do Silo (m)</label>
											<input type="text" class="form-control  " name="comprimento_silo" placeholder="" readonly="readonly">
										</div>

										<div class="form-group">
										<div class="separator"></div>
											<div class="set" style="width: 100%; height: auto; border: 1px solid #aaa; position: relative;">
											  <img src="images/silo.png" style="width: 100%;">
											  <div class="chart chart_base_maior">0</div>
											  <div class="chart chart_base_menor">0</div>
											  <div class="chart chart_comprimento_silo">0</div>
											  <div class="chart chart_altura_silo">0</div>

											</div>
											<p style=" color:black; font-size: 10px; display:inline; font-weight: bold;" > B - Base maior do silo</p><br>
											<p style=" color:black; font-size: 10px; display:inline; font-weight: bold" >H - Altura do silo</p><br>
											<p style=" color:black; font-size: 10px; display:inline; font-weight: bold" > b - Base menor do silo</p><br>
											<p style=" color:black; font-size: 10px; display:inline; font-weight: bold" > AS  - Area da seção do silo</p><br>
											<p style=" color:black; font-size: 10px; display:inline; font-weight: bold" > C - Comprimento do silo</p><br>

										</div>
                                </div>
                            </div>
    	  				</div>

    	  				<div class="modal-footer">
					  		<?php if ($email && $senha) {
							?>
							<button type='submit' class='btn btn-green'>Gravar</button>
							<button type="submit" formaction="gravar_imprimir.php"  class="btn btn-green">Imprimir</button>
							</form>
					  		<?php } ?>
							<button type="button" class="btn btn-green" data-dismiss="modal" aria-label="btn btn-green">Fechar</button>
    	  				</div>
  				</div>
			</div>
		</div>
			


		
	</div>
	

	<div class="foot" style="
 		position: relative;
  		bottom: 0;
  		width: 100%;
        ">						
			<?php
				include 'footer.php';
			?>
	</div>


		<link rel="stylesheet" href="css/estilo2.css">
		<script src="js/agrosilos.js"></script>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
  	</body>
</html>
  

