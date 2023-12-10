<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/estilos3.css"> 
    <title>Lista de Productos</title>
</head>
    <section class="contenido-princ">
    <h2>Lista de Productos</h2>
    <h3>Para comprar productos, primero debes iniciar sesión.</h3>
<div id= "tabla_artic">
<table border="1" width="90%" align="center">
            <tr>
                <th>ID</th>
                <th>Producto</th>
            </tr>
            <?php //acá se pasó el array, produc estaba como parámetro
            foreach ($produc->result() as $producto){?>
               
                   <tr>
                        <td>
                           <?= $producto->id_producto; ?> 
                       </td>                         
                       <td>
                            <?= $producto->nombre; ?>
                       </td>
                    </tr> 
               <?php 
               }
                ?>
        </table>

</div>

</body>
</html>