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
                                <b>Usuário: </b><?php echo $dadosEmpregador->email ?> <span class="caret"></span>
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
        <div class="usuario-content">
            <div class="container">
                <div class="panel panel-default">
                    <div class="panel-body">                        
                        <div class="pn-heading">
                            <span class="pull-left">
                                <strong>Editar Vaga
                                    <small class="text-muted">Edite os dados desta vaga</small>
                                </strong>
                            </span>
                            <span class="pull-right">
                                <a class="btn btn-default btn-xs" href="<?= site_url('PainelEmpregador/') ?>"><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>
                            </span>
                        </div> 
                        <br><br>

                        <?php echo validation_errors(); ?>

                        <form class="form-horizontal" method="post" action="<?= site_url('Vagas/execAlterarVaga/' . $dadosVaga->id_dado_vaga) ?>">
                            <div class="form-group">
                                <label for="cargo" class="col-sm-2 control-label">Cargo:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="cargo" id="cargo" value="<?= $dadosVaga->cargo ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="salario" class="col-sm-2 control-label">Faixa Salarial:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="salario" id="salario" value="<?= $dadosVaga->salario ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="area" class="col-sm-2 control-label">Área:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="area" id="area" value="<?= $dadosVaga->area ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nivel" class="col-sm-2 control-label">Nível:</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="nivel" id="nivel" value="<?= $dadosVaga->nivel ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="periodo" class="col-sm-2 control-label">Período:</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="periodo" id="periodo" value="<?= $dadosVaga->periodo ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="atividades" class="col-sm-2 control-label">Atividades:</label>
                                <div class="col-sm-9">
                                    <textarea name="atividades" class="form-control" cols="70" rows="3">
                                        <?= $dadosVaga->atividades ?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="requisitos" class="col-sm-2 control-label">Requisitos:</label>
                                <div class="col-sm-9">
                                    <textarea name="requisitos" class="form-control" cols="70" rows="5">
                                        <?= $dadosVaga->requisitos ?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="beneficios" class="col-sm-2 control-label">Benefícios:</label>
                                <div class="col-sm-9">
                                    <textarea name="beneficios" id ="beneficios" class="form-control" cols="70" rows="3">
                                        <?= $dadosVaga->beneficios ?>
                                    </textarea>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="beneficios" class="col-sm-2 control-label">Observações:</label>
                                <div class="col-sm-9">
                                    <textarea name="observacao" id ="observacao" class="form-control" cols="70" rows="3">
                                        <?= $dadosVaga->observacao ?>
                                    </textarea>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="status" class="col-sm-2 control-label">Status:</label>
                                <div class="col-sm-3">
                                    <select name="status" id='status' class="form-control">
                                        <option name="ATIVO">ATIVO</option>
                                        <option name="INATIVO">INATIVO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i> Alterar dados vaga</button>
                                </div>
                            </div>                   
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
        <script type="text/javascript">
            $('#status').val('<?= $dadosVaga->status ?>');
        </script>
    </body>
</html>