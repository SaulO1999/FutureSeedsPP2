<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>Future Seeds - Home</title>
</head>

<body>
    <div>
        <ul>
            <li><a class="active" href="#top">Home</a></li>
            <li><a href="#m&v">Mision y Vision</a></li>
            <li><a href="#footer">Contactos</a></li>
            <li><a href="vista_alumno_bienvenida.html">Portal de alumnos</a></li>
            <li><a href="vista_patrocinador_bienvenida.html">Portal de patrocinadores</a></li>
        </ul>
    </div>
    <div>
        <div class="slideshow-container" style="background-color:azure;">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="./Imagenes/unknown.jpg" style="width:100%">
                <div class="text">Edificios aulas de clase</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                    <img src="./Imagenes/uniimg.jpg" style="width:100%">
                <div class="text">Interior de cafetería con techo</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                    <img src="./Imagenes/otherimg.jpg" style="width:100%">
                <div class="text">Campus universitario</div>
            </div>
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
    <div class="div-style2">
        <h2>Sobre nosotros</h2>
        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt illum eligendi nulla impedit eius rerum
            quibusdam officia, alias, enim distinctio totam, architecto quo necessitatibus laborum quasi recusandae?
            Maxime, error consequatur! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus, consequatur
            molestiae tenetur dolorem ex, unde, beatae in quaerat maxime nobis voluptate perspiciatis eius quos?
            Assumenda sequi reprehenderit quibusdam officia velit! Lorem ipsum dolor sit, amet consectetur adipisicing
            elit. Sint illo explicabo ipsa quis amet ipsam, quas exercitationem libero, natus maiores possimus corporis
            nemo. Incidunt, possimus totam saepe cupiditate rem sint!</p>
    </div>
    <div id="m&v" class="div-flex">
        <div class="div-style2">
            <h2>Mision</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem ea odit, quis vero dolorum assumenda cum tempore vitae doloribus quas iste, temporibus repudiandae exercitationem modi porro? Aperiam error nisi incidunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis incidunt odit itaque enim ut. Quae laborum possimus quam aut sunt minus? Ratione harum soluta veritatis itaque dignissimos nulla natus accusamus?</p>
        </div>
        <div class="div-style2">
            <h2>vision</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, aspernatur ad neque soluta quis veniam enim iusto dolor est ea, ab et inventore ut, eius illum reiciendis aliquid accusantium laudantium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, reiciendis tempora dolor optio fugiat aperiam dolorum aliquid enim dicta culpa harum accusamus ab qui. Eius asperiores quisquam iusto deserunt in!</p>
        </div>
    </div>
    <script src="./js/slide.js"></script>
    <footer id="footer" class="footer-class">
        <div>
            <a href="#top"><img class="footer-img" src="./Imagenes/logo-white.png" alt="FutureSeeds-Wlogo"></a>
        </div>
        <div>
            <h3 class="h3-footer">Contactos</h3>
            <p>facebook</p>
            <p>twitter</p>
            <p>telefono institucional</p>
            <p>correo</p>
        </div>
    </footer>
</body>

</html>