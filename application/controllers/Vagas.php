<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vagas extends CI_Controller {

    public function index() {  
        $this->load->model('Empregador_model');
        $idEmpregador = $this->session->userdata('idAdministrador');        
        $idEmpregador = (int) $idEmpregador;

        //ARRAY COM TODAS AS VAGAS
        $data = array(
            "dadosEmpregador" => $this->Empregador_model->getEmpregador($idEmpregador)->row()
        );
        $this->load->view('vaga_emprego_form', $data);
    }

    public function cadastrarVaga($idEmpregador) {
        $idEmpregador = (int) $idEmpregador;
        $cargo = $this->input->post('cargo');
        $salario = $this->input->post('salario');
        $area = $this->input->post('area');
        $nivel = $this->input->post('nivel');
        $periodo = $this->input->post('periodo');
        $atividades = $this->input->post('atividades');
        $requisitos = $this->input->post('requisitos');
        $beneficios = $this->input->post('beneficios');
        $dataCadastro = $this->input->post('data_cadastro');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('cargo', 'Cargo', 'required|max_length[120]');
        $this->form_validation->set_rules('salario', 'Salario', 'required|max_length[120]');
        $this->form_validation->set_rules('area', 'Área', 'required|max_length[120]');
        $this->form_validation->set_rules('nivel', 'Nível', 'required|max_length[120]');
        $this->form_validation->set_rules('periodo', 'Período', 'required|max_length[120]');
        $this->form_validation->set_rules('atividades', 'Atividades', 'required|max_length[320]');
        $this->form_validation->set_rules('requisitos', 'Requisitos', 'required|max_length[320]');
        $this->form_validation->set_rules('beneficios', 'Beneficios', 'required|max_length[320]');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
            return;
        }

        $this->load->model('Vaga_empregador');
        $this->Vaga_empregador->cadastrarVaga([
            "id_empregador" => $idEmpregador,
            "cargo" => $cargo,
            "salario" => $salario,
            "area" => $area,
            "nivel" => $nivel,
            "periodo" => $periodo,
            "atividades" => $atividades,
            "requisitos" => $requisitos,
            "beneficios" => $beneficios,
            "data_cadastro" => $dataCadastro
        ]);
        redirect('PainelEmpregador/index/?aviso=1');
    }

}
