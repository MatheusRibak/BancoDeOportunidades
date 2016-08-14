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
        redirect('Home/index/?aviso=1');
    }

    public function editarPerfil($idEmpregador) {

        $this->load->model('Empregador_model');
        $idEmpregador = $this->session->userdata('idAdministrador');
        $idEmpregador = (int) $idEmpregador;

        //ARRAY COM TODAS AS VAGAS E DADOS DO EMPREGADOR
        $data = array(
            "dadosEmpregador" => $this->Empregador_model->getEmpregador($idEmpregador)->row()
        );
        $this->load->view('editar_perfil_empregador', $data);
    }

    public function execAlterarEmpregado($idEmpregador) {
        $this->load->model('Empregador_model');

        $idEmpregador = (int) $idEmpregador;
        $cnpj = $this->input->post('cnpj');
        $nome_empresa = $this->input->post('nome');
        $telefone = $this->input->post('telefone');
        $endereco = $this->input->post('endereco');
        $cidade = $this->input->post('cidade');
        $email = $this->input->post('email');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('cnpj', 'Cnpj', 'required|max_length[120]');
        $this->form_validation->set_rules('nome', 'Nome da empresa', 'required|max_length[120]');
        $this->form_validation->set_rules('endereco', 'Endereço', 'required|max_length[120]');
        $this->form_validation->set_rules('cidade', 'Cidade', 'required|max_length[120]');
        $this->form_validation->set_rules('email', 'E-mail', 'required|max_length[120]');
        $this->form_validation->set_rules('telefone', 'Telefone', 'required|max_length[120]');

        if ($this->form_validation->run() == FALSE) {
            $this->editarPerfil($idEmpregador);
            return;
        }
        //Executar o update na base de dados
        $dados = array(
            "cnpj" => $cnpj,
            "nome_empresa" => $nome_empresa,
            "telefone" => $telefone,
            "endereco" => $endereco,
            "cidade" => $cidade,
            "email" => $email
        );
        $this->Empregador_model->atualizaEmpregador($idEmpregador, $dados);
        redirect('/PainelEmpregador/?aviso=2');
    }

}
