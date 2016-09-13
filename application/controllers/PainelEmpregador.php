<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PainelEmpregador extends MY_ControllerLogado {

    public function index() {
        $this->load->model('Usuario_model');
        $this->load->model('Vaga_empregador');
        $this->load->model('Curriculo_selecionado');
        $id_usuario = $this->session->userdata('id_usuario');
        $id_usuario = (int) $id_usuario;

        //ARRAY COM TODAS AS VAGAS E DADOS DO EMPREGADOR
        $data = array(
            "vagas" => $this->Vaga_empregador->getVagas($id_usuario),
            "dadosEmpregador" => $this->Usuario_model->getUsuario($id_usuario)->row(),
            "dadosVagaSelecionado" => $this->Curriculo_selecionado->todos()
        );

        $this->load->view('painel_empregador', $data);
    }
    

    public function listaCurriculos() {
        $this->load->model('Usuario_model');

        $id_usuario = $this->session->userdata('id_usuario');
        $id_usuario = (int) $id_usuario;

        //ARRAY COM TODAS AS VAGAS E DADOS DO EMPREGADOR
        $data = array(
            "dadosEmpregador" => $this->Usuario_model->getUsuario($id_usuario)->row()
        );

        $this->load->view('listar_curriculos', $data);
    }

    public function consulta() {
        $this->load->model('Usuario_model');
        $this->load->model('Experiencia_model');
        $this->load->model('Formacao_model');

        $id_usuario = $this->session->userdata('id_usuario');
        $id_usuario = (int) $id_usuario;

        $search = $this->input->post('search');
        $tipo = $this->input->post('tipo');

        if ($tipo == 'formacao'):
            $data = array(
                "tipo" =>  $tipo,
                "resultado" => $this->Formacao_model->consulta($search),
                "dadosEmpregador" => $this->Usuario_model->getUsuario($id_usuario)->row()
            );
            $this->load->view('listar_curriculos', $data);
        else:
            $data = array(
                "tipo" =>  $tipo,
                "resultado" => $this->Experiencia_model->consulta($search),
                "dadosEmpregador" => $this->Usuario_model->getUsuario($id_usuario)->row()
            );
            $this->load->view('listar_curriculos', $data);
        endif;
    }
    
    
    public function fechaSessao() {
        $this->session->sess_destroy();
        redirect('Home');
    }

}
