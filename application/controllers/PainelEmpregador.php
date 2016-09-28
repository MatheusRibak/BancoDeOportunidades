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
            "dadosVagaSelecionado" => $this->Curriculo_selecionado->todos($id_usuario)->result(),
             "candidato" => $this->Vaga_empregador->buscaCurriculosPorVaga($id_usuario)->result()
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
    
    public function carregaEditarSenha(){
      $id_usuario = $this->session->userdata('id_usuario');
      $data = array(
          "dadosUsuario" => $this->Usuario_model->getUsuario($id_usuario)->row()
      );
      $this->load->view('editar_senha_empregador', $data);
    }

    public function novaSenha(){
      $senha_atual =  md5($this->input->post('senha_atual'));
      $nova_senha =  md5($this->input->post('nova_senha'));
      $id_usuario = $this->session->userdata('id_usuario');
      $this->db->select('*')
      ->where('id_usuario', $id_usuario);
      $retorno =   $this->db->get('usuario')->result();

      $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
      $this->form_validation->set_rules('senha_atual', 'Senha Atual', 'required|max_length[120]');
      $this->form_validation->set_rules('nova_senha', 'Nova Senha', 'required|max_length[120]');

      if ($this->form_validation->run() == FALSE) {
          $this->carregaEditarSenha();
          return;
      }
      else {
        foreach ($retorno as $row) {

            if ($row->senha == $senha_atual) {

              $this->Usuario_model->editarSenha([
                  "senha" => $nova_senha
              ]);
              redirect('PainelEmpregador/carregaEditarSenha/?aviso=1');
            }
            else {
              redirect('PainelEmpregador/carregaEditarSenha/?aviso=2');
            }
        }
      }
    }
    
    
    public function fechaSessao() {
        $this->session->sess_destroy();
        redirect('Home');
    }

}
