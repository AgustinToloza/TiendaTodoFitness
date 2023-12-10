<?php

class ModeloProducto extends CI_Model {

    function __construct() { 
        parent::__construct();
    }

    // La Funcion guarda nombre, descripcion, stock y precio en la Tabla Productos
    public function guardarProducto($nombre_produc,$descrip_produc,$stock_produc,$precio_produc,$imagen_produc){        
        $consulta = $this->db->query("INSERT INTO productos (nombre,descripcion,stock,precio,imagen)   VALUES ('$nombre_produc','$descrip_produc','$stock_produc','$precio_produc','$imagen_produc')");
    }

    public function getProductos(){
        $query=$this->db->get('productos');
        if($query->num_rows()>0)
            return $query;
        else 
            return false;
        
    }

    public function getUltimoID(){
        $consulta = $this->db->query("SELECT MAX(id_producto) as 'max' FROM productos");
        if ($consulta->num_rows() == 1) {
            return $consulta->row_array();
        }else {
            return 0;
        }
    }
    
    public function getProducto($id){
        $this->db->where('id_producto',$id);
        $query = $this->db->get('productos');
        return $query->result_array();
    }

    public function getProducto2($id){
        $this->db->where('id_producto',$id);
        $query = $this->db->get('productos');
        return $query->row();
    }

    /*public function updateProducto($data, $id){
        $this->db->where('id_producto',$id);
        $this->db->update('productos',$data);
    }*/

    public function updateProducto($data, $id){
        $consulta = $this->db->query("UPDATE productos SET nombre='$data[nombre]', descripcion='$data[descripcion]', stock='$data[stock]', precio='$data[precio]', imagen='$data[imagen]' WHERE id_producto='$id'");
    }

    public function deleteProducto($id){
        $this->db->where('id_producto',$id);
        $this->db->delete('productos');
    }
}