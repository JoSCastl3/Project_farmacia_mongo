<?php session_start();
include "../modelo/Usuario.php";
include "./Conexion.php";

$usuariocontrol= new Usuario();

    $datos = array(
        "nombre_us" => $_POST['nombre'],
        "apellidos_us" => $_POST['apellido'],
        "edad" => $_POST['edad'],
        "dui_us" => $_POST['dui'],
        "contrasena_us" => $_POST['pass'],
        "us_tipo" => 2,
        "avatar" => 'default.jpg',
        "telefono_us"=>'',
        "residencia_us"=>'',
        "correo_us"=>'',
        "sexo_us"=>'',
        "adicional_us"=>''

    );

    if(is_null($_POST['nombre'])){
        echo "Null";
    }
    else{
        $respuesta = $usuariocontrol->insertarDatos($datos);
        if ($respuesta=="OK") {
            header('Location: ../vista/adm_usuario.php');        
        } else {
            header('Location: ../vista/adm_usuario.php');
        } 
    }


?>