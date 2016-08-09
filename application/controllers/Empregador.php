<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empregador extends CI_Controller {

    public function index() {
        $this->load->view('cadastro_empregador');
    }

    public function cadastraEmpregador() {
        $cnpj = $this->input->post('cnpj');
        $nome_empresa = $this->input->post('nome');
        $endereco = $this->input->post('endereco');
        $cidade = $this->input->post('cidade');
        $estado = $this->input->post('estado');
        $email = $this->input->post('email');
        $telefone = $this->input->post('telefone');
        $senha = md5($this->input->post('senha'));
        $data_cadastro = $this->input->post('data_cadastro');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('cnpj', 'Cnpj', 'required|max_length[120]');
        $this->form_validation->set_rules('nome', 'Nome da empresa', 'required|max_length[120]');
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

        $this->load->model('Empregador_model');
        $this->Empregador_model->cadastrarEmpregador([
            "nome_empresa" => $nome_empresa,
            "cnpj" => $cnpj,
            "endereco" => $endereco,
            "cidade" => $cidade,
            "estado" => $estado,
            "email" => $email,
            "telefone" => $telefone,
            "senha" => $senha,
            "data_cadastro" => $data_cadastro            
        ]);
        redirect('Empregador/index/?aviso=1');
    }
    
    

}
