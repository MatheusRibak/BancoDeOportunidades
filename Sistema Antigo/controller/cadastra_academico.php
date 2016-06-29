<?php

include_once '../model/Academico.php';

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data_cadastro = $_POST['data_cadastro'];

$academico = new Academico();
$academico->setNome($nome);
$academico->setEndereco($endereco);
$academico->setCidade($cidade);
$academico->setEstado($estado);
$academico->setTelefone($telefone);
$academico->setEmail($email);
$academico->setSenha($senha);
$academico->setData_cadastro($data_cadastro);
$academico->cadastrar();


header( 'Location: ../index.php' ) ;






