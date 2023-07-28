<?php session_start();
include "../controlador/LoginController.php";
include "../controlador/Conexion.php";

$logincontrol= new LoginController();

        $dui = $_POST['user'];
        $pass = $_POST['pass'];

    $respuesta = $logincontrol->obtenerDocumento($dui,$pass);

    if ($respuesta=="OK") {
        header('Location: ../vista/adm_catalogo.php');        
    } else {
        header('Location: ../index.php');
    }

?>