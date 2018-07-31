<?php

class Usuario extends CI_Controller {
    function __construct() {
        parent::__construct();
        //Modelito

        $this->load->model('Model_Usuario');


    }

    public function index() {


        $data['contenido'] = "usuario/index";
        $data['selPerfil'] = $this->Model_Usuario->selPerfil();
        $this->load->view("crud", $data);

    }


public function insert(){
        $datos = $this->input->post();

    if(isset($datos)){
        echo $datos['txtNombres'];
        exit;

    }
}
}