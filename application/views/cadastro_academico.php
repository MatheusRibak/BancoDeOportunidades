<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Banco de Oportunidades</title>

        <link rel="icon" href="assets/img/favicon.png">
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="assets/fonts/font-awesome-4.3.0/css/font-awesome.min.css" type="text/css">
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
                        <img src="estilo/img/favicon.png" alt="logo">
                    </a>
                    <a class="navbar-brand hidden-xs" href="index.php">Banco de Oportunidades</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Cadastre-se <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="academico"><i class="fa fa-graduation-cap fa-fw"></i> Acadêmico</a></li>
                                <li class="divider"></li>
                                <li>
                                    <a href="empregador"><i class="fa fa-suitcase fa-fw"></i> Empregador</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <b>Login</b> <span class="caret"></span>
                            </a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li class="hidden" id="i-forgot-form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="">
                                                <div class="form-group input-group">
                                                    <label for="email-remember" class="input-group-addon">
                                                        <i class="fa fa-envelope fa-fw"></i>
                                                    </label>
                                                    <input type="email" class="form-control" id="email-remember" placeholder="E-mail cadastrado" required>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary" type="submit">Redefinir</button>
                                                    </span>
                                                </div>
                                                <div class="help-block text-center">
                                                    <p class="text-danger danger text-left">
                                                        Será feita a redefinição da sua senha e será enviada para o e-mail cadastrado.
                                                        <span class="text-muted">Lembrou da senha? <a class="pointer" id="i-remember">Login aqui.</a></span>
                                                    </p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li id="login-form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form class="form" role="form" method="GET"  id="login-nav">
                                                <div class="form-group input-group">
                                                    <label for="email-login" class="input-group-addon">
                                                        <i class="fa fa-envelope fa-fw"></i>
                                                    </label>
                                                    <input type="email" class="form-control" id="email-login" placeholder="E-mail" required>
                                                </div>
                                                <div class="form-group input-group">
                                                    <label for="senha-login" class="input-group-addon">
                                                        <i class="fa fa-lock fa-fw"></i>
                                                    </label>
                                                    <input type="password" class="form-control" id="senha-login" placeholder="Senha" required>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" id="remember-me">
                                                        <label for="remember-me" class="no-padding">Manter-me logado</label>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                                                </div>
                                                <div class="help-block text-center">
                                                    <a class="pointer" id="i-forgot">Esqueceu sua senha?</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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
                                <small>Cadastre-se, é gratuíto!</small>
                            </h3>
                            <small class="text-right">
                                <a href="cadastro_empregador">Oops! Não sou acadêmico!</a>
                            </small>
                            <hr>
                            <form class="form-horizontal"  method="POST" action="<?=base_url('cadastro_academico')?>" >
                               <input type="hidden" name="acao" value="inserir" />
                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Nome:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nome" name = "nome" placeholder="Digite seu nome completo" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Endereço:</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nome" name = "endereco" placeholder="Digite seu endereço" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Telefone:</label>

                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="nome" name = "telefone" placeholder="Digite seu telefone" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Cidade:</label>

                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="nome" name = "cidade" placeholder="Digite seu cidade" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="estado" class="col-sm-2 control-label">Estado  *</label>
                                    <div class="col-sm-4">
                                        <select name="estado" lang="pt" class="form-control" name = "estado" required="">
                                            <option value="">Selecione o Estado</option>
                                            <option value="AC">Acre</option>
                                            <option value="AL">Alagoas</option>
                                            <option value="AM">Amazonas</option>
                                            <option value="AP">Amapá</option>
                                            <option value="BA">Bahia</option>
                                            <option value="CE">Ceará</option>
                                            <option value="DF">Distrito Federal</option>
                                            <option value="ES">Espírito Santo</option>
                                            <option value="GO">Goiás</option>
                                            <option value="MA">Maranhão</option>
                                            <option value="MT">Mato Grosso</option>
                                            <option value="MS">Mato Grosso do Sul</option>
                                            <option value="MG">Minas Gerais</option>
                                            <option value="PA">Pará</option>
                                            <option value="PB">Paraíba</option>
                                            <option value="PR">Paraná</option>
                                            <option value="PE">Pernambuco</option>
                                            <option value="PI">Piauí</option>
                                            <option value="RJ">Rio de Janeiro</option>
                                            <option value="RN">Rio Grande do Norte</option>
                                            <option value="RO">Rondônia</option>
                                            <option value="RS">Rio Grande do Sul</option>
                                            <option value="RR">Roraima</option>
                                            <option value="SC">Santa Catarina</option>
                                            <option value="SE">Sergipe</option>
                                            <option value="SP">São Paulo</option>
                                            <option value="TO">Tocantins</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email-cad" class="col-sm-2 control-label">E-mail:</label>

                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name = "email" id="email-cad" placeholder="Digite seu e-mail" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="senha" class="col-sm-2 control-label">Senha:</label>

                                    <div class="col-sm-6">
                                        <input type="password" class="form-control" name = "senha" id="senha" placeholder="Digite sua senha" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" required> Aceito os
                                            </label>
                                            <a href="#" data-toggle="modal" data-target="#modal-contrato">Termos e Condições</a> do contrato.
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Cadastrar</button>
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
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>

</html>
