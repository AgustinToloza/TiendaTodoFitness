<?php

class ModeloUsuario extends CI_Model {

    function __construct() { 
        parent::__construct();
    }

    // La Funcion guarda nombre, apellido y dni en la Tabla User
    function guardarUsuario($nombre,$apellido,$dni){        
        $consulta = $this->db->query("INSERT INTO user (nombre,apellido,dni)   VALUES ('$nombre', '$apellido', '$dni')");
    }

    public function getUsuarios(){
        $query = $this->db->get('user');
        if($query->num_rows()>0){
            return $query;
        }else{
            return false;
        }
    }

    public function getUsuario($id){
        $this->db->where('id_user',$id);
        $query = $this->db->get('user');
        return $query->row();
    }

    public function getUsuario2($nombre){
        $this->db->where('nombre',$nombre);
        $query = $this->db->get('user');
        return $query->row();
    }

    public function updateUsuario($data, $id){
        $this->db->where('id_user',$id);
        $this->db->update('user',$data);
    }

    public function deleteUsuario($id){
        $this->db->where('id_user',$id);
        $this->db->delete('user');
    }
}