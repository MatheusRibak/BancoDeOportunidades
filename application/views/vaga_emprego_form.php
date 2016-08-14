<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$idEmpregador = $this->session->userdata('idAdministrador');
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
        <nav class="navbar navbar-default navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand"> <img src="<?= base_url('assets/img/favicon.png') ?>" alt="logo"> </a>
                    <a class="navbar-brand hidden-xs" href="<?= site_url('PainelEmpregador') ?>">Banco de Oportunidades</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <b>Usuário:</b> <?php echo $dadosEmpregador->email ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?= site_url('PainelEmpregador/fechaSessao') ?>"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 
        <div class="usuario-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="page-header">
                                    <h1>Nova vaga de Emprego</h1>
                                </div>            
                                <legend>Dados Gerais</legend>

                                <?php echo validation_errors(); ?>

                                <form class="form-horizontal" method="post" action="<?= site_url('Vagas/cadastrarVaga/' . $idEmpregador) ?>">
                                    <div class="form-group">
                                        <label for="cargo" class="col-sm-2 control-label">Cargo:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Cargo">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="salario" class="col-sm-2 control-label">Faixa Salarial:</label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control" name="salario" id="salario" placeholder="Faixa Salarial">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="area" class="col-sm-2 control-label">Area:</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="area" id="area" placeholder="Area">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nivel" class="col-sm-2 control-label">Nível:</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="nivel" id="nivel" placeholder="Nível">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="periodo" class="col-sm-2 control-label">Período:</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" name="periodo" id="periodo" placeholder="Período">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="atividades" class="col-sm-2 control-label">Atividades:</label>
                                        <div class="col-sm-10">
                                            <textarea name="atividades" class="form-control" cols="70" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="requisitos" class="col-sm-2 control-label">Requisitos:</label>
                                        <div class="col-sm-10">
                                            <textarea name="requisitos" class="form-control" cols="70" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="beneficios" class="col-sm-2 control-label">Beneficios:</label>
                                        <div class="col-sm-10">
                                            <textarea name="beneficios" id ="beneficios" class="form-control" cols="70" rows="3"></textarea>
                                            <input type="hidden" name="data_cadastro" value="<?php echo date('Y/m/d'); ?>"/>
                                        </div>
                                    </div>     
                                    <div class="form-group">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check" aria-hidden="true"></i> Cadastrar nova vaga</button>
                                        </div>
                                    </div>
                                </form>
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