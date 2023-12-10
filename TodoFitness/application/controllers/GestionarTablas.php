<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GestionarTablas extends CI_Controller {
    /*Esta función carga en el arreglo $data_prod los datos de la base de datos 
    (Tabla Productos) que servirán para pasarlo a la vista que los va a mostrar*/
    public function listarProductos(){
        $this->load->model('ModeloProducto');
        $data_prod['produc']= $this->ModeloProducto->getProductos();
            
        $this->load->view('cabecera/cabeceraAdmin');
        $this->load->view('listas/lista_productos',$data_prod);
    }

    /*Esta función carga en el arreglo $data_prod los datos de la base de datos 
    (Tabla User) que servirán para pasarlo a la vista que los va a mostrar*/
    public function listarUsuarios(){
        $this->load->model('ModeloUsuario');
        $data_usuarios['user'] = $this->ModeloUsuario->getUsuarios();

        $this->load->view('cabecera/cabeceraAdmin');
        $this->load->view('listas/lista_usuarios',$data_usuarios);
    }

    public function editarProducto($id){
        $this->load->model('ModeloProducto');
        $data['producto'] = $this->ModeloProducto->getProducto2($id);
        $data['id'] = $id;

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nombre = $this->input->post('nombre');
            $descripcion = $this->input->post('descripcion');
            $stock = $this->input->post('stock');
            $precio = $this->input->post('precio');
            
            if(isset($_FILES['imagen'])){
                $file = $_FILES['imagen'];
    
                //SETEADO DE NOMBRE SEGUN ID
                $nombreimg = $id.$file['name'];
    
                $tipo = $file["type"];
                $ruta_provisional = $file['tmp_name'];
                $size = $file['size'];
                $dimensiones = getimagesize($ruta_provisional);
                $width = $dimensiones[0];
                $height = $dimensiones[1];
                $carpeta = "assets/imagenes/";
    
                if($tipo != 'image/jpg' && $tipo != 'image/JPG' && $tipo != 'image/jpeg'
                   && $tipo != 'image/png' && $tipo != 'image/gif'){
                    echo "Error, el archivo no es una imagen";
                   } else if($size > 3*1024*1024){ //de bit a byte a mega
                    echo "Error, el tamaño máximo permitido es de 3MB";
                   } else{
                    $src = $carpeta.$nombreimg;
                    move_uploaded_file($ruta_provisional, $src);
                    $imagen = "assets/imagenes/".$nombreimg;
                   }
            }


            $data = array(
                'nombre' => $nombre,
                'descripcion' => $descripcion,
                'stock' => $stock,
                'precio' => $precio,
                'imagen' => $imagen,
            );

            $status = $this->ModeloProducto->updateProducto($data, $id);
        }

        $this->load->view('cabecera/cabeceraAdmin');
        $this->load->view('edit/edit_producto',$data);
    }

    public function eliminarProducto($id){
        /*$id = $_GET['id'];
        $imagen = $_GET['imagen'];*/
        $this->load->model('ModeloProducto');
        if(is_numeric($id)){
            $status = $this->ModeloProducto->deleteProducto($id);
            //unlink($imagen);
        }

        $this->load->view('cabecera/cabeceraAdmin');
        $this->load->view('complemento/borradoProducto');
    }

    public function editarUsuario($id){
        $this->load->model('ModeloUsuario');
        $data['usuario'] = $this->ModeloUsuario->getUsuario($id);
        $data['id'] = $id;

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nombre = $this->input->post('nombre');
            $apellido = $this->input->post('apellido');
            $dni = $this->input->post('dni');

            $data = array(
                'nombre' => $nombre,
                'apellido' => $apellido,
                'dni' => $dni,
            );

            $status = $this->ModeloUsuario->updateUsuario($data, $id);
        }
            
        $this->load->view('cabecera/cabeceraAdmin');
        $this->load->view('edit/edit_usuario',$data);
    }

    public function eliminarUsuario($id){
        $this->load->model('ModeloUsuario');
        if(is_numeric($id)){
            $status = $this->ModeloUsuario->deleteUsuario($id);
        }
        $this->load->view('cabecera/cabeceraAdmin');
        $this->load->view('complemento/borradoUsuario');
    }
 }