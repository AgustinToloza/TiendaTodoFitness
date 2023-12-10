<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/estilos.css">
    <title>Producto</title>
</head>
<body>
    <header> 
        <h1><?php echo $producto[0]['nombre']; ?></h1>
        <div class="container-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-cart">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>
        </div>
    </header>
    <figure>
        <img height="500px" width="500px" src="<?= base_url(); ?><?=$producto[0]['imagen']?>">
    </figure>
    <div class="info-product">
        <h2><?php echo $producto[0]['descripcion']; ?></h2>
        <h2>Stock: <?php echo $producto[0]['stock']?> Unidades</h2>
        <p class="price">$<?php echo $producto[0]['precio']?></p>
    </div>
</body>
</html>