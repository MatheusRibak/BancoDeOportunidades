<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Banco de Oportunidades</title>

	<link rel="icon" href="estilo/img/favicon.png">
	<link rel="stylesheet" href="estilo/css/style.css" type="text/css">
	<link rel="stylesheet" href="estilo/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="estilo/fonts/font-awesome-4.3.0/css/font-awesome.min.css" type="text/css">
</head>

<body>
	<nav class="navbar navbar-default navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand"> <img src="estilo/img/favicon.png" alt="logo"> </a>
				<a class="navbar-brand" href="#">Banco de Oportunidades</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<b>Manolo</b> <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Perfil</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">Sair</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="page-header">
			<h1>Nova vaga de Emprego</h1>
		</div>
		<form class="form-horizontal">
			<div class="form-group">
				<legend>
					Dados Gerais
				</legend>
				<label for="cargo" class="col-sm-2 control-label">Cargo:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="cargo" placeholder="Cargo">
				</div>
			</div>
			<div class="form-group">
				<label for="salario" class="col-sm-2 control-label">Faixa Salarial:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="salario" placeholder="Faixa Salarial">
				</div>
			</div>
			<div class="form-group">
				<label for="area" class="col-sm-2 control-label">Area:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="area" placeholder="Area">
				</div>
			</div>
			<div class="form-group">
				<label for="nivel" class="col-sm-2 control-label">Nível:</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" id="nivel" placeholder="Nível">
				</div>
			</div>
			<div class="form-group">
				<label for="periodo" class="col-sm-2 control-label">Período:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="periodo" placeholder="Período">
				</div>
			</div>
			<div class="form-group">
				<label for="horario" class="col-sm-2 control-label">Horário de Trabalho:</label>
				<div class="col-sm-10">
					<input type="datetime" class="form-control" id="horario" placeholder="Horário de Trabalho">
				</div>
			</div>
			<div class="form-group">
				<label for="atividades" class="col-sm-2 control-label">Atividades:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="atividades" placeholder="Atividades profissionais">
				</div>
			</div>
			<legend>
				Requisitos
			</legend>
			<div class="form-group">
				<div class=" col-sm-offset-2">
					<input type="checkbox" id="experiência" value="experiencia" onclick="Habilitar(this,'descricao')"> Experiência
				</div>
			</div>
			<div class="form-group">
				<div class=" col-sm-offset-2 col-sm-10">
					<input type="text" class="form-control" id="descricao" placeholder="Descrição" disabled="">
				</div>
			</div>
			<div class="form-group">
				<div class=" col-sm-offset-2">
					<input type="checkbox" id="conhecimento" value="conhecimento" onclick="Habilitar(this,'descricaoconhecimento')"> Conhecimento
				</div>
			</div>
			<div class="form-group">
				<div class=" col-sm-offset-2 col-sm-10">
					<input type="text" class="form-control" id="descricaoconhecimento" placeholder="Descrição" disabled="">
				</div>
			</div>
			<div class="form-group">
				<div class=" col-sm-offset-2">
					<input type="checkbox" id="escolaridade" value="escolaridade" onclick="Habilitar(this,'descricaoescolaridade')"> Escolaridade
				</div>
			</div>
			<div class="form-group">
				<div class=" col-sm-offset-2 col-sm-10">
					<input type="text" class="form-control" id="descricaoescolaridade" placeholder="Descrição" disabled="">
				</div>
			</div>
			<legend>
				Benefícios
			</legend>
			<div class="form-group">
				<div class="col-sm-offset-2">
					<input type="checkbox" id="convenio" value="convênio" /> Convênio com Farmácia
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2">
					<input type="checkbox" id="seguro" value="seguro" /> Seguro de Vida
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2">
					<input type="checkbox" id="valerefeicao" value="valerefeicao" /> Vale refeição
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2">
					<input type="checkbox" id="segurovida" value="segurovida" /> Seguro de Vida
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2">
					<input type="checkbox" id="valetransporte" value="valetransporte" /> Vale Transporte
				</div>
			</div>
			<div class="panel-footer">
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">
							Concluir
						</button>
					</div>
				</div>
			</div>
		</form>
	</div>

	<script src="estilo/js/jquery.js"></script>
	<script src="estilo/js/bootstrap.min.js"></script>
	<script src="estilo/js/scripts.js"></script>
</body>

</html>