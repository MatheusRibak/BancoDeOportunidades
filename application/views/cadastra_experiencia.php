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
						<b><?php echo $dadosAcademico->email ?></b> <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">


						<li>
							<a href="<?= base_url('Painel_academico/deslogar') ?>"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<div class="page-content">
	<div class="col-sm-12">
		<div class="col-sm-offset-2">
			<br><br>
			<a href="<?= base_url('Painel_academico/voltar') ?>">Voltar</a>
			<br>
		</div>
	</div>
	<div class="form-add-content">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="pn-heading">
								<span class="pull-left">
									<strong>Experiencia Profissional
										<small class="text-muted">Adicione a sua experiencia</small>
									</strong>
								</span>
							</div>
              <?php if ($this->input->get('aviso') == 1) { ?>
                  <div class="alert alert-success">
                    Experiencia Cadastrada com sucesso!
                  </div>
              <?php } ?>
							<form class="form-horizontal" action="<?= base_url('Painel_academico/salvaExp') ?>" method="post">
								<div class="form-group">
									<label for="nome" class="col-sm-2 control-label">Ocupação</label>

									<div class="col-sm-10">
										<input type="text" class="form-control" name="nome" placeholder="Digite a sua função" required>
									</div>
								</div>


                <div class="form-group">
									<label for="senha" class="col-sm-2 control-label">Nome da empresa</label>

									<div class="col-sm-10">
										<input type="text" class="form-control" name="empresa" placeholder="Digite a empresa" required>
									</div>
								</div>

								<div class="form-group">
									<label for="senha" class="col-sm-2 control-label">Atividades</label>

									<div class="col-sm-10">
										<input type="text" class="form-control" name="atividade" placeholder="Digite a sua atividade" required>
									</div>
								</div>

								<div class="form-group">
									<label for="email-cad" class="col-sm-2 control-label">Data de inicio do trabalho</label>

									<div class="col-sm-10">
										<input type="date" class="form-control" name="inicio"  required>
									</div>
								</div>

                <div class="form-group">
                  	<label for="senha" class="col-sm-2 control-label">Ainda trabalha na empresa?</label>
          				<div class="col-sm-10">
          					<input type="checkbox"> Sim
                    	<input type="checkbox" id="" value="" onclick="Habilitar(this,'termino')"> Não
          				</div>
          			</div>
                <div class="form-group">
                  	<label for="email-cad" class="col-sm-2 control-label">data de termino do emprego</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="termino" name="termino"  disabled="">
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
<script src="<?= base_url('assets/js/jquery.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/scripts.js') ?>"></script>
</body>

</html>
