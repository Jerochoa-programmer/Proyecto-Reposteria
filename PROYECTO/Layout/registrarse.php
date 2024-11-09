<?php
    $style = "../style.css";
    $icono = "../images/icono.ico";
    $logo = "../images/logo1.png";
    $inicio ="../index.php";
    $ingresar ="./ingresar.php";
    $sobrenosotros ="./sobre-nosotros.php";
    require_once("Header.php");
?>
<section id="registrarse">
        <h1>Bienvenido</h1>
        <h4>Registrate</h4>
        <form action="#">
            <div class="datos-form2">
                <div class="nombre">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" required placeholder="Nombre">
                </div>
                <div class="email">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required placeholder="Email">
                </div>
                <div class="telefono">
                    <label for="telefono">Telefono</label>
                    <input type="tel" name="telefono" id="telefono" required placeholder="Telefono">
                </div>
                <div class="usuario">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usuario" required placeholder="Usuario">
                </div>
                <div class="contraseña">
                    <label for="contraseña">Contraseña</label>
                    <input type="password" name="contraseña" id="contraseña" required placeholder="Contraseña">
                </div>
            </div>
            <div class="boton-formulario2">
                <button type="submit" class="boton-form2">Registrarse</button>
            </div>
        </form>
    </section>
</body>
<?php
require 'Footer.php';
?>