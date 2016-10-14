<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Empregador extends CI_Controller {

    public function index() {
        $this->load->view('cadastro_empregador');
    }

    public function cadastraEmpregador() {
        $cnpj = md5($this->input->post('cnpj'));
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
            "cnpj_cpf" => $cnpj,
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

    public function editarPerfil($id_usuario) {

        $this->load->model('Empregador_model');
        $id_usuario = $this->session->userdata('id_usuario');
        $id_usuario = (int) $id_usuario;

        //ARRAY COM TODAS AS VAGAS E DADOS DO EMPREGADOR
        $data = array(
            "dadosEmpregador" => $this->Empregador_model->getEmpregador($id_usuario)->row()
        );
        $this->load->view('editar_perfil_empregador', $data);
    }

    public function execAlterarEmpregado($id_usuario) {
        $this->load->model('Empregador_model');

        $id_usuario = (int) $id_usuario;
        $cnpj = $this->input->post('cnpj');
        $nome_empresa = $this->input->post('nome');
        $telefone = $this->input->post('telefone');
        $endereco = $this->input->post('endereco');
        $estado = $this->input->post('estado');
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
            $this->editarPerfil($id_usuario);
            return;
        }
        //Executar o update na base de dados
        $dados = array(
            "cnpj_cpf" => $cnpj,
            "nome_usuario" => $nome_empresa,
            "telefone" => $telefone,
            "endereco" => $endereco,
            "cidade" => $cidade,
            "estado"=>$estado,
            "email" => $email
        );
        $this->Empregador_model->atualizaEmpregador($id_usuario, $dados);
        redirect('/PainelEmpregador/?aviso=2');
    }

    
    public function curriculo($idAcademico){
        $this->load->model('Usuario_model');
        $this->load->model('Empregador_model');
        $this->load->model('Formacao_model');
        $this->load->model('Experiencia_model');
        $this->load->model('Vaga_empregador');
        $this->load->model('Idioma_model');
        $this->load->model('linkedIdLattes_model');
        $this->load->model('Formacao_complementar_model');
        $id_usuario = $this->session->userdata('id_usuario');
        $id_usuario = (int) $id_usuario;
        $idAcademico = (int) $idAcademico;
        

        //ARRAY COM TODAS AS VAGAS E DADOS DO EMPREGADOR
        $data = array(
            "dadosEmpregador" => $this->Empregador_model->getEmpregador($id_usuario)->row(),
            "dadosAcademico" => $this->Usuario_model->getUsuario($idAcademico)->row(),
            "dadosFormacao" => $this->Formacao_model->todos($idAcademico)->result(),
            "dadosExperiencia" => $this->Experiencia_model->getExpAcademico($idAcademico)->result(),
            "vagas" => $this->Vaga_empregador->getVagasAtivas($id_usuario)->result(),
            "dadosIdioma" => $this->Idioma_model->getIdiomas($idAcademico)->result(),
            "dadosLattesLonkedId" => $this->linkedIdLattes_model->getLinkedIdLattes($idAcademico)->result(),
            "dadosAtividadesComplementares" =>$this->Academico_model->getAtividadeEmpregador($idAcademico)->result(),
            "dadosFormacaoComplementares" => $this->Formacao_complementar_model->getFormacaoComplementarEmpregador($idAcademico)->result()
        );
        $this->load->view('curriculo', $data);
    }
    
    public function selecionar() {
        $this->load->model('Curriculo_selecionado');
        $idAcademico = $this->input->post('id_academico');
        $id_usuario = $this->input->post('id_empregador');
        $idDadoVaga = $this->input->post('id_dado_vaga');
        $data = date('Y/m/d');
        //Executar o update na base de dados
        $dados = array(
            "id_academico" => $idAcademico,
            "id_empregador" => $id_usuario,
            "id_dado_vaga" => $idDadoVaga,
            "data_cadastro" => $data
        );
        $this->Curriculo_selecionado->cadastrarCurriculoSelecionado($dados);
        redirect('/PainelEmpregador/listaCurriculos/?aviso=1');
    }
}
