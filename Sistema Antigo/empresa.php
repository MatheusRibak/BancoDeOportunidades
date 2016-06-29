<!DOCTYPE html>
<html lang="pt-BR">

	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="img/favicon.png">
		<title>Empresa-JR</title>
		<link href="estilo/fonts/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="estilo/css/bootstrap.min.css">
		<link rel="stylesheet" href="estilo/css/style.css">
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
					<a class="navbar-brand" href="#">Banco de Currículos</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b> Empresa JR</b><span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
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
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"> Dados Gerais <span class="pull-right"> <a href="#">Editar</a> </span></h3>
				</div>
				<div class="panel-body">
					<h3>Empresa Junior</h3>
					<p>
						<strong>E-mail: </strong>example@example.com
						<br>
						<strong>Endereço: </strong>Rua Dirceu Giordani 343
						<br>
						<strong>Cidade: </strong>Xanxere
						<br>
						<strong>Estado: </strong>Santa Catarina
					</p>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"> Vagas de Emprego <span class="pull-right"> <a href="vaga_emprego_form.php">Adicionar</a> </span></h3>
				</div>
				<table class="table">
					<thead>
						<th>Cargo</th>
						<th>Faixa Salarial</th>
						<th>Area</th>
						<th>Nível</th>
						<th>Horário de Trabalho</th>
						<th>Atividades Profissionais</th>
						<th>Requisítos</th>
						<th>Opções</th>
					</thead>
					<tbody>
						<tr>
							<td>Programador</td>
							<td>R$ 3000.00</td>
							<td>TI</td>
							<td>Aprendiz</td>
							<td>8h as 17h</td>
							<td>Desempenhar funções de programador nos projetos da empresa</td>
							<td>Conhecimentos avançados em pyton</td>
							<td><a href="#">Remover</a><a href="#">Editar</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<script type="text/javascript" src="estilo/js/jquery.js"></script>
		<script type="text/javascript" src="estilo/js/bootstrap.min.js"></script>
	</body>

</html>