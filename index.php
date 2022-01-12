<!DOCTYPE html>
<html lang="es">

<?php 
    $pg ="inicio";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawersome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawersome/css/fontawesome.min.css">

    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css">
   
</head>

<body id="index">
<?php include_once "header.php" ?>


    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-4 div-cohete">
                <a href="proyectos.html" rel="noopener noreferrer" class="link-a"><img
                        src="imagenes/cohete.svg" class="cohete" alt=""></a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 my-3 text-center">
                <p class="my-3 text-center ">Bienvenid@ a mi sitio web</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="proyectos.html" class="btn btn-blanco">Conoce mis proyectos</a>
            </div>
        </div>

    </div>

    <footer class="container mb-0">
        <div class="row">
            <div class="col-sm-4 col-12"> <a href="https://github.com" target="_blank" title="Github"><i
                        class="fab fa-github px-2"></i></a>
                <a href="https://www.linkedin.com/in/nelson-daniel-tarche/" target="_blank" title="Linkedin"><i
                        class="fab fa-linkedin-in px-2 "></i></a>
            </div>
            <div class="col-sm-4 col-12">Sponsor<a href="http://"  rel="noopener noreferrer">DePC
                    Suite</a></div>
            <div class="col-sm-4 col-12">dariopizzi12@gmail.com</div>
        </div>
        <div class="bloquewhatsapp pb-4 pt-3 px-3">
            <a href=""><i class="fab fa-whatsapp"></i></a>
        </div>

    </footer>
</body>
<script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

</html>