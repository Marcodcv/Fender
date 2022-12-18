<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion</title>
</head>
<body>
    
    <?php
    $contraseña=$_REQUEST['contraseña'];
    $usuario=$_REQUEST['usuario'];
    if($contraseña=="M04u1d1v" && $usuario=="marcodcv")
    {
        header('Location:../paginas/compra.html');
    }
    else
    {
        echo'<script> alert("Contraseña y/o Usuario Incorrecto");</script>';
        
    }
    
    ?>
</body>
</html>