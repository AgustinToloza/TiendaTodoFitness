<?php 
  if(!isset($_SESSION)){
    session_start();
  }
  error_reporting(0);

  $varsesion = $_SESSION['usuario'];
  if($varsesion == null || $varsesion = ''){
    echo 'Usted no tiene autorización';
    die();
  }

  $this->db->where('nombre',$varsesion);
  $resultado = $this->db->get('user');
  $data=$resultado->row();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/estilos2.css">
    <title>Usuario</title>
</head>
<body>
    <h1>Usuario</h1>
    <br>
    <h3>Nombre: <?php echo $_SESSION['usuario']; ?></h3>
    <h3>DNI: <?php echo $_SESSION['dni']; ?></h3>
</body>
</html>