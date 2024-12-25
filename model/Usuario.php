<?php
require_once("Conexion2.php");
class Usuario
{
    private $usuario;
    private $password;
    private $id;
    function __construct($usuario, $password, $id = -1)
    {
        $this->usuario = $usuario;
        $this->password = $password;
        $this->id = $id;
    }
    function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
    function getUsuario()
    {
        return $this->usuario;
    }
    function setPassword($password)
    {
        $this->password = $password;
    }
    function getPassword()
    {
        return $this->password;
    }

    function getId()
    {
        return $this->id;
    }
    static function getPasswordCifradoUser($usuario){
        $c = new Conexion();
        $conex = $c->getConexion();
        $sql = "SELECT password FROM usuarios WHERE usuario=:login";
        $resultado = $conex->prepare($sql);
        $resultado->bindValue(":login",$usuario);
        $resultado->execute();
        $fila = $resultado->fetch(PDO::FETCH_ASSOC);
        return $fila ? $fila['password'] : null; 
    }
    static function validar($usuario, $password){
        $pC = Usuario::getPasswordCifradoUser($usuario);
        if(password_verify($password,$pC)){
            $c = new Conexion();
        $conex = $c->getConexion();
        $sql = "SELECT * FROM usuarios WHERE usuario=:login AND password=:password";
        $resultado = $conex->prepare($sql);
        $resultado->bindValue(":login",$usuario);
        $resultado->bindValue(":password",Usuario::getPasswordCifradoUser($usuario));
        $resultado->execute();
        return $resultado->rowCount();
        }else{
            return 0;
        }
        
    }
    static function altaUsuario($usuario, $password){
        $c = new Conexion();
        $conex = $c->getConexion();
        $sql = "INSERT INTO usuarios (usuario,password) VALUES (:login , :password)";
        $resultado = $conex->prepare($sql);
        $resultado->bindValue(":login",$usuario);
        $resultado->bindValue(":password",$password);
        $resultado->execute();
        return $resultado->rowCount();
    }
}
