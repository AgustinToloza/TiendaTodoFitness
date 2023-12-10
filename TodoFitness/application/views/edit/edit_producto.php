<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/estilos2.css">
    <title>Modificación de Productos</title>
</head>
<section class="form_carga">
        <h3 class="text-center">Modificación de Producto: <?php echo $producto->nombre;?></h3><br><br>
        
    <div id="formu_aric">
    <center>
        <img height="200px" width="200px" src="<?= base_url(); ?><?=$producto->imagen?>">
    </center>
        <br>
        <form class="row g-3" action="<?= base_url(); ?>GestionarTablas/editarProducto/<?=$id?>" method="POST" align-items-center enctype="multipart/form-data">

            <input type="text" name="nombre" placeholder="Nombre del artículo" value="<?=$producto->nombre?>" required maxlength="100"><br><br>
            <input type="text" name="descripcion" placeholder="Descripción" value="<?=$producto->descripcion?>" maxlength="200"><br><br>
            <input type="text" name="stock" placeholder="Stock" value="<?=$producto->stock?>" maxlength="100"><br><br>
            <input type="text" name="precio" placeholder="Precio" value="<?=$producto->precio?>" required maxlength="10"><br><br>
            <input type="file" name="imagen" placeholder="Imagen" value="<?=$producto->imagen?>" required>
            <input type="submit" value="Modificar producto" class="btn btn-dark"> 
        </form>
    </div>
    </section>
    
</body>
</html>