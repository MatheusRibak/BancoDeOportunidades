<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$id_usuario = $this->session->userdata('id_usuario');
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
                                    <a href="<?= site_url('PainelEmpregador/carregaEditarSenha') ?>"><i class="fa fa-wrench fa-fw"></i> Trocar de senha</a>
                                </li>
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
                                            <strong>Cadastrar nova vaga</strong>
                                        </span>
                                        <span class="pull-right">
                                            <a class="btn btn-default btn-xs" href="<?= site_url('PainelEmpregador/') ?>"><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>
                                        </span>
                                    </div>

                                    <?php echo validation_errors(); ?>

                                    <form class="form-horizontal" method="post" action="<?= site_url('Vagas/cadastrarVaga/' . $id_usuario) ?>">
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label for="cargo" class="col-sm-2 control-label">Cargo *</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="cargo" id="cargo" placeholder="Cargo">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="salario" class="col-sm-2 control-label">Faixa Salarial  *</label>
                                            <div class="col-sm-6">
                                                <select name="salario" class="form-control">
                                                    <option value="Não Informado">Não Desejo Informar</option>
                                                    <option value="Até R$ 1.000,00">Até R$ 1.000,00</option>
                                                    <option value="A partir de R$ 1.000,00">A partir de R$ 1.000,00</option>
                                                    <option value="A partir de R$ 2.000,0">A partir de R$ 2.000,00</option>
                                                    <option value="A partir de R$ 3.000,00">A partir de R$ 3.000,00</option>
                                                    <option value="A partir de R$ 4.000,00">A partir de R$ 4.000,00</option>
                                                    <option value="A partir de R$ 5.000,00">A partir de R$ 5.000,00</option>
                                                    <option value="A partir de R$ 6.000,00">A partir de R$ 6.000,00</option>
                                                    <option value="A partir de R$ 7.000,00">A partir de R$ 7.000,00</option>
                                                    <option value="A partir de R$ 8.000,00">A partir de R$ 8.000,00</option>
                                                    <option value="A partir de R$ 9.000,00">A partir de R$ 9.000,00</option>
                                                    <option value="A partir de R$ 10.000,00">A partir de R$ 10.000,00</option>
                                                    <option value="A partir de R$ 15.000,00">A partir de R$ 15.000,00</option>
                                                    <option value="Acima de R$ 20.000,00">Acima de R$ 20.000,00</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="area" class="col-sm-2 control-label">Área</label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" name="area" id="area" placeholder="Área">
                                            </div>
                                        </div>
                                       <div class="form-group">
                                            <label for="nivel" class="col-sm-2 control-label">Nível</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="nivel">
                                                  <option value="Estagiário">Estagiário</option>
                                                  <option value="Operacional">Operacional</option>
                                                  <option value="Auxiliar">Auxiliar</option>
                                                  <option value="Assistente">Assistente</option>
                                                  <option value="Trainee">Trainee</option>
                                                  <option value="Analista">Analista</option>
                                                  <option value="Encarregado">Encarregado</option>
                                                  <option value="Supervisor">Supervisor</option>
                                                  <option value="Consultor">Consultor</option>
                                                  <option value="Especialista">Especialista</option>
                                                  <option value="Coordenador">Coordenador</option>
                                                  <option value="Gerente">Gerente</option>
                                                  <option value="Diretor">Diretor</option>
                                                  <option value="Não Informado">Não desejo informar</option>
                                                </select>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                            <label for="periodo" class="col-sm-2 control-label">Período</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="periodo">
                                                  <option value="A Combinar">A Combinar</option>
                                                  <option value="Matutino/Vespertino">Matutino/Vespertino</option>
                                                  <option value="Matutino">Matutino</option>
                                                  <option value="Vespertino">Vespertino</option>
                                                  <option value="Noturno">Noturno</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="atividades" class="col-sm-2 control-label">Atividades  *</label>
                                            <div class="col-sm-8">
                                                <textarea name="atividades" class="form-control" cols="70" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="requisitos" class="col-sm-2 control-label">Requisitos</label>
                                            <div class="col-sm-8">
                                                <textarea name="requisitos" class="form-control" cols="70" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="beneficios" class="col-sm-2 control-label">Beneficios</label>
                                            <div class="col-sm-8">
                                                <textarea name="beneficios" id ="beneficios" class="form-control" cols="70" rows="3"></textarea>
                                                <input type="hidden" name="data_cadastro" value="<?php echo date('Y/m/d'); ?>"/>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="observacoes" class="col-sm-2 control-label">Observações</label>
                                            <div class="col-sm-8">
                                                <textarea name="observacao" id ="observacao" class="form-control" cols="70" rows="3"></textarea>
                                               
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div  class="col-sm-2 control-label"></div>
                                            <div class="col-sm-8">
                                                * Dados obrigatórios
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-8">
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
        </div>

        <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
    </body>
</html>
