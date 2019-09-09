<html>
	<head>
		<title>Silagem</title>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
	<body>

			<?php
				include 'navbar.php';
			?>
		
		<br>
		<br>
		
		<div class="container">
			<div class="row">
			<div class="col-md-12 text-center">
			<div class="container">	

			<h4 align="left">Inserir dados</h1>
			<hr>

			<div class="form-group row">
				<label for="inputtext" >Número de Animais:</label>
				<input type="text" class="form-control" id="num_animais" placeholder="">
			</div>

			<div class="form-group row">
				<label for="inputtext" >Dias de Fornecimento:</label>
				<input type="text" class="form-control" id="dias_fornecimento" placeholder="">
			</div>

			<div class="form-group row">
				<label for="inputtext" >Consumo por dia:</label>
				<input type="text" class="form-control" id="consumo_diario" placeholder="">
			</div>

			<div class="dropdown">
				<label for="inputtext" >Altura do Silo:</label>
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
  				<span class="caret"></span></button>
  				<ul class="dropdown-menu">
    					<li><a href="#">2</a></li>
    					<li><a href="#">3</a></li>
    					<li><a href="#">4</a></li>
 				 </ul>
			</div> 

			<div class="form-group row">
				<label for="inputtext" >Espressura da fatia a ser retirada diariamente:</label>
				<input type="text" class="form-control" id="espressura_diaria" placeholder="">
			</div>

			<div class="form-group row">
				<label for="inputtext" >Densidade considerada</label>
				<input type="text" class="form-control" id="densidade_considerada" placeholder="">
			</div>
			

			<button class="btn btn-primary btn-lg" type="button" data-toggle="collapse" 				data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
   				 Calcular
  			</button>
		


			</div>	


					<br>
					<div class="container">
							<div class="collapse" id="collapseExample">
									<h4 align="left">Resultados</h1>
									<hr>

										<div class="form-group row">
											<label for="inputtext" >Quantidade de silagem que o silo deve armazenar (QS):</label>
											<input type="text" class="form-control" id="quantidade_silagem" placeholder="">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Área necessária para cultivo:</label>
											<input type="text" class="form-control" id="area_cultivo" placeholder="">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Volume do silo (VS) - metro cúbico:</label>
											<input type="text" class="form-control" id="volume_silo" placeholder="">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Volume diário:</label>
											<input type="text" class="form-control" id="voluma_diario" placeholder="">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Área da seção a ser retirada por dia:</label>
											<input type="text" class="form-control" id="area_secao" placeholder="">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Comprimento do Silo:</label>
											<input type="text" class="form-control" id="comprimento_silo" placeholder="">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Base Menor:</label>
											<input type="text" class="form-control" id="base_menor" placeholder="">
										</div>

										<div class="form-group row">
											<label for="inputtext" >Base Maior:</label>
											<input type="text" class="form-control" id="base_maior" placeholder="">
										</div>


		
									  
										<br></br>
										<a href="#" class="btn btn-secondary btn-lg" role="button" aria-disabled="true">Imprimir ficha</a>

										</form>
							</div>
					</div>


		</div>
		

		


		<script src="function.js"></script> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	</body>
</html>
  

