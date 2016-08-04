<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Banco de Oportunidades</title>

  <link rel="icon" href="<?= base_url('assets/img/favicon.png') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" type="text/css">
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" type="text/css">
  <link rel="stylesheet" href="<?= base_url('assets/fonts/font-awesome-4.3.0/css/font-awesome.min.css') ?>" type="text/css">
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
				<img src="<?= base_url('assets/img/favicon.png') ?>" alt="logo">
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
	<div class="usuario-content">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="pn-heading">
								<span class="pull-left">
									<strong>Perfil</strong>
								</span>
								<span class="pull-right">
									<a href="#" class="btn btn-primary btn-xs">
										Editar <i class="fa fa-wrench fa-fw"></i>
									</a>
								</span>
							</div>
							<div class="row">
								<div class="col-xs-6 col-md-12">
									<ul class="list-unstyled">
										<li>Manolo da Silva</li>
										<li>manolo_silva@example.com</li>
										<li>Cidade - UF</li>
									</ul>
									<hr class="hidden-xs hidden-sm pn-divider">
								</div>
								<div class="col-xs-6 col-md-12">
									<a href="#">Exportar para .PDF</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="pn-heading">
							<span class="pull-left">
								<strong>Formação</strong>
							</span>
							<span class="pull-right">
								<a href="<?= base_url('academico/carregaFormacao') ?>" class="btn btn-primary btn-xs">
									Adicionar <i class="fa fa-plus fa-fw"></i>
								</a>
							</span>
							</div>
							<div class="table-responsive">
								<table class="table table-hover no-margin">
									<thead>
									<tr>
										<th>Curso</th>
										<th>Tipo</th>
										<th>Instituição</th>
										<th>Data de Inicio</th>
										<th>Data de Termino</th>
										<th>Opções</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td>teste</td>
											<td>teste</td>
										<td>teste</td>
										<td>teste</td>
										<td>teste</td>
										<td>
											<a href="#" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil fa-fw"></i>
											</a>
											<a href="#" class="btn btn-danger btn-xs">
												<i class="fa fa-trash fa-fw"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>teste</td>
										<td>teste</td>
										<td>teste</td>
										<td>teste</td>
											<td>teste</td>
										<td>
											<a href="#" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil fa-fw"></i>
											</a>
											<a href="#" class="btn btn-danger btn-xs">
												<i class="fa fa-trash fa-fw"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>teste</td>
										<td>teste</td>
										<td>teste</td>
										<td>teste</td>
											<td>teste</td>
										<td>
											<a href="#" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil fa-fw"></i>
											</a>
											<a href="#" class="btn btn-danger btn-xs">
												<i class="fa fa-trash fa-fw"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>teste</td>
										<td>teste</td>
										<td>teste</td>
										<td>teste</td>
											<td>teste</td>
										<td>
											<a href="#" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil fa-fw"></i>
											</a>
											<a href="#" class="btn btn-danger btn-xs">
												<i class="fa fa-trash fa-fw"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>teste</td>
										<td>teste</td>
										<td>teste</td>
										<td>teste</td>
											<td>teste</td>
										<td>
											<a href="#" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil fa-fw"></i>
											</a>
											<a href="#" class="btn btn-danger btn-xs">
												<i class="fa fa-trash fa-fw"></i>
											</a>
										</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="pn-heading">
							<span class="pull-left">
								<strong>Experiências Profissionais</strong>
							</span>
							<span class="pull-right">
								<a href="<?= base_url('academico/carregaExp') ?>" class="btn btn-primary btn-xs">
									Adicionar <i class="fa fa-plus fa-fw"></i>
								</a>
							</span>
							</div>
							<div class="table-responsive">
								<table class="table table-hover no-margin">
									<thead>
									<tr>
										<th>Ocupação</th>
										<th>Empresa</th>
										<th>Atividades</th>
										<th>Opções</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td>teste</td>
										<td>teste</td>
										<td>teste</td>
										<td>
											<a href="#" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil fa-fw"></i>
											</a>
											<a href="#" class="btn btn-danger btn-xs">
												<i class="fa fa-trash fa-fw"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>teste</td>
										<td>teste</td>
										<td>teste</td>
										<td>
											<a href="#" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil fa-fw"></i>
											</a>
											<a href="#" class="btn btn-danger btn-xs">
												<i class="fa fa-trash fa-fw"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td>teste</td>
										<td>teste</td>
										<td>teste</td>
										<td>
											<a href="#" class="btn btn-primary btn-xs">
												<i class="fa fa-pencil fa-fw"></i>
											</a>
											<a href="#" class="btn btn-danger btn-xs">
												<i class="fa fa-trash fa-fw"></i>
											</a>
										</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?= base_url('assets/js/jquery.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/scripts.js') ?>"></script>
</body>

</html>
