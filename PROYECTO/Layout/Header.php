<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/384e8025d3.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="<?php echo $icono; ?>">
    <title>Dulces Sueños</title>
    <link rel="stylesheet" href="<?php echo $style;?>">

</head>
<body>
    <header>
        <div>
        <img src="<?php echo $logo;?>">
        <h2 class="logo">Dulces Sueños</h2>
        </div>
        <input type="checkbox" id="check">
        <label for="check" class="mostrar-menu">
            &#8801
        </label>
        <nav class="menu">
            <a href="<?php echo $inicio;?>" id="botones">Inicio</a>
            <a href="<?php echo $sobrenosotros; ?>" id="botones">Sobre Nosotros</a>
            <a href="<?php echo $ingresar;?>"class="boton-contacto">Ingresar</a>
            <label for="check" class = "esconder-menu">
                &#215
            </label>
        </nav>
    </header>