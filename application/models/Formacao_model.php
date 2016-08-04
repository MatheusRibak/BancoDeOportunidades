<?php

class Formacao_model extends CI_Model {

    //CADASTRAR EMPREGADOR
    function salvaFormacao($data) {
        $this->db->insert("formacao", $data);
    }

}
