<?php
    $conexion=mysqli_connect('localhost','root','','barpapa');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 Fase Cafeteria / Restaurante.</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@149&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/6ec4a4af94.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/logo.png" type="image/icon type">

</head>

<body>
    <div class="container">
        <div class="nav-div" id="menuToggle">

            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>

            <ul class="nav-ul" onclick="showmenu()" id="otroModo">
                <a class="nav-a" href="index.html">HOME</a>
                <a class="nav-a" href="carta.html">CARTA</a>
                <a href="index.html"><img class="nav-logo" src="img/logo2blanco.png" no alt=""></a>
                <a class="nav-a" href="about.html">ABOUT US</a>
                <a class="nav-a" href="#">CONTACTO</a>
            </ul>
        </div>
        <span class="btn_menu">
            <i id="btn_menu" class=" fa fa-bars"></i>
        </span>
        <a href="index.html"><img class="logo" src="img/logo2blanco.png" alt=""></a>
        <div class="pic-1-div">
            <img class="pic-1-inicio" src="img/pic-1.jpg" alt="">
            <!--Estoy entre esta y la de jamon-y-vino.jpeg -->
        </div>

        <?php
        $sql="Select * from comidasdeldia order by id desc limit 1";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
        ?>

        <div class="contenedor-reservas-grid">
            <div class="contenedor-reservas">
                <div class="contenedor-titulo">
                    <h1>MENU DEL DIA</h1>
                </div>
                <article>
                    <img class="img-article-reserva" src='<?php echo $mostrar['imagenes']?>' alt="">
                    <div class="contenedor-hs">
                        <h1><?php echo $mostrar['titulo']?></h1>
                        <h2><?php echo $mostrar['descripcion']?></h2>
                        <button class="btn-reserva"><a class="btn-reserva-a" href='<?php echo $mostrar['enlacemasinfo']?>'>Mas Informacion</a></button>
                        <!-- <button class="btn-reserva"><a  class="btn-reserva-a"href="tel:+34666667835">Llamar ahora</a></button> -->
                    </div>
                </article>
            </div>
        </div>

        <?php
        }
        ?>

        <div class="contenedor-grid">
            <div class="contenedor-article">
                <article>

                    <img class="insta-logo" src="img/insta.png" alt="">
                    <h1>Siguenos en Instagram</h1>
                    <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, consectetur!</h2>
                    <button class="btn-redes"><a class="btn-redes-a" href="#">INSTAGRAM</a></button>
                </article>
            </div>
            <div class="contenedor-article">
                <article>
                    <img class="twitter-logo" src="img/twitter.png" alt="">
                    <h1>Siguenos en Instagram</h1>
                    <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, consectetur!</h2>
                    <button class="btn-redes"><a class="btn-redes-a" href="#">TWITTER</a></button>
                </article>
            </div>
            <div class="contenedor-article">
                <article>
                    <img class="face-logo" src="img/face.png" alt="">
                    <h1>Siguenos en Instagram</h1>
                    <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, consectetur!</h2>
                    <button class="btn-redes"><a class="btn-redes-a" href="#">FACEBOOK</a></button>
                </article>
            </div>
        </div>
        <hr class="hr-fotogaleria">
        <div class="contenedor-fotogaleria">
            <div class="contenedor-imagenes-fotogaleria" id="contenedor-imagenes-fotogaleria">
                <img id="imagenes-fotogaleria" src="img/2.png" alt="">
            </div>
            <div class="contenedor-imagenes-fotogaleria" id="contenedor-imagenes-fotogaleria">
                <img id="imagenes-fotogaleria" src="img/3.png" alt="">
            </div>
            <div class="contenedor-imagenes-fotogaleria" id="contenedor-imagenes-fotogaleria">
                <img id="imagenes-fotogaleria" src="img/4.png" alt="">
            </div>
            <div class="contenedor-imagenes-fotogaleria" id="contenedor-imagenes-fotogaleria">
                <img id="imagenes-fotogaleria" src="img/5.png" alt="">
            </div>
            <div class="contenedor-imagenes-fotogaleria" id="contenedor-imagenes-fotogaleria">
                <img id="imagenes-fotogaleria" src="img/6.png" alt="">
            </div>
            <div class="contenedor-imagenes-fotogaleria" id="contenedor-imagenes-fotogaleria">
                <img id="imagenes-fotogaleria" src="img/1.png" alt="">
            </div>

        </div>
        <div class="contenedor-boton">
            <button class="btn-vercarta"><a class="btn-vercarta-a" href="carta.html">VER TODA LA CARTA</a></button>
        </div>
        <i id="icon-up" class="fas fa-chevron-up"></i>
        <footer>
            <div class="contenedor-footer">
                <div class="contenedor-footer-about">
                    <h2>Sobre Nosotros</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex nemo exercitationem totam eum animi? Ipsa maxime tenetur magni. Magnam molestiae, voluptatem corrupti et veritatis magni!</p>
                    <button class="btn-about"><a href="">Mas Sobre Nosotros</a></button>
                </div>
                <div class="contenedor-footer-media">
                    <li><i class="fab fa-instagram"></i><a href="">INSTAGRAM</a></li>
                    <li><i class="fab fa-facebook"></i><a href="">FACEBOOK</a></li>
                    <li><i class="fas fa-envelope-open-text"></i><a href="">2faserestaurante@2fase.com</a></li>
                    <li><i class="fas fa-phone"></i><a href="">630592491</a></li>
                </div>
                <div class="contenedor-footer-mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2261.7378071908615!2d-4.477544154159265!3d36.708622581138236!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf96725393a1ac640!2sCafeter%C3%ADa%20Restaurante%20Segunda%20Fase!5e0!3m2!1ses!2ses!4v1622395886492!5m2!1ses!2ses"
                        allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </footer>
        <script src="script.js"></script>
    </div>
</body>

</html>