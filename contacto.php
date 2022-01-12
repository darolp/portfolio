<!DOCTYPE html>
<html lang="es">

<?php 
    $pg ="contacto";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawersome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawersome/css/fontawesome.min.css">

    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css?v=<?php echo rand(100,500)?>">

</head>

<body id="contacto">

<?php include_once "header.php" ?>


    <main class="container">
        <div class="row">
            <div class="col-12 mt-3 mb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-12 col-sm-6">
                <form method="post">
                    <div class="mb-3">
                        <input type="text" name="txtNombre" class="form-control shadow" id="txtNombre"
                            placeholder="Nombre">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="txtCorreo" class="form-control shadow" id="txtCorreo"
                            placeholder="correo">
                    </div>
                    <div class="mb-3">
                        <input type="tel" name="txtTelefono" class="form-control shadow" id="txtTelefono"
                            placeholder="Telefono/whatsapp">
                    </div>
                    <div class="mb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe un mensaje"
                            class="form-control shadow pb-5"></textarea>
                    </div>
                    <div>
                        <button type="submit" id="btnEnviar" name="btnEnviar"
                            class="btn-blanco px-4 py-1">ENVIAR</button>
                    </div>
                </form>

            </div>

        </div>

    </main>

    <footer class="container mb-0">
        <div class="row">
            <div class="col-sm-4 col-12"> <a href="https://github.com" target="_blank" title="Github"><i
                        class="fab fa-github px-2"></i></a>
                <a href="https://www.linkedin.com/in/nelson-daniel-tarche/" target="_blank" title="Linkedin"><i
                        class="fab fa-linkedin-in px-2 "></i></a>
            </div>
            <div class="col-sm-4 col-12">Sponsor<a href="http://" target="_blank" rel="noopener noreferrer">DePC Suite</a></div>
            <div class="col-sm-4 col-12">dariopizzi12@gmail.com</div>
        </div>
        <div class="bloquewhatsapp pb-4 pt-3 px-3">
            <a href=""><i class="fab fa-whatsapp"></i></a>
        </div>

    </footer>

</body>
<script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>