<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mostrarProductos extends CI_Controller {

    public function recibirIdProducto($id){
        $this->load->model("ModeloProducto");
        $data['producto'] = $this->ModeloProducto->getProducto($id);

        $this->load->view('cabecera/cabecera');
        $this->load->view('productos/productoSegunID',$data);
        $this->load->view('footer/footer');
    }

    public function listarProductos(){
        $this->load->model('ModeloProducto');
        $data_prod['produc']= $this->ModeloProducto->getProductos();
            
        $this->load->view('cabecera/cabecera');
        $this->load->view('listas/lista_productos2',$data_prod);
        $this->load->view('footer/footer');
    }

}