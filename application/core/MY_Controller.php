<?php

class MY_ControllerLogado extends CI_Controller {

    function __construct() {
        parent::__construct();

        if (!$this->session->userdata('logadoEmpregador')) {
            redirect('/Login');
        }
    }
    
//    function confereAcademico(){
//        if (!$this->session->userdata('logadoAcademico')) {
//            redirect('/Login');
//        }
//    }

}
