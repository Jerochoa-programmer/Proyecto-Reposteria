<?php
    $style = "../style.css";
    $icono = "../images/icono.ico";
    $logo = "../images/logo1.png";
    $inicio ="../index.php";
    $ingresar ="./ingresar.php";
    $sobrenosotros ="./sobre-nosotros.php";
    require_once("Header.php");
?>
<section id="servicios">
            <div id="icono-estrella">
                <i class="fa-solid fa-star fa-5x"></i>
                <h4>Servicios</h4>
                <p>En Dulces Sueños, ofrecemos una amplia gama de servicios personalizados, desde la creación de pasteles únicos para eventos especiales hasta mesas de postres diseñadas a medida. Nuestro compromiso es hacer realidad tus sueños más dulces con creaciones que combinan sabor y arte.</p>
            </div>
</section>
<section id="Domicilios">
            <div id="icono-carrito">
                <i class="fa-solid fa-cart-shopping fa-5x"></i>
                <h4>Domicilios</h4>
                <p>L¡Lleva la magia de Dulces Sueños directamente a tu puerta! Disfruta de nuestros postres desde la comodidad de tu hogar o haz un regalo especial a alguien más. Ofrecemos servicio a domicilio para que no te pierdas ningún bocado de nuestras deliciosas creaciones.</p>
            </div>
</section>
<section id="Cursos">
            <div id="icono-libro">
                <i class="fa-solid fa-book fa-5x"></i>
                <h4>Cursos</h4>
                <p>¿Te gustaría aprender los secretos de la repostería? Únete a nuestros cursos y descubre las técnicas que usamos para crear nuestras delicias. Desde principiantes hasta aficionados avanzados, tenemos un espacio para ti en nuestras clases personalizadas.</p>
            </div>
</section>
</body>
<?php
require 'Footer.php';
?>