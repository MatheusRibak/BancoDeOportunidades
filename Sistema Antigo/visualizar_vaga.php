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
						<div class="panel-heading">
							<small>Vaga de Emprego de</small>
							<h1 class="form-title">Programador</h1>
						</div>
						<div class="panel-body">
							<p>
								<b><i class="fa fa-star"></i> Faixa Salarial:</b> R$ 1500.00
							</p>
							<p>
								<b><i class="fa fa-street-view"></i> Local da Vaga:</b> Xanxerê/SC
							</p>
							<p>
								<b><i class="fa fa-suitcase"></i> Área:</b> TI
							</p>
							<p>
								<b><i class="fa fa-line-chart"></i> Nível:</b> Aprendiz
							</p>
							<p>
								<b><i class="fa fa-calendar"></i> Período:</b> Segunda à Sexta
							</p>
							<p>
								<b><i class="fa fa-adjust"></i> Horário de Trabalho:</b> 8hrs às 18hrs
							</p>
							<span><b><i class="fa fa-user"></i> Atividades Profissionais</b></span>
							<br />
							<span>Desempenhar funções voltadas para o desenvolvimento dos projetos da empresa.</span>
							<br />
							<br />
							<p>
								<b><i class="fa fa-th-list"></i> Requisitos</b>
							</p>
							<span><b><i class="fa fa-bookmark"></i> Experiência:</b></span>
							<br />
							<span>Como o cargo é aprendiz, dispensamos a necessidade de experiência.</span>
							<br />
							<span><b><i class="fa fa-check-square-o"></i> Conhecimento:</b></span>
							<br />
							<span>Noções básicas das linguangens java e phyton.</span>
							<br />
							<span><b><i class="fa fa-certificate"></i> Escolaridade:</b></span>
							<br />
							<span>Ensino superior ou técnico na áre de TI completo ou cursando.</span>
							<br />
							<br />
							<p>
								<b><i class="fa fa-pencil"></i> Dados da Contratação</b>
							</p>
							<span> <b><i class="fa fa-check"></i> Benefícios da vaga de emprego</b> </span>
							<br />
							<span>Convênio Farmácia</span>
							<br />
							<span>Seguro de Vida</span>
							<br />
							<span>Vale refeição</span>
							<br />
							<span>Cesta básica</span>
							<br />
							<span>Vale Transporte</span>
							<br />
							<br />
							<p><b><i class="fa fa-group"></i> Dados da Empresa</b></p>
							<span><b>Nome:</b> Empresa Júnior Experssão Universitária</span>
							<br />
							<span><b>Segmento:</b> Tecnologia</span>
							<br />
							<a href="#">Ver Perfil completo</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="area-fixed">
			<div class="container">
				<div class="col-sm-12">
					<a href="#" class="btn btn-primary pull-left">Cadidatar-se à esta vaga</a>
				</div>
			</div>
		</footer>
		<script src="estilo/js/jquery.js"></script>
		<script src="estilo/js/scripts.js"></script>
		<script src="estilo/js/bootstrap.min.js"></script>
	</body>
</html>
