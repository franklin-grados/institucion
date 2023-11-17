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
    
    public function select_fetch($sql, $datos = []) {
        $stmt = $this->conexion->prepare($sql);

        if ($stmt === false) {
            throw new Exception("Error al preparar la consulta: " . $this->conexion->error);
        }

        if (!empty($datos)) {
            $this->vincularParametros($stmt, $datos);
        }

        if (!$stmt->execute()) {
            throw new Exception("Error al ejecutar la consulta: " . $stmt->error);
        }

        $resultado = $stmt->get_result();

        if (!$resultado) {
            throw new Exception("Error al obtener el resultado: " . $stmt->error);
        }

        $fila = $resultado->fetch_assoc();

        $stmt->close();

        return $fila;
    }
    
    public function select_fetch_all($sql, $datos = []) {
        $stmt = $this->conexion->prepare($sql);

        if ($stmt === false) {
            throw new Exception("Error al preparar la consulta: " . $this->conexion->error);
        }
        if (!empty($datos)) {
            $this->vincularParametros($stmt, $datos);
        }
        if (!$stmt->execute()) {
            throw new Exception("Error al ejecutar la consulta: " . $stmt->error);
        }
        $resultado = $stmt->get_result();
        if (!$resultado) {
            throw new Exception("Error al obtener el resultado: " . $stmt->error);
        }
        $filas = $resultado->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        return $filas;
    }

    private function vincularParametros($stmt, $datos) {
        $tipos = str_repeat('s', count($datos)); // Asume que todos los datos son cadenas
        $stmt->bind_param($tipos, ...$datos);
    }
    
}


?>