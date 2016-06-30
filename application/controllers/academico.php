<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Academico extends CI_Controller {

        public function __construct() {
            parent::__construct();
        }


	public function index(){
    		$this->load->view('cadastro_academico');
	}

  




  public function Salvar(){
          $dados = array();


          $this->db->select('email');
          $this->db->where('email', $this->input->post('email'));
          $retorno = $this->db->get('academico')->num_rows();

          if($retorno > 0 ){
            echo "<SCRIPT LANGUAGE='JavaScript' TYPE='text/javascript'>
                    alert ('Este cliente já existe, certifique-se você já não a cadastrou !!!')</SCRIPT>";
            $this->load->view('cadastro_academico');
                      } else {

            $this->Academico_model->nome = $this->input->post('nome');
            $this->Academico_model->endereco = $this->input->post('endereco');
            $this->Academico_model->telefone = $this->input->post('telefone');
            $this->Academico_model->estado = $this->input->post('estado');
            $this->Academico_model->cidade = $this->input->post('cidade');
            $this->Academico_model->email = $this->input->post('email');
            $this->Academico_model->senha = $this->input->post('senha');
            $this->Academico_model->data_cadastro = $this->input->post('data_cadastro');
            $this->Academico_model->status = 'ATIVO';
            if($this->Academico_model->Salvar()){
                $dados['msg'] = 'Academico cadastrado com sucesso!';
            }
            else{
                $dados['msg'] = 'Erro ao cadastrar novo academico, caso o erro persista contate o administrador!';
            }

        $this->load->view('home', $dados);

           }




  }


}
