<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastro de Clientes</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"  href="<?= base_url('assets/css/home.css')?>">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="<?= base_url('assets/js/home.js')?>"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<body>

		
			<form action="<?= base_url() ?>homecon/update/<?= $infoalterar['idcliente']?> " method="post">
					<div class="modal-header">						
						<h4 class="modal-title">Alterar dados Clientes</h4>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nome</label>
							<input type="text" class="form-control" name= "nome"  required 
							 value="<?= isset($infoalterar) ? $infoalterar['nome'] : "" ?> " >
						</div>
						<div class="form-group">
							<label>Data de  nascimento</label>
							<input type="date" class="form-control" name ="data_nascimento" required >
						</div>
						<div class="form-group">
							<label>Sexo</label>
							<input type ="text" class="form-control" required 
							value="<?= isset($infoalterar) ? $infoalterar['sexo'] : "" ?> ">
						</div>
						<div class="form-group">
							<label>Cep</label>
							<input type="text" class="form-control" id="cep" 
								onblur ="pesquisacep(this.value);"required  
								value="<?= isset($infoalterar) ? $infoalterar['cep'] : "" ?> " >
						</div>	
						<div class="form-group">
							<label>Endereço</label>
							<input type="text" class="form-control" id="endereco" 
							disable value="<?= isset($infoalterar) ? $infoalterar['endereco'] : "" ?> " >
						</div>	
						<div class="form-group">
							<label>Número</label>
							<input type="text" class="form-control" 
							value="<?= isset($infoalterar) ? $infoalterar['numero'] : "" ?> ">
						</div>	
						<div class="form-group">
							<label>Complemento</label>
							<textarea type= "text" class="form-control"></textarea>
						</div>		
						<div class="form-group">
							<label>Bairro</label>
							<input type="text" class="form-control" id="bairro" disable 
							value="<?= isset($infoalterar) ? $infoalterar['bairro'] : "" ?> ">
						</div>
						<div class="form-group">
							<label>Estado</label>
							<input type="text" class="form-control" id="uf" disable 
							value="<?= isset($infoalterar) ? $infoalterar['estado'] : "" ?> ">
						</div>
						<div class="form-group">
							<label>Cidade</label>
							<input type="text" class="form-control" id="cidade" disable 
							value="<?= isset($infoalterar) ? $infoalterar['cidade'] : "" ?> ">
						</div>
						
						
					</div>
					<div class="modal-footer">
					<a href="<?= base_url()?>homecon/crud" ><input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar"></a>
					<input type="submit" class="btn btn-success" value="Alterar">
					</div>
				</form>
			
	
	
</body>
    </html>