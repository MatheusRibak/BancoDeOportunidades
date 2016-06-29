<?php

include_once '../abstract/Abstrata.php';
include_once '../iCRUD/iCRUD.php';


class Empregador extends Abstrata implements iCRUD {

    private $id;
    private $cnpj;
    private $nome;
    private $endereco;
    private $cidade;
    private $estado;
    private $email;
    private $telefone;
    private $senha;
    private $data_cadastro;
    private $status;

    function __construct(){

    }


    function getId() {
        return $this->id;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getNome() {
        return $this->nome;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getSenha() {
        return $this->senha;
    }

    function getData_cadastro() {
        return $this->data_cadatro;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setData_cadastro($data_cadastro) {
        $this->data_cadatro = $data_cadastro;
    }

    function setStatus($status) {
        $this->status = $status;
    }


    public function alterar() {

    }

    public function deletar() {

    }

    public function listar() {

    }

    public function cadastrar() {

      $pdo = parent::getDB();

      try{
          parent::$tabela = "empregador";
          parent::$campoTabela = "email";
          parent::$campoEscolhido = $this->getEmail();

          if($this->existeCadastro()):
          $this->setErro("<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>
                  alert ('Este cliente já existe, certifique-se você já não a cadastrou !!!')</SCRIPT>");
          else:
              $cadastrar = $pdo->prepare("INSERT INTO empregador(cnpj, nome, endereco, cidade, estado, email, telefone, senha, data_cadastro) VALUES(:cnpj, :nome, :endereco, :cidade, :estado, :email, :telefone, :senha, :data_cadastro)");
              $cadastrar->bindValue(":cnpj", $this->getCnpj());
              $cadastrar->bindValue(":nome", $this->getNome());
              $cadastrar->bindValue(":endereco", $this->getEndereco());
              $cadastrar->bindValue(":cidade", $this->getCidade());
              $cadastrar->bindValue(":estado", $this->getEstado());
              $cadastrar->bindValue(":email", $this->getEmail());
              $cadastrar->bindValue(":telefone", $this->getTelefone());
              $cadastrar->bindValue(":senha", $this->getSenha());
              $cadastrar->bindValue(":data_cadastro", $this->getData_cadastro());
              $cadastrar->execute();

              if($cadastrar->rowCount() == 1):
                  return true;
              else:
                  echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>
                  alert ('Um erro ocorreu, por favor tente novamente se persistir contate o administrador !!!')</SCRIPT>";
              endif;

         endif;
      } catch (PDOException $e) {
          echo "Erro: " .$e->getMessage();
      }

    }

}
