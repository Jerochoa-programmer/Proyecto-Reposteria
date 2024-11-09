<section id="banner">
        <div class="contenido-banner">
            <h3><span>Dulces Sueños: </span>La magia de lo dulce,<br> al alcance de tus sueños.</h3>
        </div>
    </section>
    <section id="personas">
        <div>
            <img src="./images/trabajador1.jpg">
            <h4>Juliana Rodriguez</h4>
            <p>Nuestra Repostera Estrella</p>
            <a href="Layout/juliana.php" class="boton-saber-mas">Conocer mas sobre Juliana</a>
        </div>
        <div>
            <img src="./images/trabajador2.jpg">
            <h4>Pablo Menendez</h4>
            <p>Nuestro auxiliar de resposteria</p>
            <a href="Layout/pablo.php" class="boton-saber-mas">Conocer mas sobre Pablo</a>
        </div>
    </section>
    <section id="iconos">
        <div id="contenido-iconos">
            <div id="icono-estrella">
                <i class="fa-solid fa-star fa-5x"></i>
                <h4>Servicios</h4>
                <p>Atendemos tus eventos</p>
            </div>
            <div id="icono-carrito">
                <i class="fa-solid fa-cart-shopping fa-5x"></i>
                <h4>Domicilios</h4>
                <p>Llegamos hasta la puerta de tu casa</p>
            </div>
            <div id="icono-libro">
                <i class="fa-solid fa-book fa-5x"></i>
                <h4>Cursos</h4>
                <p>Conviértete en repostero/a ya</p>
            </div>
        </div>
        <div class="boton-iconos">
            <a href="<?php echo $servicios; ?>" class="boton-conocer-mas">Saber más</a>
        </div>
    </section>
    <section id="contacto">
        <h4>¡Haz parte de nuestro equipo!</h4>
        <form action="#">
            <div class="datos-form">
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
            </div>
            <div class="boton-formulario">
                <button type="submit" class="boton-form">Enviar datos</button>
            </div>
        </form>
    </section>
</body>