<section class="form_carga">
    <h3 class="text-center">PRODUCTO AGREGADO A LA BASE DE DATOS CORRECTAMENTE.</h3><br><br>
</section>
    <h2 class="text-center"> NOMBRE: <?php echo($nombre); ?> </h2>
    <h2 class="text-center"> DESCRIPCIÓN: <?php echo($descripcion); ?> </h2>
    <h2 class="text-center"> STOCK: <?php echo($stock); ?> </h2>
    <h2 class="text-center"> PRECIO: <?php echo($precio); ?> </h2>
    <h2 class="text-center"> IMAGEN URL: <?php echo($imagen); ?> </h2>
    <center>
        <img height="300px" width="300px" src="<?= base_url(); ?><?=$imagen?>">
    </center>
    <br><br>
</body>
</html>