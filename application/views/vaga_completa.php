
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Banco de Oportunidades</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/fonts/font-awesome-4.3.0/css/font-awesome.min.css') ?>" type="text/css">
        <link rel="icon" href="<?= base_url('assets/img/favicon.png') ?>">
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
								<a class="navbar-brand hidden-xs" href="<?= site_url('Painel_academico') ?>">Banco de Oportunidades</a>
						</div>
						<div class="collapse navbar-collapse" id="navbar-collapse-1">
								<ul class="nav navbar-nav navbar-right">
										<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														<b>Usuário: </b><?php echo $dadosAcademico->email ?> <span class="caret"></span>
												</a>
												<ul class="dropdown-menu">
														<li>
																<a href="<?= site_url('Painel_academico/deslogar') ?>"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
														</li>
												</ul>
										</li>
								</ul>
						</div>
				</div>
		</nav>
      <?php foreach ($dadosVaga as $row): ?>
		<div class="cadastro-content">
			<div class="page-content">
				<div class="container">
					<div id="panel" class="panel panel-default col-sm-12">
            <br>
						<a href="<?= site_url('Painel_academico/index') ?>">Voltar</a>
						<div class="">
							<small>Vaga de Emprego de</small>
							<h1 class="form-title"><?php echo $row->cargo; ?></h1>
						</div>
						<div class="panel-body">
							<p>
								<b><i class="fa fa-star"></i> Faixa Salarial:</b> <?php echo $row->salario; ?>
							</p>
							<p>
								<b><i class="fa fa-street-view"></i> Local da Vaga:</b> Xanxerê/SC
							</p>
							<p>
								<b><i class="fa fa-suitcase"></i> Área:</b> <?php echo $row->area; ?>
							</p>
							<p>
								<b><i class="fa fa-line-chart"></i> Nível:</b> <?php echo $row->nivel; ?>
							</p>
							<p>
								<b><i class="fa fa-calendar"></i> Período:</b> Segunda à Sexta
							</p>
							<p>
								<b><i class="fa fa-adjust"></i> Horário de Trabalho:</b> 8hrs às 18hrs
							</p>
							<span><b><i class="fa fa-user"></i> Atividades Profissionais</b></span>
							<br />
							<span><?php echo $row->atividades; ?></span>
							<br />
							<br />
							<p>
								<b><i class="fa fa-pencil"></i> Dados da Contratação</b>
							</p>
							<p>
								<b><i class="fa fa-th-list"></i> Requisitos</b>
							</p>
              	<span><?php echo $row->requisitos; ?></span> <br>

							<span> <b><i class="fa fa-check"></i> Benefícios da vaga de emprego</b> </span>
							<br />
							<span><?php echo $row->beneficios; ?></span>
							<br />
<br>  <?php endforeach; ?>
      <?php foreach ($dadosEmpregador as $empregador): ?>
							<p><b><i class="fa fa-group"></i> Dados da Empresa</b></p>
							<span><b>Nome:</b> <?php echo $empregador->nome_empresa; ?></span>
							<br />
	<span><b>Endereço:</b> <?php echo $empregador->endereco; ?></span>
							<br />
              <span><b>Cidade:</b> <?php echo $empregador->cidade; ?></span> -   <span><b>Estado:</b> <?php echo $empregador->estado; ?></span>
<br>
          <span><b>E-mail:</b> <?php echo $empregador->email; ?></span> -   <span><b>Telefone:</b> <?php echo $empregador->telefone; ?></span>

						</div>
					</div>
				</div>
			</div>
		</div>

  <?php endforeach; ?>
		<footer class="area-fixed">
			<div class="container">
				<div class="col-sm-12">
          <form class="" action="<?= site_url('Vaga_academico/cadastraCandidato') ?>" method="post">
              <?php foreach ($dadosEmpregador as $empregador): ?>
            <input type="hidden" name="id_empregador" value="<?php echo $empregador->id_empregador ?>">
            <?php endforeach; ?>
    <?php foreach ($dadosVaga as $row): ?>
<input type="hidden" name="id_vaga" value="<?php echo $row->id_dado_vaga ?>">
          <?php endforeach; ?>
          <input type="submit" name="button" value="Quero me Candidatar" class="btn btn-primary">
          </form>

				</div>
			</div>
		</footer>
    <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
	</body>
</html>
