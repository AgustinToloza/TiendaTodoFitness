<?php ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/estilos2.css">
    </head>
    <body>
        <div class="container">
            <br/><br/>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <h3 class="panel-title colorN">Registro</h3>
                    <div class="panel-body">
                        <form action="<?= base_url(); ?>Registrar/RecibirGrabar" method="POST">                              
                            <p>Ingrese su Nombre</p>  <input type="text" autofocus name="nombre" class="form-control" required="" autocomplete="off">
                            <p>Ingrese su Apellido</p>  <input type="text" autofocus name="apellido" class="form-control" required="" autocomplete="off">
                            <p>Ingrese su DNI</p>  <input type="password" name="dni" class="form-control" required="" autocomplete="off">
                            <hr/>
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span>Entrar</button>
                            <p><br/></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</body>
</html>
</body>
</html> 