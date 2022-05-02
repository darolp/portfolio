<!DOCTYPE html>
<html lang="es">

<?php 
    $pg ="proyecto";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/fontawersome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawersome/css/fontawesome.min.css">
     <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body id="proyecto">
<?php include_once "header.php" ?>


    <div class="container">
        <div class="row">
            <div class="col-12 pt-4 pb-5">
               <h1>Proyectos</h1>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-12 col-sm-6">
            <p>Los siguientes son algunos de los trabajos que vemos en clase:</p>
        </div>
    </div>


    <div class="row">
        <div class="col-12 col-sm-4">
            <div class="m-1 border bg-white">
                <img src="imagenes/abmclientes.png" alt="ABM Clientes" class="img-fluid">
                <div class="gradiante py-2 ps-2 ">
                    <h3>ABM CLIENTES</h3>
                </div>
                <div class="mb-4 p-3">
                    <p class="p-proyecto">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
                </div>
                <div class="row">
                    <div class="col-6 ps-4 pb-3">
                        <a href="" target="_blank" class="btn btn-rojo">Ver online</a>
                    </div>
                    <div class="col-6 ps-4">
                        <a href="https://github.com/darolp/abmclientes" target="_blank" class="proyecto-btn-link">Codigo fuente</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-sm-4">
            <div class="m-1 border bg-white">
                <img src="imagenes/abmventas (1).png" alt="ABM Clientes" class="img-fluid">
                <div class="gradiante py-2 ps-2">
                    <h3>SISTEMA DE GESTIÓN DE VENTAS</h3>
                </div>
                <div class="p-3 mb-4">
                    <p class="p-proyecto">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
                </div>
                <div class="row">
                    <div class="col-6 ps-4 pb-3">
                        <a href=""  target="_blank" class="btn btn-rojo">Ver online</a>
                    </div>
                    <div class="col-6 ps-4">
                        <a href="https://github.com/darolp/abmventas" target="_blank" class="proyecto-btn-link">Codigo fuente</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-sm-4">
            <div class="m-1 border bg-white">
                <img src="imagenes/proyecto-integrador (1).png" alt="ABM Clientes" class="img-fluid">
                <div class="gradiante py-2 ps-2">
                    <h3>PROYECTO INTEGRADOR</h3>
                </div>
                <div class="p-3 mb-4">
                    <p class="p-proyecto">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
                </div>
                <div class="row">
                    <div class="col-6 ps-4 pb-3">
                        <a href="https://heaven-fit.com/" target="_blank" class="btn btn-rojo">Ver online</a> 
                    </div>
                    <div class="col-6 ps-4">
                        <a href="https://github.com/depcsuite/heavenfit" target="_blank" class="proyecto-btn-link">Codigo fuente</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include_once "footer.php" ?>
</body>
<script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>