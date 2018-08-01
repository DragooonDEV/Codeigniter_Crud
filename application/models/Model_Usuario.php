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

public function insertUsuario($idper, $nombres, $apellidos, $correo, $telefono){

$arrayDatos = array(
    'per_id' => $idper,
    'usu_nombres' => $nombres,
    'usu_apellidos' => $apellidos,
    'usu_correo' => $correo,
    'usu_telefono' => $telefono
);

$this->db->insert('usuario', $arrayDatos);

}

public function listaUsuario(){
    $query = $this->db->query("SELECT * FROM USUARIO u inner join perfil p on u.per_id = p.per_id ");
    return $query->result();
}

public function deleteUsuario($id){
    $this->db->where('usu_id', $id);
    $this->db->delete('usuario');
}

public function editUsuario($id){
 $consulta  = $this->db->query("SELECT * FROM USUARIO u inner join perfil p on u.per_id = p.per_id WHERE u.usu_id=$id");
return $consulta->result();
}

public function updateUsuario($txtUsuid, $txtPerid, $txtNombres, $txtApellidos, $txtCorreo, $txtTeléfono){

$array = array(

    'per_id' => $txtPerid,
    'usu_nombres' => $txtNombres,
    'usu_apellidos' => $txtApellidos,
    'usu_correo' => $txtCorreo,
    'usu_telefono' => $txtTeléfono

);
$this->db->where('usu_id',$txtUsuid );
$this->db->update('usuario', $array);

}

public function getUsuario(){
    $this->db->select('*');
    $this->db->from('usuario');
    $query = $this->db->get();
                
    return $query;
}


}
