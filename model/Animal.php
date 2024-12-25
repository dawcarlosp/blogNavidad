<?php
include "Conexion3.php";
class Animal
{
    private $foto;
    private $descripcion;
    private $id;
    function __construct($foto, $descripcion,$idP = -1)
    {
        $this->foto = $foto;
        $this->descripcion = $descripcion;
        $this->id = $idP;
    }
    function setFoto($foto)
    {
        $this->foto = $foto;
    }
    function getFoto()
    {
        return $this->foto;
    }
    function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    function getDescripcion()
    {
        return $this->descripcion;
    }
    function getId(){
        return $this->id;
    }
    public static function getIDs(){
        $IDs = array();
        $c = new Conexion();
        $conex = $c->getConexion();
        $sql = "Select * FROM animales";
        $resul = $conex->query($sql);
        if ($resul->rowCount()) {
            while ($row = $resul->fetch(PDO::FETCH_OBJ)) {
                $IDs[] = $row->id;
            }
        }
        return $IDs;
    }
    public static function getAnimales()
    {
        $animales = array();
        $c = new Conexion();
        $conex = $c->getConexion();
        $sql = "Select * FROM animales";
        $resul = $conex->query($sql);
        if ($resul->rowCount()) {
            while ($row = $resul->fetch(PDO::FETCH_OBJ)) {
                $animales[] = new Animal(
                    $row->foto,
                    $row->descripcion,
                    $row->ID
                );
            }
        }
        return $animales;
    }
   
    public static function adoptar($id){
        $c = new Conexion;
        $conex = $c->getConexion();
        $sql = "DELETE FROM animales WHERE id=$id";
        $result = $conex->exec($sql);
        return $result;
    }
    public static function insertarAnimal($animal){
        $foto = $animal->getFoto();
        $descripcion = $animal->getDescripcion();
        $c = new Conexion;
        $conex = $c->getConexion();
        $sql = 
        "INSERT INTO animales(foto,descripcion) VALUES
        (
        '$foto',
        '$descripcion')";
        $result = $conex->exec($sql);
        return $result;
    }
}