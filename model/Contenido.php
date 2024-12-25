<?php
include "Conexion.php";
class Contenido
{
    private $titulo;
    private $fecha;
    private $comentario;
    private $imagen;
    private $id;
    function __construct($titulo, $fecha, $comentario, $imagen, $idP = -1)
    {
        $this->titulo = $titulo;
        $this->fecha = $fecha;
        $this->comentario = $comentario;
        $this->imagen = $imagen;
        $this->id = $idP;
    }
    function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    function getTitulo()
    {
        return $this->titulo;
    }
    function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
    function getFecha()
    {
        return $this->fecha;
    }
    function setComentario($comentario)
    {
        $this->comentario = $comentario;
    }
    function getComentario()
    {
        return $this->comentario;
    }
    function setImagen($imagen)
    {
        $this->imagen= $imagen;
    }
    function getImagen()
    {
        return $this->imagen;
    }

    function getId(){
        return $this->id;
    }
    public static function getIDs(){
        $IDs = array();
        $c = new Conexion();
        $conex = $c->getConexion();
        $sql = "Select * FROM contenidos";
        $resul = $conex->query($sql);
        if ($resul->rowCount()) {
            while ($row = $resul->fetch(PDO::FETCH_OBJ)) {
                $IDs[] = $row->id;
            }
        }
        return $IDs;
    }
    public static function getContenidos()
    {
        $contenidos = array();
        $c = new Conexion();
        $conex = $c->getConexion();
        $sql = "Select * FROM contenidos";
        $resul = $conex->query($sql);
        if ($resul->rowCount()) {
            while ($row = $resul->fetch(PDO::FETCH_OBJ)) {
                $contenidos[] = new Contenido(
                    $row->titulo,
                    $row->fecha,
                    $row->comentario,
                    $row->imagen,
                    $row->ID
                );
            }
        }
        return $contenidos;
    } 
    public static function insertarContenido($contenido){
        $titulo = $contenido->getTitulo();
        $comentario = $contenido->getComentario();
        $imagen = $contenido->getImagen();
        $fecha = $contenido->getFecha();
        $c = new Conexion;
        $conex = $c->getConexion();
        $sql = 
        "INSERT INTO contenidos(titulo,comentario,fecha,imagen) VALUES
        (
        '$titulo',
        '$comentario',
        '$fecha',
        '$imagen')";
        $result = $conex->exec($sql);
        return $result;
    }
}