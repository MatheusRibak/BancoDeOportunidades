<?php

include_once '../abstract/Abstrata.php';
include_once '../iCRUD/iCRUD.php';

class Academico extends Abstrata implements iCRUD {
    
    private $id;
    private $nome;
    private $endereco;
    private $estado;
    private $cidade;
    private $email;
    private $telefone;
    private $senha;
    private $status;
    private $data_cadastro;
    
    function __construct() {
       
    }
    
        
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEndereco() {
        return $this->endereco;
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

    function getStatus() {
        return $this->status;
    }

    function getData_cadastro() {
        return $this->data_cadastro;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
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

    function setStatus($status) {
        $this->status = $status;
    }

    function setData_cadastro($data_cadastro) {
        $this->data_cadastro = $data_cadastro;
    }
    
    function getCidade() {
        return $this->cidade;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

        

    public function alterar() {
        
    }

    public function cadastrar() {
        $pdo = parent::getDB();
        
        try{
            parent::$tabela = "academico";
            parent::$campoTabela = "email";
            parent::$campoEscolhido = $this->getEmail();
            
            if($this->existeCadastro()):
            $this->setErro("<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>
                    alert ('Este cliente já existe, certifique-se você já não a cadastrou !!!')</SCRIPT>");
            else:
                $cadastrar = $pdo->prepare("INSERT INTO academico(nome, email, senha, telefone, endereco, estado, cidade, data_cadastro) VALUES(:nome, :email, :senha, :telefone, :endereco, :estado, :cidade, :data_cadastro)");
                $cadastrar->bindValue(":nome", $this->getNome());
                $cadastrar->bindValue(":email", $this->getEmail());
                $cadastrar->bindValue(":senha", $this->getSenha());
                $cadastrar->bindValue(":telefone", $this->getTelefone());
                $cadastrar->bindValue(":endereco", $this->getEndereco());
                $cadastrar->bindValue(":estado", $this->getEstado());
                $cadastrar->bindValue(":cidade", $this->getCidade());
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

    public function deletar() {
        
    }

    public function listar() {
        
    }

}
