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
<nav class="navbar navbar-default navbar-fixed-top no-radius no-margin" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">
				<img src="estilo/img/favicon.png" alt="logo">
			</a>
			<a class="navbar-brand hidden-xs" href="index.php">Banco de Oportunidades</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<b>Manolo da Silva</b> <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="#"><i class="fa fa-file-text fa-fw"></i> Meu Currículo</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-wrench fa-fw"></i> Editar Perfil</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<div class="page-content">
	<div class="form-add-content">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="pn-heading">
								<span class="pull-left">
									<strong>Experiência Profissional
										<small class="text-muted">Adicione alguma coisa</small>
									</strong>
								</span>
							</div>
							<form class="form-horizontal">
								<div class="form-group">
									<label for="nome" class="col-sm-2 control-label">Nome:</label>

									<div class="col-sm-10">
										<input type="text" class="form-control" id="nome" placeholder="Digite seu nome completo" required>
									</div>
								</div>
								<div class="form-group">
									<label for="email-cad" class="col-sm-2 control-label">E-mail:</label>

									<div class="col-sm-10">
										<input type="email" class="form-control" id="email-cad" placeholder="Digite seu e-mail" required>
									</div>
								</div>
								<div class="form-group">
									<label for="senha" class="col-sm-2 control-label">Senha:</label>

									<div class="col-sm-10">
										<input type="password" class="form-control" id="senha" placeholder="Digite sua senha" required>
									</div>
								</div>
								<div class="form-group">
									<label for="confirmar-senha" class="col-sm-2 control-label">Confirmar Senha:</label>

									<div class="col-sm-10">
										<input type="password" class="form-control" id="confirmar-senha" placeholder="Repita sua senha para confirmar" required>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<div class="checkbox">
											<label>
												<input type="checkbox" required> Aceito os
											</label>
											<a href="#" data-toggle="modal" data-target="#modal-contrato">Termos e Condições</a> do contrato.
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" class="btn btn-primary">
											Adicionar <i class="fa fa-plus fa-fw"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="estilo/js/jquery.js"></script>
<script src="estilo/js/bootstrap.min.js"></script>
<script src="estilo/js/scripts.js"></script>
</body>

</html>