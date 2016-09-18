<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_academico extends MY_ControllerLogado {

    public function index() {
        $this->load->model('Usuario_model');
        $this->load->model('Formacao_model');
        $this->load->model('Experiencia_model');
        $this->load->model('Vaga_academico_model');
        $id_usuario = $this->session->userdata('id_usuario');
        $data = array(
            "vagas_candidatadas" => $this->Vaga_academico_model->getMinhasVagas($id_usuario)->result(),
            "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row(),
            "dadosFormacao" => $this->Formacao_model->getFormacao($id_usuario)->result(),
            "dadosExperiencia" => $this->Experiencia_model->getExpUsuario($id_usuario)->result()
        );
        $this->load->view('painel_academico', $data);
    }

    public function carregaEditPerfil() {
        $this->load->model('Usuario_model');
        $id_usuario = $this->session->userdata('id_usuario');
        $data = array(
            "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row()
        );
        $this->load->view('editar_perfil_academico', $data);
    }

    public function editarPerfil() {
        $nome = $this->input->post('nome');
        $endereco = $this->input->post('endereco');
        $cidade = $this->input->post('cidade');
        $estado = $this->input->post('estado');
        $email = $this->input->post('email');
        $telefone = $this->input->post('telefone');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[120]');
        $this->form_validation->set_rules('endereco', 'Endereço', 'required|max_length[120]');
        $this->form_validation->set_rules('cidade', 'Cidade', 'required|max_length[120]');
        $this->form_validation->set_rules('email', 'E-mail', 'required|max_length[120]');
        $this->form_validation->set_rules('telefone', 'Telefone', 'required|max_length[120]');

        if ($this->form_validation->run() == FALSE) {
            $this->carregaEditPerfil();
            return;
        }

        $this->load->model('Usuario_model');
        $this->Usuario_model->Editar([
            "nome_usuario" => $nome,
            "endereco" => $endereco,
            "cidade" => $cidade,
            "estado" => $estado,
            "email" => $email,
            "telefone" => $telefone,
        ]);
        redirect('Painel_academico/carregaEditPerfil/?aviso=1');
    }

    public function carregaFormacao() {
        $this->load->model('Usuario_model');
        $this->load->model('Formacao_model');
        $this->load->model('Experiencia_model');
        $id_usuario = $this->session->userdata('id_usuario');
        $data = array(
            "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row(),
            "dadosFormacao" => $this->Formacao_model->getFormacao($id_usuario)->result(),
            "dadosExperiencia" => $this->Experiencia_model->getExp($id_usuario)->result()
        );
        $this->load->view('cadastra_formacao', $data);
    }

    public function carregaExp() {
        $this->load->model('Usuario_model');
        $this->load->model('Formacao_model');
        $this->load->model('Experiencia_model');
        $id_usuario = $this->session->userdata('id_usuario');
        $data = array(
            "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row(),
            "dadosFormacao" => $this->Formacao_model->getFormacao($id_usuario)->result(),
            "dadosExperiencia" => $this->Experiencia_model->getExp($id_usuario)->result()
        );

        $this->load->view('cadastra_experiencia', $data);
    }

    public function salvaExp() {
        
        $inicioD = $this->input->post('inicio');
        $terminoD = $this->input->post('termino');
        $salvaInicio = implode("-", array_reverse(explode("/", $inicioD)));
        $salvaTermino = implode("-", array_reverse(explode("/", $terminoD)));
        
        $nome = $this->input->post('nome_experiencia');
        $empresa = $this->input->post('empresa');
        $inicio = $salvaInicio;
        $termino = $salvaTermino;
        $id_usuario = $this->session->userdata('id_usuario');
        $atividade = $this->input->post('atividade');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('nome', 'Ocupação', 'required|max_length[120]');
        $this->form_validation->set_rules('nome', 'Nome empresa', 'required|max_length[120]');
        $this->form_validation->set_rules('termino', 'termino', 'max_length[120]');
        $this->form_validation->set_rules('inicio', 'inicio', 'required|max_length[120]');
        $this->form_validation->set_rules('empresa', 'Empresa', 'required|max_length[120]');
        $this->form_validation->set_rules('atividade', 'atividade', 'required|max_length[120]');

        if ($this->form_validation->run() == FALSE) {
            $this->carregaExp();
            return;
        }

        $this->load->model('Experiencia_model');
        $this->Experiencia_model->salvaExp([
            "id_usuario" => $id_usuario,
            "nome_experiencia" => $nome,
            "inicio" => $inicio,
            "termino" => $termino,
            "empresa" => $empresa,
            "atividade" => $atividade
        ]);
        redirect('Painel_academico/carregaExp/?aviso=1');
    }

    public function salvaFormacao() {
        
        $inicioD = $this->input->post('inicio');
        $terminoD = $this->input->post('termino');
        $salvaInicio = implode("-", array_reverse(explode("/", $inicioD)));
        $salvaTermino = implode("-", array_reverse(explode("/", $terminoD)));
        
        $nome = $this->input->post('nome');
        $tipo = $this->input->post('tipo');
        $inicio = $salvaInicio;
        $termino = $salvaTermino;
        $escola = $this->input->post('escola');
        $id_usuario = $this->session->userdata('id_usuario');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[120]');
        $this->form_validation->set_rules('tipo', 'Tipo', 'required|max_length[120]');
        $this->form_validation->set_rules('termino', 'termino', 'required|max_length[120]');
        $this->form_validation->set_rules('inicio', 'inicio', 'required|max_length[120]');
        $this->form_validation->set_rules('escola', 'escola', 'required|max_length[120]');
        if ($this->form_validation->run() == FALSE) {
            redirect('Painel_academico/carregaFormacao/?aviso=2');
            return;
        }
        $this->load->model('Formacao_model');
        $this->Formacao_model->salvaFormacao([
            "id_usuario" => $id_usuario,
            "nome_curso" => $nome,
            "tipo" => $tipo,
            "inicio" => $inicio,
            "termino" => $termino,
            "escola" => $escola
        ]);
        redirect('Painel_academico/carregaFormacao/?aviso=1');
    }

    public function carregaBusca() {

        $id_usuario = $this->session->userdata('id_usuario');
        $data = array(
            "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row(),
        );
        $this->load->view('resultado_busca', $data);
    }

    function getFormacao($id_formacao) {
        $id_usuario = $this->session->userdata('id_usuario');
        $this->load->model('Formacao_model');
        $data = array(
            "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row(),
            "formacao" => $this->Formacao_model->buscaFormacao($id_formacao)->row()
        );

        $this->load->view('edita_formacao', $data);
    }

    function getExperiencia($id_experiencia) {
        $id_usuario = $this->session->userdata('id_usuario');
        $this->load->model('Experiencia_model');
        $data = array(
            "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row(),
            "experiencia" => $this->Experiencia_model->getExp($id_experiencia)->row()
        );
        $this->load->view('edita_experiencia', $data);
    }

    public function deslogar() {
        $this->session->sess_destroy();
        redirect('Home');
    }

}
