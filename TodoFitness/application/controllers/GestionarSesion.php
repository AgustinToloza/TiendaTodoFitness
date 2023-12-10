<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GestionarSesion extends CI_Controller {

    public function iniciarSesion(){
        $dato['conforme'] ="";

        $this->load->view('cabecera/cabeceraInicial');
        $this->load->view('logueo/ingresoSistema',$dato);
        $this->load->view('footer/footer');
    }

    public function cerrarSesion(){
        session_start();
        error_reporting(0);
        
        $varsesion = $_SESSION['usuario'];
        /*if($varsesion == null || $varsesion = ''){
            echo 'Usted no tiene autorización';
            die();
        }*/

        session_destroy();

        $this->load->view('cabecera/cabeceraInicial');
        $this->load->view('bienvenida/bienvenidaInicial');
        $this->load->view('footer/footer');
    }

    public function ValidaUsuario(){
            
        /*Recibe los Datos de Nombre y Dni y tiene que validarlos*/
        
        $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS); //$_POST['nombre']
        
        $dni = filter_input(INPUT_POST, 'dni', FILTER_SANITIZE_SPECIAL_CHARS);
       
        /*Levanto el model ModeloLogueo y uso su function valIngreso pasandole los parametros nombre y dni recibidos de la vista*/
        
        session_start();
        $_SESSION['usuario'] = $nombre;
        $_SESSION['dni'] = $dni;
       
        $this->load->model('ModeloLogueo');
        $valido=$this->ModeloLogueo->valIngreso($nombre,$dni);
        
       
        if($valido == 1){
            $this->load->view('cabecera/cabecera');
            $this->load->view('bienvenida/bienvenida');
            $this->load->view('footer/footer');
            
        } else if($valido == 2){
            $this->load->view('cabecera/cabeceraAdmin');
            $this->load->view('bienvenida/bienvenida');
            $this->load->view('footer/footer');
        }
        else {               
            $dato['conforme']="Clave y usuario incorrectos";

            $this->load->view('cabecera/cabeceraInicial');
            $this->load->view('logueo/ingresoSistema',$dato);
            $this->load->view('footer/footer');
        }
    }
 }