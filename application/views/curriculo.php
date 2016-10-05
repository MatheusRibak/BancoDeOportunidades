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
                    <div class="row">
                        <div class="col-md-3">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong><li class="fa fa-user"></li> Currículo</strong>
                                        </span>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-md-12">
                                            <strong>Nome: </strong><br> <?= $dadosAcademico->nome_usuario; ?>
                                            <br>
                                            <strong>Endereço: </strong> <br><?= $dadosAcademico->endereco; ?>
                                            <br>
                                            <strong>Cidade: </strong> <br><?= $dadosAcademico->cidade; ?>
                                            <br>
                                            <strong>Estado: </strong> <br><?= $dadosAcademico->estado; ?>
                                            <br>
                                            <strong>Telefone: </strong> <br><?= $dadosAcademico->telefone; ?>
                                            <br>
                                            <strong>E-mail: </strong> <br><?= $dadosAcademico->email; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong><li class="fa fa-user"></li> Vagas em aberto</strong>
                                        </span>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-md-12">
                                            <form action="<?= site_url('Empregador/selecionar/')?>" method="post">
                                                <div class="form-group">
                                                    <label for="vaga">Vaga</label>
                                                    <select name="id_dado_vaga" class="form-control " id="vaga" style="min-width:200px;">
                                                        <?php foreach ($vagas as $df): ?>                                            
                                                            <option value="<?= $df->id_dado_vaga; ?>"><?= $df->cargo; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <input type="hidden" value="<?= $dadosAcademico->id_usuario; ?>" name="id_academico" />
                                                    <input type="hidden" value="<?= $dadosEmpregador->id_usuario; ?>" name="id_empregador" />
                                                </div>
                                                <button type="submit" class="btn btn-success btn-sm"><li class="fa fa-check"></li> Selecionar currículo</button>
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
                                            <strong><i class="fa fa-graduation-cap" aria-hidden="true"></i> Formações</strong>
                                        </span>
                                        <span class="pull-right">
                                            <a class="btn btn-primary btn-xs" href="<?= site_url('GeraPdf/criaPdfEmpregador/' . $dadosAcademico->id_usuario) ?>"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Gerar pdf</a>
                                            <a class="btn btn-default btn-xs" href="<?= site_url('PainelEmpregador/listaCurriculos/') ?>"><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>
                                        </span>
                                    </div>
                                    <?php
                                    if (!empty($dadosFormacao)):
                                        foreach ($dadosFormacao as $df):
                                            ?>
                                            <strong>Curso: </strong> <?= $df->nome_curso; ?>
                                            <br>
                                            <strong>Tipo: </strong> <?= $df->tipo; ?>
                                            <br>
                                            <strong>Instituição: </strong> <?= $df->escola; ?>
                                            <br>
                                            <strong>Início: </strong> <?= $df->inicio; ?>
                                            <br>
                                            <strong>Termino: </strong> <?= $df->termino; ?>
                                            <hr>
                                            <?php
                                        endforeach;
                                    else:
                                        echo 'Nenhuma formação cadastrada';
                                    endif;
                                    ?>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong><i class="fa fa-briefcase" aria-hidden="true"></i> Experiências</strong>
                                        </span>
                                    </div>
                                    <?php
                                    if (!empty($dadosExperiencia)):
                                        foreach ($dadosExperiencia as $de):
                                            ?>              
                                            <strong>Área: </strong> <?= $de->nome_experiencia; ?>
                                            <br>
                                            <strong>Empresa: </strong> <?= $de->empresa; ?>
                                            <br>
                                            <strong>Atividades: </strong> <?= $de->atividade; ?>
                                            <br>
                                            <strong>Início: </strong> <?= $de->inicio; ?>
                                            <br>
                                            <strong>Termino: </strong> <?= $de->termino; ?>
                                            <br>
                                            <hr>
                                            <?php
                                        endforeach;
                                    else:
                                        echo 'Nenhuma experiência cadastrada';
                                    endif;
                                    ?>
                                </div>
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong>Idiomas</strong>
                                        </span>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover no-margin">
                                            <thead>
                                                <tr>
                                                    <th>Idioma</th>
                                                    <th>Nivel</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            if (!empty($dadosIdioma)):
                                                foreach ($dadosIdioma as $idioma):
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $idioma->idioma; ?></td>
                                                        <td><?php echo $idioma->nivel; ?></td>
                                                    </tr>
                                                    <?php
                                                endforeach;
                                            else:
                                                echo "<td colspan='5' align='center'>Nenhum idioma cadastrado!</td>";
                                            endif;
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong> LinkedIn | Lattes</strong>
                                        </span>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover no-margin">
                                            <thead>
                                                <tr>
                                                    <th>Endereço</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            if (!empty($dadosLattesLonkedId)):
                                                foreach ($dadosLattesLonkedId as $dl):
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $dl->endereco; ?></td>
                                                    </tr>
                                                    <?php
                                                endforeach;
                                            else:
                                                echo "<td colspan='1' align='center'>Nenhuma informação cadastrada!</td>";
                                            endif;
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong> Atividades Complementares</strong>
                                        </span>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover no-margin">
                                            <thead>
                                                <tr>
                                                    <th>Atividade Complementar</th>

                                                </tr>
                                            </thead>
                                            <?php
                                            if (!empty($dadosAtividadesComplementares)):
                                                foreach ($dadosAtividadesComplementares as $ac):
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $ac->atividade; ?></td>
                                                    </tr>
                                                    <?php
                                                endforeach;
                                            else:
                                                echo "<td colspan='1' align='center'>Nenhuma Atividade Complementar cadastrada!</td>";
                                            endif;
                                            ?>
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