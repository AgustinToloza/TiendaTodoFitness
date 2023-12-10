<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/estilos3.css"> 
    <title>Lista de Productos</title>
</head>
    <section class="contenido-princ">
    <h2>Lista de Productos</h2>

<div id= "tabla_artic">
<table border="1" width="90%" align="center">
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Descripción</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>URL Img</th>
               <th></th>
                <th></th>
            </tr>
            <?php //acá se pasó el array, produc estaba como parámetro
            foreach ($produc->result() as $producto){?>
               
                   <tr>
                       <td>
                            <?= $producto->id_producto; ?>
                       </td>
                       <td>
                           <?= $producto->nombre; ?> <!--nombre, descripcion, stock y precio -->
                       </td>                         <!-- son los campos de la base de datos-->
                       <td>
                            <?= $producto->descripcion; ?>
                       </td>
                       <td>
                            <?= $producto->stock; ?>
                       </td>
                       <td>
                            <?= $producto->precio; ?>
                       </td>
                       <td>
                            <img height="70px" src="<?= base_url(); ?><?=$producto->imagen?>">
                       </td>
                       <td>
                            <?=$producto->imagen; ?>
                       </td>

                       <td><a href="<?=base_url()?>GestionarTablas/editarProducto/<?=$producto->id_producto?>">Modificar</a></td>
                       <td><a href="<?=base_url()?>GestionarTablas/eliminarProducto/<?=$producto->id_producto?>" onclick="return confirm('Estás seguro que deseas eliminar este producto?')">Eliminar</a></td>
                    </tr> 
               <?php 
               }
                ?>
                
        </table>
          <br><br>
</div>

</body>
</html>