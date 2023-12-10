<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitar extends CI_Controller {

    public function inicioUsuarioV(){
        $this->load->view('cabecera/cabeceraInicial');
        $this->load->view('bienvenida/bienvenidaInicial');
        $this->load->view('footer/footer');
    }

    public function mostrarProductosV(){
        $this->load->model('ModeloProducto');
        $data_prod['produc']= $this->ModeloProducto->getProductos();
            
        $this->load->view('cabecera/cabeceraInicial');
        $this->load->view('listas/lista_productosVisitar',$data_prod);
        $this->load->view('footer/footer');
    }

    public function asesoriaV(){
        $this->load->view('cabecera/cabeceraInicial');
        $this->load->view('complemento/asesorias');
        $this->load->view('footer/footer');
    }

    public function ejerciciosV(){
        $this->load->view('cabecera/cabeceraInicial');
        $this->load->view('complemento/ejercicios');
        $this->load->view('footer/footer');
    }
}