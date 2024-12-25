<?php
class ContenidoController
{

    public function index()
    {
        $animales = Animal::getAnimales();
        $rowset = Contenido::getContenidos();
        require("view/index.php");
    }

    public function mostrarFormAnimal()
    {
        require("view/altaVista.php");
    }
    public function alta()
    {
        require("view/formContenido.php");
    }
    public function guardarAlta()
    {
        $titulo = $_POST["titulo"];
        $comentario = $_POST["comentario"];
        $fecha = date("Y-m-d H:i:s");
        $imagenNombre =  basename($_FILES["fichero"]["name"]);
        $rutaDestino = "imagenes/" . $imagenNombre;
        if (move_uploaded_file($_FILES["fichero"]["tmp_name"], $rutaDestino)) {
            $contenido = new Contenido($titulo, $fecha, $comentario, $imagenNombre);
            $resultado = Contenido::insertarContenido($contenido);
            if ($resultado == 1) {
                header("Location:" . BASE_URL);
            } else {
                header("Location:" . BASE_URL);
            }
        } else {
            echo "fracaso";
        }
    }
    public function guardarAltaAnimal()
    {
        $descripcion = $_POST["descripcion"];
        echo $descripcion;
        $imagenNombre =  basename($_FILES["fichero"]["name"]);
        echo $imagenNombre;
        $rutaDestino =  "imagenes/" . $imagenNombre;
        move_uploaded_file($_FILES["fichero"]["tmp_name"], $rutaDestino);
        $animal = new Animal($imagenNombre, $descripcion);
        $resultado = Animal::insertarAnimal($animal);
        echo $resultado;
        if ($resultado == 1) {
            header("Location:" . BASE_URL);
        } else {
            header("Location:" . BASE_URL);
        }
    }
    public function adoptar()
    {
        $id = $_POST["id"];
        $r = Animal::adoptar($id);
        if ($r == 1) {
            header("location:" . BASE_URL);
        } else {
            echo 'Error al adoptar';
        }
    }
    public function mostrarFormLogin()
    {
        require("view/login.php");
    }
    public function validar()
    {
        $usuario = $_POST['login'];
        $login = $_POST['password'];
        $r = Usuario::validar($usuario, $login);
        if ($r != 0) {
            session_start();
            $_SESSION["usuario"] = $_POST["login"];
            header("location:" . BASE_URL);
        } else {
            echo "Creedenciales inválidas";
        }
    }
    public function cerrarSesion()
    {
        session_start();
        session_destroy();
        header("location:" . BASE_URL);
    }
}
