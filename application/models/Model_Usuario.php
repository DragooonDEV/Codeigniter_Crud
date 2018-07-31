<?php


class Model_Usuario extends CI_Model {

    function __construct() {
        parent :: __construct();
        $this->load->database();
    }

    public function selPerfil(){

        $query = $this->db->query("select *  from perfil");
        return $query->result();
    }
}