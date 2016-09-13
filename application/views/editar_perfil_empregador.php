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
                    <a class="navbar-brand hidden-xs" href="<?= site_url('PainelEmpregador') ?>">Banco de Oportunidades</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">                                
                                <b>Usuário: </b><?php echo $dadosEmpregador->email ?> <span class="caret"></span>
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

        <div class="page-content">
            <div class="usuario-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong>Editar Perfil
                                                <small class="text-muted">Edite seus dados</small>
                                            </strong>
                                        </span>
                                        <span class="pull-right">
                                            <a class="btn btn-default btn-xs" href="<?= site_url('PainelEmpregador/') ?>"><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>
                                        </span>
                                    </div>  
                                    <?php echo validation_errors(); ?>
                                    <br><br>
                                    <?php if ($this->input->get('aviso') == 1) { ?>
                                        <div class="alert alert-success">
                                            Empregador Cadastrado com sucesso! Por favor faça login para usar o sistema!
                                        </div>
                                    <?php } ?>
                                    <form class="form-horizontal"  method="POST" action="<?= site_url('Empregador/execAlterarEmpregado/' . $dadosEmpregador->id_usuario) ?>">
                                        <div class="form-group">
                                            <label for="cnpj" class="col-sm-2 control-label">CNPJ:</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control cnpj" id="cnpj" value="<?= $dadosEmpregador->cnpj_cpf ?>" name="cnpj">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="empresa" class="col-sm-2 control-label">Empresa:</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="empresa"  value="<?= $dadosEmpregador->nome_usuario ?>"  name="nome">
                                            </div>
                                        </div>    
                                        <div class="form-group">
                                            <label for="telefone" class="col-sm-2 control-label">Telefone:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control phone" id="nome" name = "telefone" value="<?= $dadosEmpregador->telefone ?>"  name="telefone">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="endereco" class="col-sm-2 control-label">Endereço:</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" id="nome" name = "endereco" value="<?= $dadosEmpregador->endereco ?>"  name="endereco">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nome" class="col-sm-2 control-label">Cidade:</label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control" id="nome"  value="<?= $dadosEmpregador->cidade ?>"  name="cidade" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email-cad" class="col-sm-2 control-label">E-mail:</label>
                                            <div class="col-sm-7">
                                                <input type="email" class="form-control" id="email-cad" value="<?= $dadosEmpregador->email ?>"  name="email">
                                            </div>
                                        </div>
                                        <input type="hidden" name="data_cadastro" value="<?php echo date('Y/m/d'); ?>"/>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i> Salvar dados</button>
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
            <script src="<?= base_url('assets/js/jquery.mask.min.js') ?>"></script>
            <script type="text/javascript">
                $('.phone').mask('(00) 0000 - 0000');
                $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
            </script>
    </body>
</html>
