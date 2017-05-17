<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Experiencia extends CI_Controller {
    
     function getExperiencia($id_experiencia) {
        $id_usuario = $this->session->userdata('id_usuario');
        $data = array(
            "dadosAcademico" => $this->Usuario_model->getUsuario($id_usuario)->row(),
            "experiencia" => $this->Experiencia_model->getExp($id_experiencia)->row()
        );
        $this->load->view('edita_experiencia', $data);
    }

    public function salvaExpEditada() {

        $inicio = $this->input->post('inicio');
        $termino = $this->input->post('termino');
        $salvaInicio = implode("-", array_reverse(explode("/", $inicio)));
        $salvaTermino = implode("-", array_reverse(explode("/", $termino)));
        
        $data['nome_experiencia'] = $this->input->post('nome');
        $data['termino'] = $salvaTermino;
        $data['inicio'] = $salvaInicio;
        $data['empresa'] = $this->input->post('empresa');
        $data['atividade'] = $this->input->post('atividade');
        $id_experiencia = $this->input->post('id_experiencia');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('nome', 'Ocupação', 'required|max_length[155]');
        $this->form_validation->set_rules('termino', 'termino', 'max_length[120]');
        $this->form_validation->set_rules('inicio', 'inicio', 'required|max_length[120]');
        $this->form_validation->set_rules('empresa', 'Empresa', 'required|max_length[120]');
        $this->form_validation->set_rules('atividade', 'atividade', 'required|max_length[120]');

        if ($this->form_validation->run() == FALSE) {
            $this->getExperiencia($id_experiencia);
            return;
        } else {
            $this->Experiencia_model->editExp($data, $id_experiencia);

            redirect('Painel_academico/index/?aviso=3');
        }
    }

}
