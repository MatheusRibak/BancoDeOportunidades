<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Painel_academico extends CI_Controller {

    public function index() {
        $this->load->model('Academico_model');
        $this->load->model('Formacao_model');
        $this->load->model('Experiencia_model');
        $this->load->model('Vaga_academico_model');
        $id_academico = $this->session->userdata('id_academico');
        $data = array(
            "dadosAcademico" => $this->Academico_model->getAcademico($id_academico)->row(),
            "dadosFormacao" => $this->Formacao_model->getFormacao($id_academico)->result(),
            "dadosExperiencia" => $this->Experiencia_model->getExp($id_academico)->result(),
            "minhasVagas" => $this->Vaga_academico_model->getMinhasVagas($id_academico)
        );


        $this->load->view('painel_academico', $data);
    }

    public function carregaBusca(){
      $this->load->model('Academico_model');
      $this->load->model('Formacao_model');
      $this->load->model('Experiencia_model');
              $this->load->model('Vaga_academico_model');
      $id_academico = $this->session->userdata('id_academico');
      $data = array(
          "dadosAcademico" => $this->Academico_model->getAcademico($id_academico)->row(),
          "dadosFormacao" => $this->Formacao_model->getFormacao($id_academico)->result(),
          "dadosExperiencia" => $this->Experiencia_model->getExp($id_academico)->result(),
            "minhasVagas" => $this->Vaga_academico_model->getMinhasVagas($id_academico)
      );

      $data3 = 2;


      $this->load->view('busca', $data, $data3);
    }

    public function carregaFormacao() {
        $this->load->model('Academico_model');
        $this->load->model('Formacao_model');
        $this->load->model('Experiencia_model');
                $this->load->model('Vaga_academico_model');
        $id_academico = $this->session->userdata('id_academico');
        $data = array(
            "dadosAcademico" => $this->Academico_model->getAcademico($id_academico)->row(),
            "dadosFormacao" => $this->Formacao_model->getFormacao($id_academico)->result(),
            "dadosExperiencia" => $this->Experiencia_model->getExp($id_academico)->result(),
              "minhasVagas" => $this->Vaga_academico_model->getMinhasVagas($id_academico)
        );
        $this->load->view('cadastra_formacao', $data);
    }

    public function voltar() {
        $this->load->model('Academico_model');
        $this->load->model('Formacao_model');
        $this->load->model('Experiencia_model');
                $this->load->model('Vaga_academico_model');
        $id_academico = $this->session->userdata('id_academico');
        $data = array(
            "dadosAcademico" => $this->Academico_model->getAcademico($id_academico)->row(),
            "dadosFormacao" => $this->Formacao_model->getFormacao($id_academico)->result(),
            "dadosExperiencia" => $this->Experiencia_model->getExp($id_academico)->result(),
              "minhasVagas" => $this->Vaga_academico_model->getMinhasVagas($id_academico)
        );
        $this->load->view('painel_academico', $data);
    }



    public function carregaExp() {
        $this->load->model('Academico_model');
        $this->load->model('Formacao_model');
        $this->load->model('Experiencia_model');
                $this->load->model('Vaga_academico_model');
        $id_academico = $this->session->userdata('id_academico');
        $data = array(
            "dadosAcademico" => $this->Academico_model->getAcademico($id_academico)->row(),
            "dadosFormacao" => $this->Formacao_model->getFormacao($id_academico)->result(),
            "dadosExperiencia" => $this->Experiencia_model->getExp($id_academico)->result(),
              "minhasVagas" => $this->Vaga_academico_model->getMinhasVagas($id_academico)
        );

        $this->load->view('cadastra_experiencia', $data);
    }

    public function salvaExp() {
        $nome = $this->input->post('nome');
        $empresa = $this->input->post('empresa');
        $inicio = $this->input->post('inicio');
        $termino = $this->input->post('termino');
        $id_academico = $this->session->userdata('id_academico');
        $atividade = $this->input->post('atividade');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[120]');
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
            "id_academico" => $id_academico,
            "nome" => $nome,
            "inicio" => $inicio,
            "termino" => $termino,
            "empresa" => $empresa,
            "atividade" => $atividade
        ]);
        redirect('Painel_academico/carregaExp/?aviso=1');
    }

    public function salvaFormacao() {
        $nome = $this->input->post('nome');
        $tipo = $this->input->post('tipo');
        $inicio = $this->input->post('inicio');
        $termino = $this->input->post('termino');
        $escola = $this->input->post('escola');
        $id_academico = $this->session->userdata('id_academico');

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
            "id_academico" => $id_academico,
            "nome" => $nome,
            "tipo" => $tipo,
            "inicio" => $inicio,
            "termino" => $termino,
            "escola" => $escola
        ]);
        redirect('Painel_academico/carregaFormacao/?aviso=1');
    }

    public function carregaEditPerfil() {
        $id_academico = $this->session->userdata('id_academico');
        $data = array(
            "dadosAcademico" => $this->Academico_model->getAcademico($id_academico)->row()
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
        $senha = $this->input->post('senha');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[120]');
        $this->form_validation->set_rules('endereco', 'Endereço', 'required|max_length[120]');
        $this->form_validation->set_rules('cidade', 'Cidade', 'required|max_length[120]');
        $this->form_validation->set_rules('email', 'E-mail', 'required|max_length[120]');
        $this->form_validation->set_rules('telefone', 'Telefone', 'required|max_length[120]');



        if($senha == ''){
            if ($this->form_validation->run() == FALSE) {
            $this->carregaEditPerfil();
            return;
            }

            $this->Academico_model->Editar([
            "nome" => $nome,
            "endereco" => $endereco,
            "cidade" => $cidade,
            "estado" => $estado,
            "email" => $email,
            "telefone" => $telefone
            ]);
            $this->carregaEditPerfil();
            redirect('Painel_academico/carregaEditPerfil/?aviso=1');

            } else {

                  if ($this->form_validation->run() == FALSE) {
                  $this->carregaEditPerfil();
                  return;
            }

                $senha = md5($this->input->post('senha'));

                $this->load->model('Academico_model');
                $this->Academico_model->Editar([
                "nome" => $nome,
                "endereco" => $endereco,
                "cidade" => $cidade,
                "estado" => $estado,
                "email" => $email,
                "telefone" => $telefone,
                "senha" => $senha
                ]);
                redirect('Painel_academico/carregaEditPerfil/?aviso=1');

                }


    }

    function getExperiencia($id_experiencia){
      $id_academico = $this->session->userdata('id_academico');
      $this->load->model('Academico_model');
      $this->load->model('Formacao_model');
      $this->load->model('Experiencia_model');
      $this->load->model('Vaga_academico_model');
      $data = array(
          "dadosAcademico" => $this->Academico_model->getAcademico($id_academico)->row(),
          "experiencia" => $this->Academico_model->getExperiencia($id_experiencia)
      );

      $this->load->view('edita_experiencia', $data);
    }

    public function salvaExpEditada() {

      $this->load->model('Experiencia_model');
      $data['nome'] = $this->input->post('nome');
      $data['inicio'] = $this->input->post('inicio');
      $data['termino'] = $this->input->post('termino');
      $data['empresa'] = $this->input->post('empresa');
      $data['atividade'] = $this->input->post('atividade');
      $id_experiencia = $this->input->post('id_experiencia');

        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('nome', 'Ocupação', 'required|max_length[5]');
        $this->form_validation->set_rules('termino', 'termino', 'max_length[120]');
        $this->form_validation->set_rules('inicio', 'inicio', 'required|max_length[120]');
        $this->form_validation->set_rules('empresa', 'Empresa', 'required|max_length[120]');
        $this->form_validation->set_rules('atividade', 'atividade', 'required|max_length[120]');

        if ($this->form_validation->run() == FALSE) {
            $this->getExperiencia($id_experiencia);
            return;
        }

        else {
          $this->Experiencia_model->editExp($data, $id_experiencia);

          redirect('Painel_academico/index/?aviso=5');
        }




    }




    function getFormacao($id_formacao){
      $id_academico = $this->session->userdata('id_academico');
      $this->load->model('Academico_model');
      $this->load->model('Formacao_model');
      $this->load->model('Experiencia_model');
      $this->load->model('Vaga_academico_model');
      $data = array(
          "dadosAcademico" => $this->Academico_model->getAcademico($id_academico)->row(),
          "formacao" => $this->Academico_model->getFormacao($id_formacao)
      );

      $this->load->view('edita_formacao', $data);
    }

    public function salvaFormacaoEditada() {

      $this->load->model('Formacao_model');
      $data['nome'] = $this->input->post('nome');
      $data['tipo'] = $this->input->post('tipo');
      $data['termino'] = $this->input->post('termino');
      $data['inicio'] = $this->input->post('inicio');
      $data['escola'] = $this->input->post('escola');
      $id_formacao = $this->input->post('id_formacao');


      $id_academico = $this->session->userdata('id_academico');

      $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
      $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[120]');
      $this->form_validation->set_rules('tipo', 'Tipo', 'required|max_length[120]');
      $this->form_validation->set_rules('termino', 'termino', 'required|max_length[120]');
      $this->form_validation->set_rules('inicio', 'inicio', 'required|max_length[120]');
      $this->form_validation->set_rules('escola', 'escola', 'required|max_length[120]');

        if ($this->form_validation->run() == FALSE) {
            $this->getFormacao($id_formacao);
            return;
        }

        else {
          $this->Formacao_model->editFormacao($data, $id_formacao);

          redirect('Painel_academico/index/?aviso=4');
        }




    }


    function deslogar() {
        $this->session->sess_destroy();
        $this->load->view('index');
    }

}
