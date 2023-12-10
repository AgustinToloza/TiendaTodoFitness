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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/estilos2.css">
  </head>
    <title>TodoFitness</title>
    <link rel="icon" href="<?= base_url(); ?>assets/imagenes/icono.png">
</head>
<body>
<ul class="nav nav-underline">
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url(); ?>Iniciar/inicioUsuario">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url(); ?>MostrarProductos/listarProductos">Productos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url(); ?>Mostrar/mostrarUsuario">Usuario: <?php echo $_SESSION['usuario'] ?> </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url(); ?>GestionarSesion/cerrarSesion">Salir</a>
  </li>
</ul>
<br><br>