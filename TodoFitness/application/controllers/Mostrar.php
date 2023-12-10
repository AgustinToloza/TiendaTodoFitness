<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mostrar extends CI_Controller {
    
    public function mostrarUsuario(){
        $this->load->view('cabecera/cabecera');
        $this->load->view('datosUsuario/usuario');
    }

    public function mostrarUsuarioAdmin(){
        $this->load->view('cabecera/cabeceraAdmin');
        $this->load->view('datosUsuario/usuario');
    }
}

