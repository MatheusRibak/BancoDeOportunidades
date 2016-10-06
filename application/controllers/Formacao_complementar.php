<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Formacao_complementar extends CI_Controller {

    public function index() {
        $this->load->view('cadastra_formacao_complementar');
    }

    public function carregaCadastraFormacaoComplementar() {
        $id_usuario = $this->session->userdata('id_usuario');
        $data = array(
            "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row()
        );
        $this->load->view('cadastra_formacao_complementar', $data);
    }

    public function salvaFormacaoComplementar() {
        $this->load->model('Formacao_complementar_model');
        $id_usuario = $this->session->userdata('id_usuario');

        $formacao_complementar = $this->input->post('formacao');
        $tipo = 'Formação complementar';

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('formacao', 'Formação Complementar', 'required|max_length[1000]');
        if ($this->form_validation->run() == FALSE) {
            $this->carregaCadastraFormacaoComplementar();
            return;
        } else {
            $this->Formacao_complementar_model->salvaFormacaoComplementar([
                "id_usuario" => $id_usuario,
                "tipo" => $tipo,
                "atividade" => $formacao_complementar
            ]);
            redirect('Formacao_complementar/carregaCadastraFormacaoComplementar/?aviso=2');
        }
    }

    public function carregaEditarFormacao($id_formacao) {
        $this->load->model('Formacao_complementar_model');
        $id_usuario = $this->session->userdata('id_usuario');
        $data = array(
            "dadosFormacao" => $this->Formacao_complementar_model->getFormacaoSozinha($id_formacao)->row(),
            "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row()
        );
        $this->load->view('edita_formacao_complementar', $data);
    }

    public function editarFormacaoComplementar() {
        $this->load->model('Formacao_complementar_model');
        $id_atividade = $this->input->post('id_atividade');
        $formacao = $this->input->post('formacao');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('formacao', 'Formação Complementar', 'required|max_length[1000]');
        if ($this->form_validation->run() == FALSE) {
            $this->carregaEditarFormacao();
            return;
        } else {
            $data = array(
                "atividade" => $formacao
            );

            $this->Formacao_complementar_model->editarFormacaoComplementar($id_atividade, $data);
            redirect('Painel_academico/index/?aviso=5');
        }
    }

}
