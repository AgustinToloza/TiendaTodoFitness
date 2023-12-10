<?php

class ModeloLogueo extends CI_Model {

    function __construct() { 
        parent::__construct();
    }

    function valIngreso($nombre,$dni){        
        $consulta = $this->db->query("SELECT nombre,dni FROM user  WHERE nombre = '" . $nombre. "' and dni='" . $dni."'");
        if ($consulta->num_rows() == 1) {
            if($nombre == "admin" && $dni == "1234"){
              return 2;
            }else{
                return 1;
            //return $consulta->row();
           }
        }else {
            return false;
        }
    }  
}


