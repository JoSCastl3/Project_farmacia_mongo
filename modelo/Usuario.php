<?php
class Usuario{
    public function insertarDatos($datos) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->usuario;
            $respuesta = $coleccion->insertOne($datos);
            return "Ok";
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
        }
    
    public function obtenerDocumento($dui) {
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->usuario;
                $datos = $coleccion->find(
                                        array(
                                            'dui_us' =>$dui
                                    )
                                        );
                return $datos;
                
            } catch (\Throwable $th) {
                return $th->getMessage();
            }  
        }

        public function actualizar($dui, $datos) {
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->usuario;
                $respuesta = $coleccion->updateOne(
                                            ['dui_us' =>$dui],
                                            [
                                                '$set' => $datos    
                                            ]
                                        );
                return "OK";
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }     
?>
