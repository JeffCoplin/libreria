<?php
class DBGestionLibreria {

    private $servidor = "localhost";
    private $dataBase = "biblioteca";
    private $user = "root";
    private $password = "";

private function getConexion() {
    $dns = "mysql:host=$this->servidor;dbname=$this->dataBase";
    $obPDO = new PDO($dns, $this->user, $this->password);
    return $obPDO;

}

public function getTiendas() {
    $pdoConexion = $this->getConexion();
    $resultado = [];

    try {
        if ($pdoConexion) {
            $sql = "SELECT * FROM tiendas";
            $statement = $pdoConexion->query($sql);
            
            if ($statement) {
                $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);
            } else {
                
                error_log("Error en la consulta SQL: " . $pdoConexion->errorInfo()[2]);
            }
        } else {
           
            error_log("Error al conectar a la base de datos");
        }
    } catch (PDOException $e) {
        
        error_log("Error de PDO: " . $e->getMessage());
    }

    return $resultado;
}

public function getLibros() {
    $pdoConexion = $this->getConexion();
    $resultado = [];

    try {
        if ($pdoConexion) {
            $sql = "SELECT * FROM titulos";
            $statement = $pdoConexion->query($sql);
            
            if ($statement) {
                $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);
            } else {
                error_log("Error en la consulta SQL: " . $pdoConexion->errorInfo()[2]);
            }
        } else {
           
            error_log("Error al conectar a la base de datos");
        }
    } catch (PDOException $e) {
        error_log("Error de PDO: " . $e->getMessage());
    }

    return $resultado;
}

public function getAutores() {
    $pdoConexion = $this->getConexion();
    $resultado = [];

    try {
        if ($pdoConexion) {
            $sql = "SELECT * FROM autores";
            $statement = $pdoConexion->query($sql);
            
            if ($statement) {
                $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);
            } else {
               
                error_log("Error en la consulta SQL: " . $pdoConexion->errorInfo()[2]);
            }
        } else {
            
            error_log("Error al conectar a la base de datos");
        }
    } catch (PDOException $e) {
        
        error_log("Error de PDO: " . $e->getMessage());
    }

    return $resultado;
}

public function insertarContacto($nombre, $correo, $comentario) {
    $pdoConexion = $this->getConexion();

    try {
        if ($pdoConexion) {
            
            $sql = "INSERT INTO contacto (nombre, correo, comentario) VALUES (:nombre, :correo, :comentario)";
            $statement = $pdoConexion->prepare($sql);
            
           
            $statement->bindParam(':nombre', $nombre);
            $statement->bindParam(':correo', $correo);
            $statement->bindParam(':comentario', $comentario);
            
            
            $statement->execute();

            
            return true;
        } else {
           
            error_log("Error al conectar a la base de datos");
            return false;
        }
    } catch (PDOException $e) {
    
        error_log("Error de PDO: " . $e->getMessage());
        return false;
    }
}

}

?>
