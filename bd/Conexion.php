<?php
class Conexion
{
    public function conectar()
    {
        $host = "localhost";
        $port = "3306"; 
        $dbname = "sistema_usuarios4";
        $user = "root";      
        $password = "";      

        try {
            $pdo = new PDO(
                "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8",
                $user,
                $password
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}

?>