<?php

class Academico_model extends CI_Model {


     public function Salvar($data) {
         $this->db->insert('academico', $data);
    }




}
