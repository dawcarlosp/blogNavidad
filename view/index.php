<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= BASE_URL ?>recursos/css/style.css">
</head>

<body>
    <div class="snowflakes" aria-hidden="true">

        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❆
        </div>
        <div class="snowflake">
            ❄
        </div>
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❆
        </div>
        <div class="snowflake">
            ❄
        </div>
        <div class="snowflake">
            ❅
        </div>
        <div class="snowflake">
            ❆
        </div>
        <div class="snowflake">
            ❄
        </div>
    </div>

    <header class="m-5 rounded-5 vidrio">
        <ul class="d-flex flex-wrap align-items-center justify-content-center">
            <?php
            session_start();
            if (isset($_SESSION["usuario"])) {
                echo '<li><p>¡Bienvenido ' . htmlspecialchars($_SESSION["usuario"]) . '!</p></li>';
                echo '<li><a class="boton" href="' . BASE_URL . 'index.php/cerrarSesion/">Cerrar sesión</a></li>';
            } else {
                echo '<li><a class="boton" href="' . BASE_URL . 'index.php/login/">Iniciar Sesión</a></li>';
            }
            ?>
            <li>
                <a href="
        <?php echo BASE_URL . 'index.php/alta/' ?>
        " class="boton">Agregar Contenido</a>
            </li>
            <li>
                <select id="tema" class="boton">
                    <option value="">Tema</option>
                    <option value="navidad">Navidad</option>
                    <option value="semanaSanta">Semana Santa</option>
                    <option value="newYear">Año nuevo</option>
                    <option value="verano">Verano</option>
                </select>
            </li>
            <li>
                <p>Un poco de ambiente</p>
                <audio controls>
                    <source src=" <?php echo BASE_URL ?>recursos/audios/vi.mp3" type="audio/mpeg">
                </audio>
            </li>
        </ul>
    </header>
    <main class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-3 text-center p-5">
                <aside class="vidrio rounded-5">

                    <?php
                    if ($_SESSION["usuario"] == "animalia") {
                        echo "<a class='boton' href='" . BASE_URL . "index.php/altaAnimal'>Agregar nuevo animal</a>";
                    }

                    ?>
                    <h1>Animales</h1>
                    <section class="d-flex flex-column align-items-center">
                        <?php foreach ($animales as $row): ?>
                            <article class="rounded-5 vidrio">
                                <img src="<?php
                                            echo "imagenes/" . $row->getFoto()
                                            ?>" alt="notFound" class="rounded-5 foto">
                                <p><?php echo $row->getDescripcion() ?></p>
                                
                                <?php
                                if ($_SESSION["usuario"] == "animalia") {
                                    echo '<form action="' . BASE_URL . 'index.php/adoptar" method="POST">
                                    <input type="hidden" name="id" value="' . $row->getId() . '">
                                    <button type="submit" class="boton">Adoptar</button>
                                  </form>';
                                }

                                ?>
                            </article>
                        <?php endforeach; ?>
                    </section>
                </aside>
            </div>
            <div class="col-12 col-lg-9 text-center p-5">
                <h1 class="vidrio rounded-5">Blog</h1>

                <section class="d-flex flex-column align-items-center vidrio rounded-5">
                    <?php foreach ($rowset as $row): ?>
                        <article class="rounded-5 vidrio">
                            <h2><?php echo $row->getTitulo() ?></h2>
                            <h3><?php echo $row->getFecha() ?></h3>
                            <p><?php echo $row->getComentario() ?></p>
                            
                            <img src="<?php
                                        echo "imagenes/" . $row->getImagen()
                                        ?>" alt="notFound" class="rounded-5 foto">
                        </article>
                    <?php endforeach; ?>
                </section>

            </div>
        </div>
    </main>
</body>
<script>
    function eliminar() {
        var respuesta = confirm("Estas seguro que desea eliminar?");
        return respuesta
    }
</script>
<script src="<?= BASE_URL ?>recursos/js/js.js"></script>

</html>