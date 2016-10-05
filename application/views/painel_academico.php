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
                    <?php if ($this->input->get('aviso') == 1) { ?>
                        <div class="alert alert-success">
                            Excluido com sucesso!
                        </div>
                    <?php } ?>
                    <?php if ($this->input->get('aviso') == 2) { ?>
                        <div class="alert alert-success">
                            Dados da formação alterado com sucesso!
                        </div>
                    <?php } ?>
                    <?php if ($this->input->get('aviso') == 3) { ?>
                        <div class="alert alert-success">
                            Dados da experiência alterado com sucesso!
                        </div>
                    <?php } ?>
                    <?php if ($this->input->get('aviso') == 4) { ?>
                        <div class="alert alert-success">
                            Dados referente ao idioma alterados com sucesso!
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
                                            <a href="<?= site_url('Painel_academico/carregaEditPerfil') ?>" class="btn btn-primary btn-xs">
                                                Editar <i class="fa fa-wrench fa-fw"></i>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 col-md-12">
                                            <ul class="list-unstyled">
                                                <li><b>Nome: </b><br><?php echo $dadosAcademico->nome_usuario ?></li>
                                                <li><b>E-mail: </b><br><?php echo $dadosAcademico->email ?></li>
                                                <li><b>Cidade: </b><br><?php echo $dadosAcademico->cidade ?></li>
                                                <li><b>Estado: </b><br><?php echo $dadosAcademico->estado ?></li>
                                            </ul>
                                            <hr class="hidden-xs hidden-sm pn-divider">
                                        </div>
                                        <div class="col-xs-6 col-md-12">
                                            <a href="<?= site_url('GeraPdf/criaPdf') ?>">Exportar para .PDF</a>
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
                                            <strong>Vagas que estou candidatado</strong>
                                        </span>
                                        <span class="pull-right">
                                            <a href="<?= site_url('Painel_academico/carregaBusca') ?>" class="btn btn-primary btn-xs">
                                                Pesquisar vagas <i class="fa fa-search fa-fw"></i>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover no-margin">
                                            <thead>
                                                <tr>
                                                    <th>Empresa</th>
                                                    <th>Cargo</th>
                                                    <th>Atividades</th>
                                                    <th>Status</th>
                                                    <th width='80'>Opções</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (!empty($vagas_candidatadas)):
                                                    foreach ($vagas_candidatadas as $vaga):
                                                        ?>
                                                        <tr>
                                                            <td><?= $vaga->nome_usuario; ?></td>
                                                            <td><?= $vaga->cargo; ?></td>
                                                            <td><?= $vaga->atividades; ?></td>
                                                            <td><?= $vaga->status; ?></td>
                                                            <td align='center'>
                                                                <a href="<?= site_url('Vaga_academico/excluir/' . $vaga->id_vaga) ?>"
                                                                   class="btn btn-danger btn-xs"
                                                                   onclick="return confirm('Têm certeza que deseja excluir este registro?')"
                                                                   >
                                                                    <i class="fa fa-trash fa-fw"></i>
                                                                </a>
                                                                <a href="<?= site_url('Vaga_academico/vagaCompleta/' . $vaga->id_dado_vaga) ?>" 
                                                                   class="btn btn-primary btn-xs" title="Visualizar o vaga completa">
                                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    endforeach;
                                                else:
                                                    echo "<td colspan='5' align='center'>Nenhum vaga candidatada</td>";
                                                endif;
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong>Formação</strong>
                                        </span>

                                        <span class="pull-right">
                                            <a href="<?= site_url('Painel_academico/carregaFormacao') ?>" class="btn btn-primary btn-xs">
                                                Adicionar nova formação <i class="fa fa-plus fa-fw"></i>
                                            </a>
                                        </span>

                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover no-margin">
                                            <thead>
                                                <tr>
                                                    <th>Curso</th>
                                                    <th>Tipo</th>
                                                    <th>Instituição</th>
                                                    <th width='80'>Opções</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if (!empty($dadosFormacao)):
                                                    foreach ($dadosFormacao as $formacao):
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $formacao->nome_curso; ?></td>
                                                            <td><?php echo $formacao->tipo; ?></td>
                                                            <td><?php echo $formacao->escola; ?></td>
                                                            <td align='center'>
                                                                <a  href="<?= site_url('Painel_academico/getFormacao/' . $formacao->id_formacao) ?>" class="btn btn-primary btn-xs">
                                                                    <i class="fa fa-pencil fa-fw"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                    endforeach;
                                                else:
                                                    echo "<td colspan='5' align='center'>Nenhum formação cadastrada!</td>";
                                                endif;
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong>Experiências Profissionais</strong>
                                        </span>
                                        <span class="pull-right">
                                            <a href="<?= site_url('Painel_academico/carregaExp') ?>" class="btn btn-primary btn-xs">
                                                Adicionar nova experiência <i class="fa fa-plus fa-fw"></i>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover no-margin">
                                            <thead>
                                                <tr>
                                                    <th>Ocupação</th>
                                                    <th>Empresa</th>
                                                    <th>Atividades</th>
                                                    <th width='80'>Opções</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            if (!empty($dadosExperiencia)):
                                                foreach ($dadosExperiencia as $exp):
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $exp->nome_experiencia; ?></td>
                                                        <td><?php echo $exp->empresa; ?></td>
                                                        <td><?php echo $exp->atividade; ?></td>
                                                        <td align='center'>
                                                            <a  href="<?= site_url('Painel_academico/getExperiencia/' . $exp->id_experiencia) ?>" class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil fa-fw"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                endforeach;
                                            else:
                                                echo "<td colspan='5' align='center'>Nenhum experiência cadastrada!</td>";
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
                                            <strong>Idiomas</strong>
                                        </span>
                                        <span class="pull-right">
                                            <a href="<?= site_url('Idioma') ?>" class="btn btn-primary btn-xs">
                                                Adicionar novos Idiomas <i class="fa fa-plus fa-fw"></i>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover no-margin">
                                            <thead>
                                                <tr>
                                                    <th>Idioma</th>
                                                    <th>Nivel</th>

                                                    <th width='80'>Opções</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            if (!empty($dadosIdioma)):
                                                foreach ($dadosIdioma as $idioma):
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $idioma->idioma; ?></td>
                                                        <td><?php echo $idioma->nivel; ?></td>

                                                        <td align='center'>
                                                            <a  href="<?= site_url('Idioma/carregaEditarIdioma/' . $idioma->id_idioma) ?>" class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil fa-fw"></i>
                                                            </a>
                                                        </td>
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
                                        <span class="pull-right">
                                            <a href="<?= site_url('Idioma/carregaLinkedIdLattes/') ?>" class="btn btn-primary btn-xs">
                                                LinkedIn | Lattes <i class="fa fa-plus fa-fw"></i>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover no-margin">
                                            <thead>
                                                <tr>
                                                    <th>Endereço</th>
                                                    <th width='60'>Opções</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            if (!empty($dadosLattesLonkedId)):
                                                foreach ($dadosLattesLonkedId as $dl):
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $dl->endereco; ?></td>
                                                        <td align='center'>
                                                            <a  href="<?= site_url('Idioma/carregaEditarLattes/' . $dl->id_obs) ?>" class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil fa-fw"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                endforeach;
                                            else:
                                                echo "<td colspan='2' align='center'>Nenhuma informação cadastrada!</td>";
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
                                        <span class="pull-right">
                                            <a href="<?= site_url('Painel_academico/carregaCadastraAtividades') ?>" class="btn btn-primary btn-xs">
                                                Adicionar <i class="fa fa-plus fa-fw"></i>
                                            </a>
                                        </span>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover no-margin">
                                            <thead>
                                                <tr>
                                                    <th>Atividade Complementar</th>
                                                    <th width='60'>
                                                        Opções
                                                    </th>

                                                </tr>
                                            </thead>
                                            <?php
                                            if (!empty($dadosAtividadesComplementares)):
                                                foreach ($dadosAtividadesComplementares as $ac):
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $ac->atividade; ?></td>
                                                        <td align='center'>
                                                            <a  href="<?= site_url('Painel_academico/carregaEditarAtividade/' . $ac->id_atividades) ?>" class="btn btn-primary btn-xs">
                                                                <i class="fa fa-pencil fa-fw"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                endforeach;
                                            else:
                                                echo "<td colspan='2' align='center'>Nenhuma Atividade Complementar cadastrada!</td>";
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
        <script src = "<?= base_url('assets/js/jquery.js') ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
    </body>
</html>
