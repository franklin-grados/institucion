<?php  

class Database {
    private $host = "localhost";
    private $usuario = "root";
    private $contrasena = "";
    private $base_datos = "institucion";
    private $conexion;

    public function __construct() {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->contrasena, $this->base_datos);

        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public function cerrarConexion() {
        $this->conexion->close();
    }


    public function listarUnaFila($query, $datos = array()) {
        if (!empty($datos)) {
            // Si se proporcionan datos, prepara una consulta con marcadores de posición
            $stmt = $this->conexion->prepare($query);
            
            if ($stmt === false) {
                die("Error de preparación de la consulta: " . $this->conexion->error);
            }
            
            $types = str_repeat('s', count($datos));
            $stmt->bind_param($types, ...$datos);
            
            $stmt->execute();
            
            $resultado = $stmt->get_result();
            
            if ($resultado) {
                return $resultado->fetch_assoc();
            } else {
                return null;
            }
        } else {
            // Si no se proporcionan datos, ejecuta la consulta directamente
            $resultado = $this->conexion->query($query);
            
            if ($resultado) {
                return $resultado->fetch_assoc();
            } else {
                return null;
            }
        }
    }
    
    
    public function consultarVariasFilas($query, $datos = array()) {
        $stmt = $this->conexion->prepare($query);
    
        if ($stmt === false) {
            die("Error de preparación de la consulta: " . $this->conexion->error);
        }
    
        if (!empty($datos)) {
            $types = str_repeat('s', count($datos));
            $stmt->bind_param($types, ...$datos);
        }
    
        $stmt->execute();
        $resultado = $stmt->get_result();
    
        if ($resultado) {
            $filas = array();
            while ($fila = $resultado->fetch_assoc()) {
                $filas[] = $fila;
            }
            $stmt->close();
            return $filas;
        } else {
            return null;
        }
    }
}


?>