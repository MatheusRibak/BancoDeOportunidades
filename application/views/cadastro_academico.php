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
            <div class="usuario-content">
                <div class="container">
                    <div class="panel panel-default col-md-8 col-md-offset-2">
                        <div class="panel-body">
                            <h3>
                                Acadêmico
                                <small>Cadastre-se, é gratuíto!</small>

                            </h3>
                            <?php echo validation_errors(); ?>
                            <?php if ($this->input->get('aviso') == 1) { ?>
                                <div class="alert alert-success">
                                    Academico Cadastrado com sucesso! Por favor faça login para usar o sistema!
                                </div>
                            <?php } ?>
                            <?php if ($this->input->get('aviso') == 2) { ?>
                                <div class="alert alert-danger">
                                    E-mail já está cadastrado no sistema! Tente colocar outro e-mail, ou verifique se você já não é cadastrado!
                                </div>
                            <?php } ?>
                            <small class="text-right">
                                <a href="<?= site_url('Empregador') ?>">Oops! Não sou acadêmico!</a>
                            </small>
                            <hr>
                            <form class="form-horizontal"  method="POST" action="<?= site_url('Usuario/cadastraUsuario') ?>" >
                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Nome:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nome" name = "nome" placeholder="Digite seu nome completo" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cpf" class="col-sm-2 control-label">CPF:</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control cpf" id="cpf" placeholder="Digite o seu cpf"  name="cnpj_cpf">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Endereço:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="nome" name = "endereco" placeholder="Digite seu endereço" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Telefone:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control phone" id="nome" name = "telefone" placeholder="Digite seu telefone" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-sm-2 control-label">Cidade:</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="nome" name = "cidade" placeholder="Digite seu cidade" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="estado" class="col-sm-2 control-label">Estado  *</label>
                                    <div class="col-sm-3">
                                        <select name="estado" lang="pt" class="form-control" name = "estado">
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
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" name = "email" id="email-cad" placeholder="Digite seu e-mail" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="senha" class="col-sm-2 control-label">Senha:</label>
                                    <div class="col-sm-4">
                                        <input type="password" class="form-control" name = "senha" id="senha" placeholder="Digite sua senha" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" > Aceito os
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
                                <?php $nivel = "ACADEMICO"; ?>
                                <input type="hidden" name="data_cadastro" value="<?php echo date('Y/m/d'); ?>"/>
                                <input type="hidden" name="nivel" value="<?php echo $nivel; ?>"/>
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
                        <strong>TERMOS E CONDIÇÕES DO BANCO DE OPORTUNIDADES</strong><br>
                        Ao fazer uso do sistema de Banco de Oportunidades da UNOESC você, usuário, estará manifestando sua total e plena concordância com as restrições, exigências e advertências abaixo descritas, que disciplinam o seu uso.
                        CONTEÚDO E POLÍTICA DE USO DO SISTEMA DE BANCO DE OPORTUNIDADES DA EMPRESA JÚNIOR EXPRESSÃO UNIVERSITÁRIA UNOESC – XANXERÊ-SC.<br>
                        1. Este banco de profissionais tem por objetivo intermediar a relação entre profissionais disponíveis no mercado e aqueles que queiram contratá-los, seja como empregado, seja para execução de serviços temporários ou autônomos.
                        <br>
                        2. ‘
                        <br>
                        3. O cadastro de currículos é gratuito, e ficará ativado no site por tempo indeterminado, ou até que o usuário desative seu currículo por meio de seu login de acesso.
                        <br>
                        4. O usuário declara conhecimento que este é um serviço aberto e que seus dados estarão disponíveis na internet para consulta por qualquer pessoa, não apenas empregadores. A ACIC não se responsabiliza pelo uso que possa ser feito dos dados constantes dos cadastros. CASO NÃO QUEIRA QUE SEUS DADOS SEJAM DISPONIBILIZADOS NA INTERNET, NÃO SE CADASTRE.
                        <br><br>RESPONSABILIDADES<br>
                       <br>
                        5.Todas as informações enviadas pelos candidatos e empregadores são de sua inteira responsabilidade. A Empresa Júnior Expressão Universitária se resguarda no direito de não autorizar ou excluir os cadastros que contenham expressões injuriosas, agressivas e/ou impróprias ou que não possuem dados cadastro de formação na instituição UNOESC.
                        <br>
                        6. A Empresa Júnior Expressão Universitária não garante e não se responsabiliza por quaisquer perdas, danos, expectativas de ganhos, receitas e benefícios ou quaisquer outros prejuízos que resultem da utilização das informações contidas no site.
                        <br>
                        7. Os contatos e as negociações entre os empregadores ou clientes e os profissionais cadastrados neste serviço são de exclusiva responsabilidade das partes. A Empresa Júnior Expressão Universitária não se responsabiliza por quaisquer danos ou prejuízos que os usuários venham a sofrer.
                        <br><br>ADVERTÊNCIAS<br>
                        <br>
                        8. Este é meramente um serviço de intermediação. A Empresa Júnior Expressão Universitária não endossa ou abona nenhuma empresa, cliente ou profissional cadastrado neste serviço.
                        <br>
                        9. Caso os profissionais tenham dúvidas a respeito da idoneidade, legalidade e/ou correção de um empregador ou cliente ou de uma alguma atitude deles, ou caso um empregador ou cliente tenha dúvidas quanto à idoneidade, legalidade e/ou capacitação de um profissional, essas dúvidas terão de ser dirimidas entre as partes ou nos foros apropriados, sem nenhuma intervenção ou responsabilização da Empresa Júnior Expressão Universitária.
                        <br>
                        10. Empresa Júnior Expressão Universitária se reserva o direito de modificar parcialmente ou totalmente os termos acima, sem qualquer aviso prévio.
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
