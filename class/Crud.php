<?php session_start();
class Crud extends Conexion {
    public function mostrardatos()
    {
        try {
           $conexion=parent::conectar();
           $coleccion=$conexion->usuario;
           $datos=$coleccion->find();
           return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function mensajesCrud($mensaje) {
        $msg = '';
    
        if ($mensaje == 'insert') {
            $msg = 'swal("Excelente!", "Agregado con exito!", "success")';
        } else if ($mensaje == 'update') {
            $msg = 'swal("Excelente!", "Actualizado con exito!", "info")';
        } else if ($mensaje == 'delete') {
            $msg = 'swal("Excelente!", "Eliminado con exito!", "warning")';
        }
    
        return $msg;
    }
}
?>