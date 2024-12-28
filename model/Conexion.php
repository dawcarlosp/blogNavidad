<?php
class Conexion
{
    private $server;
    private $user;
    private $password;
    private $bbdd;
    private $port;
    private $charset;
    public function __construct()
    {
        $this->server = 'db';
        $this->user = 'bbddblog';
        $this->password = '1234';
        $this->bbdd = 'bbddblog';
        $this->port = 3306;
        $this->charset = 'utf8mb4';
    }
    public function getConexion()
    {
        try {
            $conecction = 'mysql:host=' . $this->server . ';dbname=' . $this->bbdd . ';port=' . $this->port.';charset='.$this->charset;
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
            $db = new PDO($conecction, $this->user, $this->password, $opciones);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }

        return $db;
    }
}
?>