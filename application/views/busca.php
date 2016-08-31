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


                        <div class="col-sm-12">
                          <?php if ($this->input->get('aviso') == 5) { ?>
                              <div class="alert alert-danger">
                                  Você já se cadastrou a essa vaga...
                              </div>
                          <?php } ?>
                          <?php if ($this->input->get('aviso') == 4) { ?>
                              <div class="alert alert-success">
                                  Parabéns você se candidatou a vaga com sucesso!!!
                              </div>
                          <?php } ?>
                        </div>
                        <div class="col-sm-12">

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong>Pesquisar Vagas</strong>
                                        </span>
                                        <br><br>

<div class="row">
  <div class="col-sm-12">
    <form class="" action="<?= site_url('Vaga_academico/getVagas') ?>" method="post">
      <input type="text" name="input_busca" value="" class="form-control"> <br>
<input type="submit" name="name" value="Pesquisar Vagas" class="btn btn-primary">
    </form>

  </div>


</div>
  <br>
<div class="row">
  <div class="col-sm-3">
    <select class="form-control" name="">
      <option value="option">Area</option>
    </select>
  </div>
  <div class="col-sm-3">
    <select class="form-control" name="">
      <option value="option">Nivel</option>
    </select>
  </div>
  <div class="col-sm-3">
  <input type="submit" name="name" value="Pesquisar Vagas" class="btn btn-primary">
  </div>
</div>
                                    </div>

                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="pn-heading">
                                        <span class="pull-left">
                                            <strong>Resultados</strong>
                                        </span>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover no-margin">
                                            <thead>
                                                <tr>
                                                    <th>Cargo</th>
                                                    <th>Área</th>
                                                    <th>Salario</th>
                                                    <th>Atividades</th>
                                                    <th>Opções</th>
                                                </tr>
                                            </thead>
                                            <tbody id="myTable">






                                                  <td colspan='5' align = 'center'>
                                                  <div >
                                                    Você ainda não pesquisou nada...
                                                  </div>
                                                  </td>

                                            </tbody>
                                        </table>
                                    </div>

                            </div>
                            <td colspan="4" align = "center">

                            </td>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
        <script src="<?= base_url('assets/js/paginacao.js') ?>"></script>
    </body>
</html>
