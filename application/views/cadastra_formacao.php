<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
        <link rel="stylesheet" href="<?= base_url('assets/css/jquery-ui.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/jquery-ui.theme.css') ?>">
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
                                        <span class="pull-left">
                                            <strong>Formação Profissional
                                                <small class="text-muted">Adicione uma formação</small>
                                            </strong>
                                        </span>
                                        <span class="pull-right">
                                            <a class="btn btn-default btn-xs" href="<?= site_url('Painel_academico/') ?>"><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>
                                        </span>
                                    </div>

                                    <?php echo validation_errors(); ?>
                                    <?php if ($this->input->get('aviso') == 1) { ?>
                                        <div class="alert alert-success">
                                            Formação Cadastrada com sucesso!
                                        </div>
                                    <?php } ?>
                                    <?php if ($this->input->get('aviso') == 2) { ?>
                                        <?php echo validation_errors(); ?>
                                    <?php } ?>
                                    <form class="form-horizontal" action="<?= site_url('Painel_academico/salvaFormacao') ?>" method="post">
                                        <div class="form-group">
                                            <label for="salario" class="col-sm-2 control-label">Instituição  *</label>
                                            <div class="col-sm-6">
                                                <select name="instituicao" class="form-control">
                                                    <option value="UNOESC">UNOESC</option>
                                                    <option value="Outras Instituições">Outras Instituições</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nome" class="col-sm-2 control-label">Nome do curso</label>

                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nome" placeholder="Digite o nome do seu curso" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nome" class="col-sm-2 control-label">Tipo curso</label>

                                            <div class="col-sm-4">
                                                <select class="col-sm-12 form-control" name="tipo">
                                                    <option value="Graduação">Graduação</option>
                                                    <option value="Especialização/Pós-Graduação">Especialização/Pós-Graduação</option>
                                                    <option value="Mestrado">Mestrado</option>
                                                    <option value="Doutorado">Doutorado</option>                                                    
                                                    <option value="Outros">Outros</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="senha" class="col-sm-2 control-label">Instituição</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="escola" placeholder="Digite a instituição" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="email-cad" class="col-sm-2 control-label">Ano de início do curso</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control data" name="inicio" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="senha" class="col-sm-2 control-label">Ano de termino do curso</label>
                                            <div class="col-sm-2">
                                                <input type="text" class="form-control data" name="termino" placeholder="" required>
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
        <script src="<?= base_url('assets/js/jquery.mask.min.js') ?>"></script>
        <script type="text/javascript">
            $('.data').mask('0000');

        </script>
    </body>
</html>
