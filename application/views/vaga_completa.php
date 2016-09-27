<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Banco de Oportunidades</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">     
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
                                    <a href="<?= site_url('Painel_academico/carregaEditarSenha') ?>"><i class="fa fa-wrench fa-fw"></i> Trocar de senha</a>
                                </li>
                                <li>
                                    <a href="<?= site_url('Painel_academico/deslogar') ?>"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
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
                                    <div class="row">
                                        <div class="col-xs-6 col-md-12">
                                            <ul class="list-unstyled">
                                                <li><strong> <i class="fa fa-suitcase"></i> Empregador:</strong><br> <?php echo $dadosVaga->nome_usuario; ?><br></li>
                                                <li><strong> <i class="fa fa-envelope" aria-hidden="true"></i> E-mail:</strong><br> <?php echo $dadosVaga->email; ?><br></li>
                                                <li><strong> <i class="fa fa-phone" aria-hidden="true"></i> Telefone:</strong><br> <?php echo $dadosVaga->telefone; ?><br></li>
                                            </ul>
                                            <hr class="hidden-xs hidden-sm pn-divider">
                                            <form action="<?= site_url('Vaga_academico/cadastraCandidato/') ?>" method="post">
                                                <div class="form-group">
                                                    <input type="hidden" value="<?= $dadosAcademico->id_usuario; ?>" name="id_academico" />
                                                    <input type="hidden" value="<?= $dadosVaga->id_dado_vaga; ?>" name="id_vaga" />
                                                </div>
                                                <button type="submit" class="btn btn-success btn-sm"><li class="fa fa-check"></li> Candidatar a está vaga</button>
                                            </form>
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
                                            <strong>Descrição da vaga</strong>
                                        </span>
                                        <span class="pull-right">
                                            <a href="<?= site_url('Painel_academico/index') ?>" class="btn btn-default btn-xs">
                                                <i class="fa fa-chevron-left"></i> Voltar 
                                            </a>
                                        </span>
                                    </div>
                                    
                                    <strong> <i class="fa fa-star"></i> Faixa Salarial:</strong> <?php echo $dadosVaga->salario; ?><br>
                                    <br>

                                    <strong><i class="fa fa-th-list"></i> Requisitos:</strong><br><?php echo $dadosVaga->requisitos; ?><br>
                                    <strong><i class="fa fa-user"></i> Atividades Profissionais:</strong><br><?php echo $dadosVaga->atividades; ?><br>
                                    <strong><i class="fa fa-suitcase"></i> Área:</strong><br><?php echo $dadosVaga->area; ?> </br>
                                    <br>

                                    <strong><i class="fa fa-street-view"></i> Local da Vaga:</strong><br><?php echo $dadosVaga->cidade; ?> </br>
                                    <strong><i class="fa fa-calendar"></i> Período:</strong><br><?php echo $dadosVaga->periodo; ?><br>
                                    <br>

                                    <strong><i class="fa fa-check"></i> Benefícios da vaga de emprego:</strong><br><?php echo $dadosVaga->beneficios; ?><br>

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
