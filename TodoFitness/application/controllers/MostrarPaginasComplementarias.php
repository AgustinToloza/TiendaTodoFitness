<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MostrarPaginasComplementarias extends CI_Controller {

    public function asesoria(){
        $this->load->view('cabecera/cabecera');
        $this->load->view('complemento/asesorias');
        $this->load->view('footer/footer');
    }

    public function ejercicios(){
        $this->load->view('cabecera/cabecera');
        $this->load->view('complemento/ejercicios');
        $this->load->view('footer/footer');
    }

    public function asesoriaAdmin(){
        $this->load->view('cabecera/cabeceraAdmin');
        $this->load->view('complemento/asesorias');
        $this->load->view('footer/footer');
    }

    public function ejerciciosAdmin(){
        $this->load->view('cabecera/cabeceraAdmin');
        $this->load->view('complemento/ejercicios');
        $this->load->view('footer/footer');
    }
 }