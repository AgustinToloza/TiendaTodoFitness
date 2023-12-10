<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iniciar extends CI_Controller {
	
	public function index()
	{
        $this->load->view('cabecera/cabeceraInicial');
        $this->load->view('bienvenida/bienvenidaInicial');
        $this->load->view('footer/footer');
	}

    public function inicioUsuario(){
        $this->load->view('cabecera/cabecera');
        $this->load->view('bienvenida/bienvenida');
        $this->load->view('footer/footer');
    }

    public function inicioAdmin(){
        $this->load->view('cabecera/cabeceraAdmin');
        $this->load->view('bienvenida/bienvenida');
        $this->load->view('footer/footer');
    }
 }
        

