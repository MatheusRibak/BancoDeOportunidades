<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Formacao extends CI_Controller {

    public function salvaFormacaoEditada() {

        $this->load->model('Formacao_model');
        //RECEBENDO DATAS
        $inicio = $this->input->post('inicio');
        $termino = $this->input->post('termino');
        $salvaInicio = implode("-", array_reverse(explode("/", $inicio)));
        $salvaTermino = implode("-", array_reverse(explode("/", $termino)));

        $data['instituicao'] = $this->input->post('instituicao');
        $data['nome_curso'] = $this->input->post('nome');
        $data['tipo'] = $this->input->post('tipo');
        $data['termino'] = $salvaTermino;
        $data['inicio'] = $salvaInicio;
        $data['escola'] = $this->input->post('escola');
        $id_formacao = $this->input->post('id_formacao');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[120]');
        $this->form_validation->set_rules('tipo', 'Tipo', 'required|max_length[120]');
        $this->form_validation->set_rules('termino', 'termino', 'required|max_length[120]');
        $this->form_validation->set_rules('inicio', 'inicio', 'required|max_length[120]');
        $this->form_validation->set_rules('escola', 'escola', 'required|max_length[120]');

        if ($this->form_validation->run() == FALSE) {
            $this->getFormacao($id_formacao);
            return;
        } else {
            $this->Formacao_model->editFormacao($data, $id_formacao);
            redirect('Painel_academico/index/?aviso=2');
        }
    }

}
