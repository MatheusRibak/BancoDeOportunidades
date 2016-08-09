<?php

class MY_ControllerLogado extends CI_Controller{

  function __construct(){
    parent::__construct();

      if(! $this->session->userdata('logadoEmpregador')){
        redirect('/Login');
      }
      
      if(! $this->session->userdata('logadoAcademico')){
        redirect('Academico/carregaLogin');
      }

  }
  
}