<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargar extends CI_Controller {

    public function funcUsuarios(){
        $this->load->view('cabecera/cabeceraAdmin');
        $this->load->view('carga/usuarios');
    }

    public function funcProductos(){
        $this->load->view('cabecera/cabeceraAdmin');
        $this->load->view('carga/productos');
    }

    public function GrabarUsuario(){
            
        /*Recibe los datos de nombre, apellido y dni del usuario
        para insertarlos en la Tabla User*/
        
        $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS); //$_POST['nombre']
        $apellido = filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_SPECIAL_CHARS);
        $dni = filter_input(INPUT_POST, 'dni', FILTER_SANITIZE_SPECIAL_CHARS);

        $this->load->model('ModeloUsuario');
        $valido=$this->ModeloUsuario->guardarUsuario($nombre,$apellido,$dni);
        
        $dato['nombre'] = $nombre;
        $dato['apellido'] = $apellido;
        $dato['dni'] = $dni;

        $this->load->view('cabecera/cabeceraAdmin');
        $this->load->view('complemento/agregadoUsuario',$dato);
    }

    public function GrabarProducto(){
        
        /*Recibe los datos de nombre, descripcion, stock, precio e imagen del producto
        para insertarlos en la Tabla Producto*/
        
        $nombre_produc = $_POST['nombre'];
        $descrip_produc = $_POST['descripcion'];
        $stock_produc = $_POST['stock'];
        $precio_produc = $_POST['precio'];
        $imagen = "";

        if(isset($_FILES['imagen'])){
            $file = $_FILES['imagen'];

            //SETEADO DE NOMBRE SEGUN ID
            $this->load->model('ModeloProducto');
            $data['id'] = $this->ModeloProducto->getUltimoId();
            $idNuevo = $data['id']['max'] + 1;
            $nombre = $idNuevo.$file['name'];

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
                $src = $carpeta.$nombre;
                move_uploaded_file($ruta_provisional, $src);
                $imagen = "assets/imagenes/".$nombre;

                $valido=$this->ModeloProducto->guardarProducto($nombre_produc,$descrip_produc,$stock_produc,$precio_produc,$imagen);

                $dato['nombre']= $nombre_produc;
                $dato['descripcion'] = $descrip_produc;
                $dato['stock'] = $stock_produc;
                $dato['precio'] = $precio_produc;
                $dato['imagen'] = $imagen;

                $this->load->view('cabecera/cabeceraAdmin');
                $this->load->view('complemento/agregadoProducto',$dato);
               }
        }
        
    }
 }