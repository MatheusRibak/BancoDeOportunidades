<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Academico extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('cadastro_academico');
    }

    public function carregaLogin(){
      $this->load->view('login_academico');
    }

    public function carregaFormacao(){
      $this->load->view('cadastra_formacao');
    }

    public function carregaExp(){

      $this->load->view('cadastra_experiencia');
    }

  public function Salvar(){
    $nome = $this->input->post('nome');
    $endereco = $this->input->post('endereco');
    $cidade = $this->input->post('cidade');
    $estado = $this->input->post('estado');
    $email = $this->input->post('email');
    $telefone = $this->input->post('telefone');
    $senha = md5($this->input->post('senha'));
    $data_cadastro = $this->input->post('data_cadastro');

    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[120]');
    $this->form_validation->set_rules('endereco', 'Endereço', 'required|max_length[120]');
    $this->form_validation->set_rules('cidade', 'Cidade', 'required|max_length[120]');
    $this->form_validation->set_rules('estado', 'Estado', 'required|max_length[120]');
    $this->form_validation->set_rules('email', 'E-mail', 'required|max_length[120]');
    $this->form_validation->set_rules('telefone', 'Telefone', 'required|max_length[120]');
    $this->form_validation->set_rules('senha', 'Senha', 'required|max_length[120]');

    if ($this->form_validation->run() == FALSE) {
        $this->index();
        return;
    }

    $this->load->model('Academico_model');
    $this->Academico_model->Salvar([
        "nome" => $nome,
        "endereco" => $endereco,
        "cidade" => $cidade,
        "estado" => $estado,
        "email" => $email,
        "telefone" => $telefone,
        "senha" => $senha,
        "data_cadastro" => $data_cadastro
    ]);
    redirect('Academico/index/?aviso=1');
}

  public function salvaFormacao(){
    $nome = $this->input->post('nome');
    $tipo = $this->input->post('tipo');
    $inicio = $this->input->post('inicio');
    $termino = $this->input->post('termino');
    $escola = $this->input->post('escola');
    $id_academico =  $this->session->userdata('id_academico');

    $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
    $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[120]');
    $this->form_validation->set_rules('tipo', 'Tipo', 'required|max_length[5]');
    $this->form_validation->set_rules('termino', 'termino', 'required|max_length[120]');
    $this->form_validation->set_rules('inicio', 'inicio', 'required|max_length[120]');
    $this->form_validation->set_rules('escola', 'escola', 'required|max_length[120]');
    if ($this->form_validation->run() == FALSE) {
        $this->carregaFormacao();
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
    redirect('Academico/carregaFormacao/?aviso=1');
  }

  public function salvaExp(){
    $nome = $this->input->post('nome');
    $empresa = $this->input->post('empresa');
    $inicio = $this->input->post('inicio');
    $termino = $this->input->post('termino');
    $id_academico =  $this->session->userdata('id_academico');
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
    redirect('Academico/carregaExp/?aviso=1');
  }

public function loginAcademico(){

				//pega os dados vindos da view de login
				$academico_email = $this->input->post('email');
				$academico_senha = $this->input->post('senha');

        //fazendo a validação do formulario de login
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
        $this->form_validation->set_rules('email', 'email', 'required|max_length[120]');
        $this->form_validation->set_rules('senha', 'Senha', 'required|max_length[120]');

        if ($this->form_validation->run() == FALSE) {
            $this->carregaLogin();
            return;
        }

				//seleciona os dados na tabela de entidade
				$this->db
				->select("*")
				->from("academico")
				->where("email", $academico_email)
				->where("senha", md5($academico_senha));

				$dadosAcademico = $this->db->get();

				//se tiver um igual vai fazer o login e passar o id
				if($dadosAcademico->num_rows() > 0){
				$academico = $dadosAcademico->row();

				$this->session->set_userdata('logado', TRUE);
				$this->session->set_userdata('id_academico', $academico->id_academico);

        $this->load->view('painel_academico');

				} else {
					//se não tiver login e senha certo vai cair aqui
					$teste['mensagem'] = 'Login ou senha incorretos';


				}

				}

}
