<?php
include_once("../Model/Controller/controller.php");
$controlador = new controllerMedico();
if (isset($_POST['enviar'])) {
    $r = $controlador->create($_POST['cedula'],$_POST['id'],$_POST['nombre'],$_POST['apellido'],$_POST['email']);
    if($r){
        echo "Se registro un nuevo medico";
    }else{
        echo "Ya el usuario se encuentra registrado";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing up</title>
    <link rel="icon" href="../Icons/LOGO JOSAN NUEVA VERSION.png">
    <link rel="stylesheet" href="Css/sign up.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Wix+Madefor+Text:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <h1>Regístrate</h1>
        <h5>¿Ya tienes una cuenta? <a href="sign in.php">Inicia sesión</a></h5>
    </header>
    <div class="logo">
        <img src="../Icons/JOSAN.png" alt="url no encontrada :(">
    </div>
    <form action="" method="POST" class="form" >
        <div class="div">
            <input type="text" required name="cedula">
            <label class="lbl-email">
                <span class="text-nombre">
                    Cedula
                </span>
            </label>
        </div>
        <!-------->
        <div class="div">
            <input type="text" required name="id">
            <label class="lbl">
                <span class="text-email">
                    id
                </span>
            </label>
        </div>
        <!-------->
        <div class="div">
            <input type="text" required name="nombre">
            <label class="lbl-password">
                <span class="text-contra">
                    nombre
                </span>
            </label>
        </div>
        <!-------->
        <div class="div">
            <input type="text" required name="apellido">
            <label class="lbl-passwordAgain" >
                <span class="text-email">
                    apellido
                </span>
            </label>
        </div>
        <!-------->
        <div class="div">
            <input type="text" required name="email">
            <label class="lbl-rol">
                <span class="text-rol">
                    email
                </span>
            </label>
        </div>
        <div class="line"></div>
        <div class="circle"></div>
        <div class="line2"></div>

        <div class="linkFace">
            <a href="https://www.google.com/?hl=es"><img src="../Icons/facebook.png" alt="">Continua con Facebook</a>
        </div>
        <div class="google">
            <a href="https://www.google.com/?hl=es"><img src="../Icons/google.png" alt="">Continua con Google</a>
        </div>
        <button type="submit" name="enviar">Regístrate</button>
    </form>
</body>

</html>