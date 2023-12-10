<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/estilos3.css"> 
    <title>Lista de Usuarios</title>
</head>
<section class="contenido-princ">
    <h2>Lista de Usuarios</h2>

<div id= "tabla_artic">
<table border="1" width="90%" align="center">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dni</th>
               <th></th>
                <th></th>
            </tr>
            <?php //acá se pasó el array, user estaba como parámetro
            foreach ($user->result() as $usuario){?>
               
                   <tr>
                        <td>
                           <?= $usuario->nombre; ?> <!--nombre, apellido, dni -->
                       </td>                         <!-- son los campos de la base de datos-->
                       <td>
                            <?= $usuario->apellido; ?>
                       </td>
                       <td>
                            <?= $usuario->dni; ?>
                       </td>
                       
                       <td><a href="<?=base_url()?>GestionarTablas/editarUsuario/<?=$usuario->id_user?>">Modificar</a></td>
                       <td><a href="<?=base_url()?>GestionarTablas/eliminarUsuario/<?=$usuario->id_user?>" onclick="return confirm('Estás seguro que deseas eliminar este usuario?')">Eliminar</a></td>
                    </tr> 
               <?php 
               }
                ?>
        </table>

</div>

</body>
</html>