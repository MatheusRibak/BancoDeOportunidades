<?php

class Empregador_model extends CI_Model {

    //CADASTRAR EMPREGADOR
    function cadastrarEmpregador($data) {
        $this->db->insert("empregador", $data);
    }

}
