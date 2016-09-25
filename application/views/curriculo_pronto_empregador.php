<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Banco de Oportunidades</title>
        <link rel="icon" href="<?= base_url('assets/img/favicon.png') ?>">
<!--        <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" type="text/css">-->
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" type="text/css">
        <link rel="stylesheet" href="<?= base_url('assets/fonts/font-awesome-4.3.0/css/font-awesome.min.css') ?>" type="text/css">
        <style type="text/css">
            @page {
                margin: 10mm 5mm;
            }

            .break {
                page-break-inside: avoid;
            }
        </style>
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
                        <div class="col-md-12">

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <h2>Currículo vitae</h2>
                                    </div>
                                    <br>
                                    <ul class="list-unstyled">
                                        <li><b>Nome: </b><?php echo $dadosAcademico->nome_usuario ?></li>
                                        <li><b>E-mail: </b><?php echo $dadosAcademico->email ?></li>
                                        <li><b>Cidade: </b><?php echo $dadosAcademico->cidade ?></li>
                                        <li><b>Estado: </b><?php echo $dadosAcademico->estado ?></li>
                                        <li><b>Telefone: </b><?php echo $dadosAcademico->telefone ?></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel panel-default break">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong>Formação</strong>
                                        </span>
                                    </div>
                                    <br>
                                    <ul class="list-unstyled">
                                        <?php foreach ($dadosFormacao as $formacao): ?>
                                            <li><b>Curso: </b><?php echo $formacao->nome_curso ?></li>
                                            <li><b>Tipo: </b><?php echo $formacao->tipo ?></li>
                                            <li><b>escola: </b><?php echo $formacao->escola ?></li>
                                            <li><b>Início do curso: </b><?php echo $formacao->inicio ?></li>
                                            <li><b>Término do curso: </b><?php echo $formacao->termino ?></li><br>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel panel-default break">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong>Experiências Profissionais</strong>
                                        </span>
                                    </div>
                                    <br>
                                    <ul class="list-unstyled">
                                        <?php foreach ($dadosExperiencia as $exp): ?>
                                            <li><b>Ocupação: </b><?php echo $exp->nome_experiencia ?></li>
                                            <li><b>Empresa: </b><?php echo $exp->empresa ?></li>
                                            <li><b>Atividades: </b><?php echo $exp->atividade ?></li>
                                            <li><b>Início do trabalho: </b><?php echo $exp->inicio ?></li>
                                            <li><b>Término do trabalho: </b><?php echo $exp->termino ?></li><br>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="panel panel-default break">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong>Idiomas</strong>
                                        </span>
                                    </div>
                                    <br>
                                    <ul class="list-unstyled">
                                        <?php foreach ($dadosIdioma as $idioma): ?>
                                            <li><b>Idioma: </b><?php echo $idioma->idioma ?></li>
                                            <li><b>Nível: </b><?php echo $idioma->nivel ?></li>
                                        <?php endforeach; ?>
                                    </ul>
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
