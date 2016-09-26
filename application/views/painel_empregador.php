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
                    <?php if ($this->input->get('aviso') == 1) { ?>
                        <div class="alert alert-success">
                            Vaga Cadastrada com sucesso!
                        </div>
                    <?php } ?>
                    <?php if ($this->input->get('aviso') == 2) { ?>
                        <div class="alert alert-success">
                            Empregador alterado com sucesso!
                        </div>
                    <?php } ?>
                    <?php if ($this->input->get('aviso') == 3) { ?>
                        <div class="alert alert-success">
                            Vaga alterada com sucesso!
                        </div>
                    <?php } ?>
                    <?php if ($this->input->get('aviso') == 4) { ?>
                        <div class="alert alert-success">
                            Curriculo excluido com sucesso!
                        </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong>Perfil</strong>
                                        </span>
                                        <span class="pull-right">
                                            <a href="<?= site_url('Empregador/editarPerfil/' . $dadosEmpregador->id_usuario) ?>" class="btn btn-primary btn-xs">
                                                Editar <i class="fa fa-wrench fa-fw"></i>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-md-12">
                                            <ul class="list-unstyled">
                                                <li><strong>Empresa: </strong><br><?php echo $dadosEmpregador->nome_usuario ?></li>
                                                <li><strong>E-mail: </strong><br><?php echo $dadosEmpregador->email ?></li>                                                
                                                <li><strong>Cidade: </strong><br><?php echo $dadosEmpregador->cidade ?></li>
                                                <li><strong>Estado: </strong><br><?php echo $dadosEmpregador->estado ?></li>
                                            </ul>
                                            <hr class="hidden-xs hidden-sm pn-divider">
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
                                            <strong>Todas as vagas cadastradas</strong>
                                        </span>
                                        <span class="pull-right">
                                            <a  href="<?= site_url('Vagas') ?>" class="btn btn-primary btn-xs">
                                                Adicionar nova vaga <i class="fa fa-plus fa-fw"></i>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover no-margin">
                                            <thead>
                                                <tr>
                                                    <th>Cargo</th>
                                                    <th width="100">Status</th>
                                                    <th width="80">Opções</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($vagas->result() as $vaga): ?>
                                                    <tr>
                                                        <td><?php echo $vaga->cargo; ?></td>
                                                        <td><?php echo $vaga->status; ?></td>
                                                        <td align="center">
                                                            <a  href="<?= site_url('Vagas/editarVaga/' . $vaga->id_dado_vaga . "/" . $dadosEmpregador->id_usuario) ?>" class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil fa-fw"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong>Curriculos selecionados</strong>
                                        </span>
                                        <span class="pull-right">
                                            <a  href="<?= site_url('PainelEmpregador/listaCurriculos') ?>" class="btn btn-primary btn-xs">
                                                Pesquisar curriculos <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover no-margin">
                                            <thead>
                                                <tr>
                                                    <th>Nome</th>
                                                    <th>Telefone </th>
                                                    <th>Vaga</th>
                                                    <th width="80">Opções</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                if(!empty($dadosVagaSelecionado)):
                                                foreach ($dadosVagaSelecionado as $dvs): ?>
                                                    <tr>
                                                        <td><?php echo $dvs->nome_usuario; ?></td>
                                                        <td><?php echo $dvs->telefone; ?></td>
                                                        <td><?php echo $dvs->cargo; ?></td>
                                                        <td align='center'>
                                                            <a href="<?= site_url('Vagas/excluirCandidato/' . $dvs->id_vaga_selecionada) ?>" 
                                                               class="btn btn-danger btn-xs"
                                                               onclick="return confirm('Têm certeza que deseja excluir este registro?')"
                                                               >
                                                                <i class="fa fa-trash fa-fw"></i>
                                                            </a>
                                                            <a href="<?= site_url('GeraPdf/criaPdfEmpregador/' . $dvs->id_academico) ?>" 
                                                               title="Imprimir curriculo"
                                                               class="btn btn-primary btn-xs">
                                                                <i class="fa fa-file-pdf-o fa-fw" aria-hidden="true"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; 
                                                else: 
                                                    echo "<td colspan='5' align='center'>Nenhum curriculo selecionado</td>";
                                                    
                                                endif;
                                                ?>
                                                    
                                            </tbody>
                                        </table>
                                    </div>
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