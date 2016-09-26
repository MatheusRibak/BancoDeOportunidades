<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Academico extends CI_Controller {

    public function index() {
        $this->load->view('cadastro_academico');
    }

    public function carregaLogin() {
        $this->load->view('login_academico');
    }
    public function carregaSugestao(){
      $this->load->view('sugestao_nao_logado');
    }

    public function salvaMensagem(){

    }

    public function cadastrarAcademico() {
        $nome = $this->input->post('nome');
        $endereco = $this->input->post('endereco');
        $cpf = md5($this->input->post('cpf'));
        $cidade = $this->input->post('cidade');
        $estado = $this->input->post('estado');
        $email = $this->input->post('email');
        $telefone = $this->input->post('telefone');
        $senha = md5($this->input->post('senha'));
        $data_cadastro = $this->input->post('data_cadastro');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[120]');
        $this->form_validation->set_rules('endereco', 'Endereço', 'required|max_length[120]');
        $this->form_validation->set_rules('cidade', 'Cidade', 'required|max_length[120]');
        $this->form_validation->set_rules('estado', 'Estado', 'required|max_length[120]');
        $this->form_validation->set_rules('email', 'E-mail', 'required|max_length[120]');
        $this->form_validation->set_rules('telefone', 'Telefone', 'required|max_length[120]');
        $this->form_validation->set_rules('senha', 'Senha', 'required|max_length[120]');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
            return;
        }

        $this->db->select('email');
        $this->db->where('email', $this->input->post('email'));
        $retorno = $this->db->get('academico')->num_rows();
        //verifica se já existe um email igual cadastrado, caso exista vai mostrar a mensagem
        //caso não o cadastro será realizado
        if ($retorno > 0) {
            redirect('Academico/index/?aviso=2');
        } else {
            # code...
            $this->load->model('Academico_model');
            $this->Academico_model->cadastrarAcademico([
                "cnpj_cpf" =>$cpf,
                "nome" => $nome,
                "endereco" => $endereco,
                "cidade" => $cidade,
                "estado" => $estado,
                "email" => $email,
                "telefone" => $telefone,
                "senha" => $senha,
                "data_cadastro" => $data_cadastro
              //  "linkedin" => $linkedin,
              //  "lattes" => $lattess
            ]);
            redirect('Academico/index/?aviso=1');
        }
    }


}
