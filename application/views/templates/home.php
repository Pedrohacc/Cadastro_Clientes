
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


</head>

	<body>
    <div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Cadastro <b>Clientes</b></h2>
						</div>
						<div class="col-xs-6">
							<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Inserir</span></a>				
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th></th>
							<th>Nome</th>
							<th>data de Nascimento</th>
							<th>Sexo</th>
							<th>Cep</th>
							<th>Opções</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<?php 
							foreach($lista as $list) : ?>
							<td><?=$list['idcliente']?></td>
							<td><?=$list['nome']?></td>
							<td><?=$list['data_nascimento']?></td>
							<td><?=$list['sexo']?></td>
							<td><?=$list['cep']?></td>
							<td>
								<a href="<?=base_url()?>homecon/alterar/<?= $list['idcliente']?>"class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
								<a href="<?=base_url()?>homecon/delete/<?= $list['idcliente']?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Deletar">&#xE872;</i></a>
							</td>
						</tr>
					
					    <?php endforeach; ?>
					
					</tbody>
				</table>
			</div>
		</div>        
    </div>
	

	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?= base_url()?>homecon/inserir" method="post">
					<div class="modal-header">						
						<h4 class="modal-title">Inserir</h4>
						
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nome</label>
							<input type="text" class="form-control" name= "nome"  required>
						</div>
						<div class="form-group">
							<label>Data de  nascimento</label>
							<input type="date"  class="form-control" name ="data_nascimento" required >
						</div>
						<div class="form-group">
							<label>Sexo</label>
							<input type="text" class="form-control" name="sexo" required>
						</div>
						<div class="form-group">
							<label>Cep</label>
							<input type="text" type="text" class="form-control" id="cep" 
								onblur ="pesquisacep(this.value);" name= "cep" required>
						</div>	
						<div class="form-group">
							<label>Endereço</label>
							<input type="text" class="form-control" id="endereco" name="Endereco" disable >
						</div>	
						<div class="form-group">
							<label>Número</label>
							<input type="text" class="form-control" name="numero" required >
						</div>	
						<div class="form-group">
							<label>Complemento</label>
							<input type="textarea" class="form-control" name=complemento  required></input>
						</div>		
						<div class="form-group">
							<label>Bairro</label>
							<input type="text" class="form-control" id="bairro" name ="bairro" disable>
						</div>
						<div class="form-group">
							<label>Estado</label>
							<input type="text" class="form-control" id="uf" name="Estado" disable>
						</div>
						<div class="form-group">
							<label>Cidade</label>
							<input type="text" class="form-control" id="cidade" name="cidade" disable>
						</div>
						
						
					</div>
					<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
							<input type="submit" class="btn btn-success" value="Adicionar">
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
</body>

</html>