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
                    <a href="index.php" class="navbar-brand">
                        <img src="<?= base_url('assets/img/favicon.png') ?>" alt="logo">
                    </a>
                    <a class="navbar-brand hidden-xs" href="<?= site_url('Home') ?>">Banco de Oportunidades</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Cadastre-se <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="<?= site_url('Academico') ?>"><i class="fa fa-graduation-cap fa-fw"></i> Acadêmico</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?= site_url('Empregador') ?>"><i class="fa fa-suitcase fa-fw"></i> Empregador</a>
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
                                            <form class="form" role="form" method="post" action="<?= site_url('Login/doLogin') ?>" id="login-nav">
                                                <?php if (isset($login_falhou) && $login_falhou == TRUE) { ?>
                                                    Usuário e/ou senha não encontrados!
                                                <?php } ?>
                                                <?php echo validation_errors(); ?>
                                                <div class="form-group input-group">
                                                    <label for="email-login" class="input-group-addon">
                                                        <i class="fa fa-envelope fa-fw"></i>
                                                    </label>
                                                    <input type="email" class="form-control" id="email-login" name="email" placeholder="E-mail" required>
                                                </div>
                                                <div class="form-group input-group">
                                                    <label for="senha" class="input-group-addon">
                                                        <i class="fa fa-lock fa-fw"></i>
                                                    </label>
                                                    <input type="password" class="form-control" id="senha-login" name="senha" placeholder="Senha" required>
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
                                Contato


                            </h3>
                          <p>
                            Nós envie o que achou do site, se encontrou algum erro, elogios, sugestões, entre outros.
                          </p>

                            <?php echo validation_errors(); ?>


                            <hr>
                            <form class="form-horizontal"  method="POST" action="<?= site_url('Sugestao/salvaMensagem') ?>" >
                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Nome:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nome" name = "nome" placeholder="Digite seu nome" required>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="cpf" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  placeholder="Digite o seu email"  name="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                   <label for="cpf" class="col-sm-2 control-label">Mensagem</label>
                                   <div class="col-sm-9">
                                      <textarea required name="mensagem" rows="7" cols="40" class="form-control" placeholder="Digite a sua mensagem..."></textarea>
                                   </div>
                               </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                                    </div>
                                </div>

                            </form>
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
            $('.cpf').mask('000.000.000-00', {reverse: true});
        </script>
    </body>
</html>
