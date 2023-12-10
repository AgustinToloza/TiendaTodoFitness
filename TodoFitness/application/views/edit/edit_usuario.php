<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/estilos2.css">
    <title>Modificación de Usuarios</title>
</head>
<section class="form_carga">
    <h3 class="text-center">Modificación de Usuario: <?php echo $usuario->nombre;?> <?php echo $usuario->apellido;?></h3><br><br>
        
    <div id="formu_aric">
      
       <form class="row g-3" action="<?= base_url(); ?>GestionarTablas/editarUsuario/<?=$id?>" method="POST" align-items-center>

            <input type="text" name="nombre" placeholder="Nombre" value="<?=$usuario->nombre?>" required maxlength="100"><br><br>
            <input type="text" name="apellido" placeholder="Apellido" value="<?=$usuario->apellido?>" required maxlength="100"><br><br>
            <input type="password" name="dni" placeholder="Dni" value="<?=$usuario->dni?>" maxlength="200"><br><br>
            <input type="submit" value="Modificar usuario" class="btn btn-dark"> 
        </form>
    </div>
    </section>
    
</body>
</html>