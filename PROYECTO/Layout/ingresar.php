<?php
    $style = "../style.css";
    $icono = "../images/icono.ico";
    $logo = "../images/logo1.png";
    $inicio ="../index.php";
    $ingresar ="./ingresar.php";
    $sobrenosotros ="./sobre-nosotros.php";
    require_once("Header.php");
?>
<section id="ingresar">
        <h1>Bienvenido</h1>
        <h4>Iniciar Sesion</h4>
        <form action="#">
            <div class="datos-form1">
                <div class="usuario">
                    <label for="usuario">Usuario</label>
                    <input type="text" name="usuario" id="usuario" required placeholder="Usuario">
                </div>
                <div class="contraseña">
                    <label for="contraseña">Contraseña</label>
                    <input type="password" name="contraseña" id="contraseña"  required placeholder="Contraseña">
                </div>
            </div>
            <div class="boton-formulario1">
                <button type="submit" class="boton-form1">Ingresar</button>
            </div>
            
        </form>
        <div class="registrarse">
            <a href="./registrarse.php" class="boton-registrarse">¿No estás registrado?</a>
        </div>
    </section>
</body>
<?php
require 'Footer.php';
?>