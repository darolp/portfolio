<?php 
    $pg ="contacto";
    
    if(isset($_POST["btnEnviar"])){
    $correo = $_POST["txtCorreo"];
    $asunto = "contacto desde tu pagina web";
    $nombre = $_POST["txtNombre"];
    $telefono = $_POST["txtTelefono"];
    $mensaje = $_POST["txtMensaje"];
    $cuerpo ="
    Nombre: $nombre <br>
    Correo: $correo <br>
    Telefono: $telefono <br>
    mensaje: $mensaje 
    ";
    
    $header = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $header .= 'To: dariopizzi12@gmail.com . "\r\n"';
    $header .= "From: contacto@dario.com.ar . \"\r\n\"";
    $mail = mail("dariopizzi12@gmail.com", $asunto, $cuerpo, $header);
    if($mail){
        header("location: gracias_por_contactarte.php");
    }
    }
?>

<!DOCTYPE html>
<html lang="es">
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

    <?php include_once "footer.php" ?>

</body>
<script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>