<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro_academico extends CI_Controller {

        public function __construct() {
            parent::__construct();
        }


	public function index(){
            $dados = array();
            $this->load->model('Academico', '', TRUE);

            if($this->input->post('acao') == 'inserir'){
                $this->Academico->nome = $this->input->post('nome');
                $this->Academico->endereco = $this->input->post('endereco');
								$this->Academico->telefone = $this->input->post('telefone');
								$this->Academico->estado = $this->input->post('estado');
								$this->Academico->cidade = $this->input->post('cidade');
								$this->Academico->email = $this->input->post('email');
								$this->Academico->senha = $this->input->post('senha');
								$this->Academico->data_cadastro = $this->input->post('data_cadastro');
								$this->Academico->status = 'ATIVO';
                if($this->Academico->inserir()){
                    $dados['msg'] = 'Academico cadastrado com sucesso!';
                }
                else{
                    $dados['msg'] = 'Erro ao cadastrar novo academico, caso o erro persista contate o administrador!';
                }
            }

            $this->load->view('cadastro_academico', $dados);
	}
}
