<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar extends CI_Controller {
    
    public function pagRegistrar(){
        $this->load->view('cabecera/cabeceraInicial');
        $this->load->view('logueo/registroSistema');
        $this->load->view('footer/footer');
    }

    public function RecibirGrabar(){
            
        /*Recibe los datos de nombre, apellido y dni para ingresarlos en la Base de Datos*/
            
        $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS); //$_POST['nombre']
        $apellido = filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_SPECIAL_CHARS);
        $dni = filter_input(INPUT_POST, 'dni', FILTER_SANITIZE_SPECIAL_CHARS);
        
        $this->load->model('ModeloUsuario');
        $valido=$this->ModeloUsuario->guardarUsuario($nombre,$apellido,$dni);

        $dato['nombre'] = $nombre;
        $dato['apellido'] = $apellido;
        $dato['dni'] = $dni;
            
        $this->load->view('cabecera/cabeceraInicial');
        $this->load->view('complemento/usuarioRegistrado',$dato);
        $this->load->view('footer/footer');
    }
}