<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Banco de Oportunidades</title>

		<link rel="stylesheet" href="estilo/css/style.css" />
		<link rel="stylesheet" href="estilo/css/bootstrap.min.css" />
		<link rel="stylesheet" href="estilo/fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
		<link rel="icon" href="estilo/img/favicon.png" />
		
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
					<a href="#" class="navbar-brand"> <img src="estilo/img/favicon.png" alt="logo"> </a>
					<a class="navbar-brand hidden-xs" href="index.php">Banco de Oportunidades</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Cadastre-se <span class="caret"></span> </a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="cadastro_academico.php"><i class="fa fa-graduation-cap fa-fw"></i> Acadêmico</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="cadastro_empregador.php"><i class="fa fa-suitcase fa-fw"></i> Empregador</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b>Login</b> <span class="caret"></span> </a>
							<ul id="login-dp" class="dropdown-menu">
								<li class="hidden" id="i-forgot-form">
									<div class="row">
										<div class="col-md-12">
											<form action="">
												<div class="form-group input-group">
													<label for="email-remember" class="input-group-addon"> <i class="fa fa-envelope fa-fw"></i> </label>
													<input type="email" class="form-control" id="email-remember" placeholder="E-mail cadastrado" required>
													<span class="input-group-btn">
														<button class="btn btn-primary" type="submit">
															Redefinir
														</button> </span>
												</div>
												<div class="help-block text-center">
													<p class="text-danger danger text-left">
														Será feita a redefinição da sua senha e será enviada para o e-mail cadastrado.
														<span class="text-muted">Lembrou da senha? <a class="pointer" id="i-remember">Login aqui.</a></span>
													</p>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li id="login-form">
									<div class="row">
										<div class="col-md-12">
											<form class="form" role="form" method="get" action="usuario_academico.php" id="login-nav">
												<div class="form-group input-group">
													<label for="email-login" class="input-group-addon"> <i class="fa fa-envelope fa-fw"></i> </label>
													<input type="email" class="form-control" id="email-login" placeholder="E-mail" required>
												</div>
												<div class="form-group input-group">
													<label for="senha-login" class="input-group-addon"> <i class="fa fa-lock fa-fw"></i> </label>
													<input type="password" class="form-control" id="senha-login" placeholder="Senha" required>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox" id="remember-me">
														<label for="remember-me" class="no-padding">Manter-me logado</label> </label>
												</div>
												<div class="form-group">
													<button type="submit" class="btn btn-primary btn-block">
														Entrar
													</button>
												</div>
												<div class="help-block text-center">
													<a class="pointer" id="i-forgot">Esqueceu sua senha?</a>
												</div>
											</form>
										</div>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="cadastro-content">
			<div class="page-content">
				<div class="container">
					<div id="panel" class="panel panel-default col-sm-12">
						<div class="panel-body">
							<form class="form-horizontal" action="" method="post">
								<div class="input-group">
									<div class="input-group-btn search-panel">
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											<span id="search_concept">Currículos</span><span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li>
												<a href="#contains">Currículos</a>
											</li>
											<li>
												<a href="#its_equal">Vagas</a>
											</li>
											<li>
												<a href="#greather_than">Empresas</a>
											</li>
											<li>
												<a href="#less_than"></a>
											</li>
										</ul>
									</div>
									<input type="hidden" name="search_param" value="all" id="search_param">
									<select class="form-control">
										<option value="Teste">Teste</option>
									</select>
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">
											<i class="fa fa-search fa-fw"></i>
										</button> </span>
								</div>
							</form>
						</div>
					</div>
					<strong>Vagas em Aberto</strong>
					<div class="panel panel-default col-sm-12">
						<div class="panel-heading">
							<div class="form-group">
								<div class="pull-left">
									<span>Mostrar</span>
									<select name="vagas">
										<option value="50">50</option>
										<option value="100">100</option>
										<option value="500">500</option>
										<option value="1000">1000</option>
									</select>
									<span>resultados</span>
								</div>
							</div>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-hover no-margin">
									<thead>
										<tr>
											<th>Área</th>
											<th>Cargo</th>
											<th>Faixa Salarial</th>
											<th>Período</th>
											<th>Nível</th>
											<th>Empresa</th>
											<th>Ver Vaga</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>TI</td> <td>Programador</td> <td>R$ 1500.00</td> <td>Segunda à sexta</td> <td>Aprendiz</td> <td>Empresa Jr <a class="black" title="Visualizar Perfil" href="#"><i class="fa fa-user"></i></a></td><td><a class="black" title="Ver vaga" href="visualizar_vaga.php"><i class="fa fa-search"></i></a></td>
										</tr>
										<tr>
											<td>TI</td> <td>Programador</td> <td>R$ 1500.00</td> <td>Segunda à sexta</td> <td>Aprendiz</td> <td>Empresa Jr <a class="black" title="Visualizar Perfil" href="#"><i class="fa fa-user"></i></a></td><td><a class="black" title="Ver vaga" href="#"><i class="fa fa-search"></i></a></td>
										</tr>
										<tr>
											<td>TI</td> <td>Programador</td> <td>R$ 1500.00</td> <td>Segunda à sexta</td> <td>Aprendiz</td> <td>Empresa Jr <a class="black" title="Visualizar Perfil" href="#"><i class="fa fa-user"></i></a></td><td><a class="black" title="Ver vaga" href="#"><i class="fa fa-search"></i></a></td>
										</tr>
										<tr>
											<td>TI</td> <td>Programador</td> <td>R$ 1500.00</td> <td>Segunda à sexta</td> <td>Aprendiz</td> <td>Empresa Jr <a class="black" title="Visualizar Perfil" href="#"><i class="fa fa-user"></i></a></td><td><a class="black" title="Ver vaga" href="#"><i class="fa fa-search"></i></a></td>
										</tr>
										<tr>
											<td>TI</td> <td>Programador</td> <td>R$ 1500.00</td> <td>Segunda à sexta</td> <td>Aprendiz</td> <td>Empresa Jr <a class="black" title="Visualizar Perfil" href="#"><i class="fa fa-user"></i></a></td><td><a class="black" title="Ver vaga" href="#"><i class="fa fa-search"></i></a></td>
										</tr>
										<tr>
											<td>TI</td> <td>Programador</td> <td>R$ 1500.00</td> <td>Segunda à sexta</td> <td>Aprendiz</td> <td>Empresa Jr <a class="black" title="Visualizar Perfil" href="#"><i class="fa fa-user"></i></a></td><td><a class="black" title="Ver vaga" href="#"><i class="fa fa-search"></i></a></td>
										</tr>
										<tr>
											<td>TI</td> <td>Programador</td> <td>R$ 1500.00</td> <td>Segunda à sexta</td> <td>Aprendiz</td> <td>Empresa Jr <a class="black" title="Visualizar Perfil" href="#"><i class="fa fa-user"></i></a></td><td><a class="black" title="Ver vaga" href="#"><i class="fa fa-search"></i></a></td>
										</tr>
										<tr>
											<td>TI</td> <td>Programador</td> <td>R$ 1500.00</td> <td>Segunda à sexta</td> <td>Aprendiz</td> <td>Empresa Jr <a class="black" title="Visualizar Perfil" href="#"><i class="fa fa-user"></i></a></td><td><a class="black" title="Ver vaga" href="#"><i class="fa fa-search"></i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<strong class="pull-left col-xs-10 col-sm-10">Mostrando 1 de 1 para os 8 resultados encontrados</strong>
					<div class="col-sm-2">
						<a id="next" class="black pull-right" title="Próximo" href="#"><i class="fa fa-chevron-circle-right"></i></a>
						<a id="previous" class="black pull-right" title="Anterior" href="#"><i class="fa fa-chevron-circle-left"></i></a>
					</div>
				</div>
			</div>
		</div>

		<script src="estilo/js/jquery.js"></script>
		<script src="estilo/js/scripts.js"></script>
		<script src="estilo/js/bootstrap.min.js"></script>
	</body>
</html>
