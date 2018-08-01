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
        $data['listaUsuario'] = $this->Model_Usuario->listaUsuario();
        $this->load->view("crud", $data);

    }


public function insert(){
        $datos = $this->input->post();

    if(isset($datos)){
        $txtId = $datos['txtIdper'];
        $txtNombres = $datos['txtNombres'];
        $txtApellidos  = $datos['txtApellidos'];
        $txtCorreo  = $datos['txtCorreo'];
        $txtTeléfono  = $datos['txtTeléfono'];
        $this->Model_Usuario->insertUsuario($txtId, $txtNombres, $txtApellidos, $txtCorreo, $txtTeléfono);
        redirect('');
    }
}


public function delete ($id = NULL){
    if($id != NULL){
        $this->Model_Usuario->deleteUsuario($id);
        redirect('');
    }

}

public function edit($id = NULL){
if($id != NULL){
$data['contenido'] = 'usuario/edit';
$data['selPerfil'] = $this->Model_Usuario->selPerfil();
$data['datosUsuario'] = $this->Model_Usuario->editUsuario($id);
$this->load->view('crud', $data);
}else{ 
    redirect('');
}   


}

public function update(){
$datos = $this->input->post();

if(isset($datos)){
    $txtUsuid = $datos['txtUsuid'];
    $txtPerid = $datos['txtPerid'];
    $txtNombres = $datos['txtNombres'];
    $txtApellidos  = $datos['txtApellidos'];
    $txtCorreo  = $datos['txtCorreo'];
    $txtTeléfono  = $datos['txtTeléfono'];
    $this->Model_Usuario->updateUsuario($txtUsuid, $txtPerid, $txtNombres, $txtApellidos, $txtCorreo, $txtTeléfono);
    redirect('');
}
}
}