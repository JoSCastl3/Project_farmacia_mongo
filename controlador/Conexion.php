<?php

require_once $_SERVER['DOCUMENT_ROOT']."/farmacia1/vendor/autoload.php";

class Conexion{
    public static function conectar(){
       try {
            $servidor="localhost";
            $usuario="mongoadmin";
            $password="1234";
            $basededatos="farmaciamongo";
            $puerto="27017";

            $cadenaconexion="mongodb://".
                            $usuario.":".
                            $password."@".
                            $servidor.":".
                            $puerto."/".
                            $basededatos;
            $cliente=new MongoDB\Client($cadenaconexion); 
            return $cliente->selectDatabase($basededatos);  
       } catch (\Throwable $th) {
            return  $th->getMessage();
       }           
    }

}
?>