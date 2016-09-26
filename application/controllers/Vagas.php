<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vagas extends CI_Controller {

    public function index() {  
        $this->load->model('Usuario_model');
        $id_usuario = $this->session->userdata('id_usuario');        
        $id_usuario = (int) $id_usuario;

        //ARRAY COM TODAS AS VAGAS
        $data = array(
            "dadosEmpregador" => $this->Usuario_model->getUsuario($id_usuario)->row()
        );
        $this->load->view('vaga_emprego_form', $data);
    }

    public function cadastrarVaga($id_usuario) {
        $id_usuario = (int) $id_usuario;
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
        $this->form_validation->set_rules('atividades', 'Atividades', 'required|max_length[1000]');
        $this->form_validation->set_rules('requisitos', 'Requisitos', 'required|max_length[1000]');
        $this->form_validation->set_rules('beneficios', 'Beneficios', 'required|max_length[1000]');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
            return;
        }

        $this->load->model('Vaga_empregador');
        $this->Vaga_empregador->cadastrarVaga([
            "id_usuario" => $id_usuario,
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

    public function editarVaga($id_dado_vaga) {
        $this->load->model('Vaga_empregador');   
        $this->load->model('Usuario_model');
        $id_usuario = $this->session->userdata('id_usuario');  
        $id_dado_vaga = (int) $id_dado_vaga;

        //ARRAY COM TODAS AS VAGAS E DADOS DO EMPREGADOR
        $data = array(
            "dadosEmpregador" => $this->Usuario_model->getUsuario($id_usuario)->row(),
            "dadosVaga" => $this->Vaga_empregador->getVaga($id_dado_vaga)->row()
        ); 
        $this->load->view('alterar_vaga_emprego_form', $data);        
    }
    
    public function excluirCandidato($id_vaga_selecionada){
        $this->load->model('Curriculo_selecionado');        
        $this->Curriculo_selecionado->deletarCurriculo($id_vaga_selecionada);
        redirect('/PainelEmpregador/?aviso=4');
        
    }
    
    public function execAlterarVaga($id_dado_vaga) {
        $this->load->model('Vaga_empregador');

        $id_dado_vaga = (int) $id_dado_vaga;
        $cargo = $this->input->post('cargo');
        $salario = $this->input->post('salario');
        $area = $this->input->post('area');
        $nivel = $this->input->post('nivel');
        $periodo = $this->input->post('periodo');
        $atividades = $this->input->post('atividades');
        $requisitos = $this->input->post('requisitos');
        $beneficios = $this->input->post('beneficios');
        $status = $this->input->post('status');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('cargo', 'Cargo', 'required|max_length[120]');
        $this->form_validation->set_rules('salario', 'Salario', 'required|max_length[120]');
        $this->form_validation->set_rules('area', 'Área', 'required|max_length[120]');
        $this->form_validation->set_rules('nivel', 'Nível', 'required|max_length[120]');
        $this->form_validation->set_rules('periodo', 'Período', 'required|max_length[120]');
        $this->form_validation->set_rules('atividades', 'Atividades', 'required|max_length[1000]');
        $this->form_validation->set_rules('requisitos', 'Requisitos', 'required|max_length[1000]');
        $this->form_validation->set_rules('beneficios', 'Beneficios', 'required|max_length[1000]');

        if ($this->form_validation->run() == FALSE) {
            $this->editarVaga($id_dado_vaga);
            return;
        }
        //Executar o update na base de dados
        $dados = array(
            "cargo" => $cargo,
            "salario" => $salario,
            "area" => $area,
            "nivel" => $nivel,
            "periodo" => $periodo,
            "atividades" => $atividades,
            "requisitos" => $requisitos,
            "beneficios" => $beneficios,
            "status" => $status
        );
        $this->Vaga_empregador->atualizaVaga($id_dado_vaga, $dados);
        redirect('/PainelEmpregador/?aviso=3');
    }
}
