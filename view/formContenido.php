<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= BASE_URL ?>recursos/css/style.css">
    <title>Agregar Contenido</title>
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
<main class="container d-flex flex-column align-items-center">
        <h1 class="vidrio rounded-5 mt-1">Agregar Contenido</h1>
        <form action="<?= BASE_URL ?>index.php/guardarAlta" method="POST" class="form-custom rounded-5 vidrio" enctype="multipart/form-data">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo">

            <label for="comentario">Comentario</label>
            <textarea name="comentario" id="comentario"></textarea>

            <label for="fichero">Seleccione una imagen</label>
            <input type="file" name="fichero">

            <input type="submit" value="Agregar Contenido" name="btnAlta" class="boton">
        </form>
        <a class="boton" href="<?= BASE_URL ?>" >Página principal</a>
    </main>
</body>
<script src="<?= BASE_URL ?>recursos/js/js.js"></script>
</html>