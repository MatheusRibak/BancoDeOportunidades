<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class PainelEmpregador extends MY_ControllerLogado {

    public function index() {      
        $this->load->model('Empregador_model');
        $this->load->model('Vaga_empregador');
        $idEmpregador = $this->session->userdata('idAdministrador');        
        $idEmpregador = (int) $idEmpregador;

        //ARRAY COM TODAS AS VAGAS E DADOS DO EMPREGADOR
        $data = array(
            "vagas" => $this->Vaga_empregador->getVagas($idEmpregador),
            "dadosEmpregador" => $this->Empregador_model->getEmpregador($idEmpregador)->row()
        );       
        
        $this->load->view('painel_empregador', $data);              
    }
    
    public function fechaSessao() {
        $this->session->sess_destroy();
        redirect('Home');        
    }

}
