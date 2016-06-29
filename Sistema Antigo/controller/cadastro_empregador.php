<?php

include_once '../model/Empregador.php';

$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data_cadastro = $_POST['data_cadastro'];

$empregador = new Empregador();
$empregador->setCnpj($cnpj);
$empregador->setNome($nome);
$empregador->setEndereco($endereco);
$empregador->setCidade($cidade);
$empregador->setEstado($estado);
$empregador->setTelefone($telefone);
$empregador->setEmail($email);
$empregador->setSenha($senha);
$empregador->setData_cadastro($data_cadastro);
$empregador->cadastrar();


header( 'Location: ../index.php' ) ;
