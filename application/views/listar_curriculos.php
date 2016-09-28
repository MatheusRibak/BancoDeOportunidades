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
                            Curriculo selecionado com sucesso !!!
                        </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong>Pesquisar curriculos</strong>
                                        </span>
                                        <span class="pull-right">
                                            <a class="btn btn-default btn-xs" href="<?= site_url('PainelEmpregador/') ?>"><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>
                                        </span>
                                    </div>
                                    <form class="form-inline" method="post" action="<?= site_url('PainelEmpregador/consulta/') ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control" style="min-width:700px;" id="area" name="search" placeholder="Procure por administração, caixa, contador ....">
                                        </div>
                                        <div class="form-group">
                                            <select name="tipo" class="form-control" style="min-width:100px;">
                                                <option value="formacao">Formação</option>
                                                <option value="experiencia">Experiência</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary"><li class="fa fa-search"></li> Pesquisar</button>
                                    </form>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong>Resultados</strong>
                                        </span>
                                    </div>
                                    <?php
                                    if (!empty($resultado)):
                                        foreach ($resultado as $r):
                                            ?>
                                            <blockquote>
                                                <p><?php echo $r->nome_usuario; ?></p>
                                                <span class="pull-right">
                                                    <a href="<?= site_url('Empregador/curriculo/' . $r->id_usuario) ?>" 
                                                       class="btn btn-info btn-xs" title="Visualizar o curriculo completo">
                                                        <i class="fa fa-eye" aria-hidden="true"></i> ver curriculo
                                                    </a>
                                                </span>
                                                <?php if ($tipo == "experiencia"): ?>
                                                    <footer><?php echo $r->nome_experiencia; ?></footer>
                                                    <footer><?php echo $r->id_usuario; ?></footer>                                                    
                                                    <footer><?php echo $r->atividade; ?></footer>
                                                <?php else: ?>
                                                    <footer><?php echo $r->nome_curso; ?></footer>
                                                    <footer><?php echo $r->nome_experiencia; ?></footer>
                                                    <footer><?php echo $r->atividade; ?></footer>
                                                <?php endif; ?>   
                                            </blockquote>
                                            <?php
                                        endforeach;
                                    else:
                                        echo "<blockquote>Seja objetivo em sua pesquisa</blockquote>";
                                    endif;
                                    ?>

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