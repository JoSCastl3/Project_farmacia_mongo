<?php session_start();
    include "./Conexion.php";
    include "../modelo/Usuario.php";

    $usuariocontrol= new Usuario();

    $dui = $_SESSION['dui_us'];

    $datos = array(
        "telefono_us" => $_POST['telefono'],
        "residencia_us" => $_POST['residencia'],
        "correo_us" => $_POST['correo'],
        "sexo_us" => $_POST['sexo'],
        "adicional_us" => $_POST['adicional']       
    );

    $respuesta = $usuariocontrol->actualizar($dui, $datos);

    if(is_null($_POST['telefono'])){
        echo "Null";
    }
    else{
        $respuesta = $usuariocontrol->insertarDatos($datos);
        if ($respuesta=="OK") {
            header('Location: ../vista/editar_datos_personales.php');        
        } else {
            header('Location: ../vista/editar_datos_personales.php');
        } 
    }

?>