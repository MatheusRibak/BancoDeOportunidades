<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Banco de Oportunidades</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                    <a class="navbar-brand hidden-xs" href="<?= site_url('Home') ?>">Banco de Oportunidades</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Login <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="<?= site_url('Academico/carregaLogin') ?>"><i class="fa fa-graduation-cap fa-fw"></i> Sou acadêmico</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?= site_url('Login') ?>"><i class="fa fa-suitcase fa-fw"></i> Sou empregador</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="page-content">
            <div class="cadastro-content">
                <div class="container">
                    <div class="panel panel-default col-md-8 col-md-offset-2">
                        <div class="panel-body">
                            <h3>
                                Acadêmico
                                <small>Login</small>
                            </h3>       
                            <small class="text-right">
                                <a href="<?= site_url('Login') ?>">Oops! Não sou acadêmico!</a>
                            </small>
                            <?php if (isset($login_falhou) && $login_falhou == TRUE) { ?>
                                <div class="alert alert-danger text-center">
                                    Usuário e/ou senha não encontrados! 
                                </div>
                            <?php } ?>
                            <?php echo validation_errors(); ?>
                            <form class="form-horizontal"  method="POST" action="<?= site_url('Academico/loginAcademico') ?>" >

                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Login</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control"  name = "email" placeholder="Digite seu login" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Senha</label>
                                    <div class="col-sm-5">
                                        <input type="password" class="form-control"  name = "senha" placeholder="Digite sua senha" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i> Acessar o sistema</button>
                                    </div>
                                </div>
                                <input type="hidden" name="data_cadastro" value="<?php echo date('Y/m/d'); ?>"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-contrato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Termos e Condições</h4>
                    </div>
                    <div class="modal-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates optio odio id alias dolore fuga modi illum, corrupti veritatis beatae perferendis consequuntur, facilis deserunt!
                        Ex autem eum dignissimos fugit, vero! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro nulla animi ullam ipsum dolorem perferendis quam dolore similique sapiente quod
                        error iusto consequatur rerum natus neque dolorum provident, enim quas!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Aceitar</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
    </body>
</html>
