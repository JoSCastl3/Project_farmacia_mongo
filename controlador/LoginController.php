<?php session_start();
class LoginController{
    public function obtenerDocumento($dui,$pass) {
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->usuario;
                $datos = $coleccion->find(
                                        array(
                                            'dui_us' =>$dui
                                    )
                                        );
                                            
                foreach ($datos as $item){                                    
                if(($item->contrasena_us)==$pass)
                {
                    $_SESSION['usuario'] = $item->id_usuario;
                    $_SESSION['us_tipo'] = $item->us_tipo;
                    $_SESSION['nombre_us'] = $item->nombre_us; 
                    $_SESSION['dui_us'] = $item->dui_us; 
                    
                    return "OK";
                }
                else
                {
                    return "NoOK";
                }
            }
                
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }
?>