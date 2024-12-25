<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, heigth=device-heigth, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>recursos/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Alta Animal</title>
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
        <h1 class="text-white">Alta</h1>
        <form action="<?= BASE_URL ?>index.php/guardarAltaAnimal/" method="POST" class="container d-flex flex-column align-items-center text-white" enctype="multipart/form-data">
            <label for="fichero">Foto</label>
            <input type="file" name="fichero">

            <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion">

            <input type="submit" value="Agregar nuevo animal" name="btnAlta" class="boton">
        </form>
        <a class="boton" href="<?= BASE_URL ?>" >Volver a inicio</a>

</main>
</body>

</html>