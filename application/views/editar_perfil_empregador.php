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
                                <b>Usuário: <?php echo $dadosEmpregador->email ?></b> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?= site_url('PainelEmpregador/fechaSessao') ?>"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="usuario-content margim-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3>Empregador <small>Alterar dados</small></h3>
                                <?php echo validation_errors(); ?>
                                <br><br>
                                <?php if ($this->input->get('aviso') == 1) { ?>
                                    <div class="alert alert-success">
                                        Empregador Cadastrado com sucesso! Por favor faça login para usar o sistema!
                                    </div>
                                <?php } ?>
                                <form class="form-horizontal"  method="POST" action="<?= site_url('Empregador/cadastraEmpregador') ?>">
                                    <div class="form-group">
                                        <label for="cnpj" class="col-sm-2 control-label">CNPJ:</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control cnpj" id="cnpj" placeholder="Digite o CNPJ da empresa"  name="cnpj">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="empresa" class="col-sm-2 control-label">Empresa:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="empresa" placeholder="Digite o nome da empresa"  name="nome">
                                        </div>
                                    </div>    
                                    <div class="form-group">
                                        <label for="telefone" class="col-sm-2 control-label">Telefone:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control phone" id="nome" name = "telefone" placeholder="Digite seu telefone"  name="telefone">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="endereco" class="col-sm-2 control-label">Endereço:</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="nome" name = "endereco" placeholder="Digite seu endereço"  name="endereco">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="estado" class="col-sm-2 control-label">Estado  *</label>
                                        <div class="col-sm-4">
                                            <select name="estado" lang="pt" class="form-control" name = "estado">
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
                                        <label for="nome" class="col-sm-2 control-label">Cidade:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="nome"  placeholder="Digite seu cidade"  name="cidade" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email-cad" class="col-sm-2 control-label">E-mail:</label>
                                        <div class="col-sm-7">
                                            <input type="email" class="form-control" id="email-cad" placeholder="Digite o e-mail da empresa"  name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="senha" class="col-sm-2 control-label">Senha:</label>
                                        <div class="col-sm-3">
                                            <input type="password" class="form-control" id="senha" placeholder="Digite a senha"  name="senha">
                                        </div>
                                    </div>
                                    <input type="hidden" name="data_cadastro" value="<?php echo date('Y/m/d'); ?>"/>
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
                                            <button type="submit" class="btn btn-primary">Editar perfil</button>
                                        </div>
                                    </div>
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
            <script src="<?= base_url('assets/js/jquery.js') ?>"></script>
            <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
            <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
            <script src="<?= base_url('assets/js/jquery.mask.min.js') ?>"></script>
            <script type="text/javascript">
                $('.phone').mask('(00) 0000 - 0000');
                $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
            </script>
    </body>
</html>