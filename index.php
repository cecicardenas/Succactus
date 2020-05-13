<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
        <!--<head add_header X-Frame-Options SAMEORIGIN  name="X-Frame-Options" value="SAMEORIGIN">-->
        <meta charset="UTF-8">
        <title>SUCCACTUS🌵</title>
        <link  rel="icon"   href="images/favicon.ico" type="image/png" />
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-Frame-Options" content="SAMEORIGIN">


    </head>
    <body>
        <?php
        //header ('always set X-Frame-Options "SAMEORIGIN"');
        ?>

        <div class="heading">
            <h1><b>SUCCACTUS</b></h1>
            <hr>
            <h2>Suculentas 🌵 Cactus</h2>
        </div>


        <div class="banner">
            <ul>
                <li><a href="index.php">🏡Inicio</a></li>
                <li class="dropdown">
                    <a  class="dropbtn" href="javascript:void(0)">Tienda</a><!--onmouseover="mOver(this)" onmouseout="mOut(this)"-->
                    <div class="dropdown-content">
                        <a href="#">Plantas chicas</a>
                        <a href="#">Plantas de jardin</a>
                        <a href="#">Maceteros de Madera</a>
                        <a href="#">Fertilizantes</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="dropbtn" href="javascript:void(0)">Quienes somos</a>
                    <div class="dropdown-content">
                        <a href="#">Misión y Misión</a>
                        <a href="#">Valores</a>
                    </div>
                </li>
                <li><a href="#">Cuidados</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>

        <br>
        <div>
            <br>
        </div>
        <br>

        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 6</div>
                <img src="images/img5.jpg" style="width:100%">
                <div class="text">Plantas de Jardin</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 6</div>
                <img src="images/img9.jpg" style="width:100%">
                <div class="text">Variendades de Cactus</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 6</div>
                <img src="images/img2.jpg" style="width:100%">
                <div class="text">Plantas pequeñas</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 6</div>
                <img src="images/img3.jpg" style="width:100%">
                <div class="text">Esenciales para el hogar</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 6</div>
                <img src="images/img4.jpg" style="width:100%">
                <div class="text">Variedades de formas</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 6</div>
                <img src="images/img6.jpg" style="width:100%">
                <div class="text">Diferentes tonalidade</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
        <script type="text/javascript" src="js/jquery.js"></script>

        <br>

        <div class="">

        </div>


        <div class="pie">

            <h3>Contactanos</h3>
            <hr>
            <table class="contacto">
                <tr>
                    <th><p>Nos puedes encontrar en:</p>
                <p>Av. Miguel Hidalgo</p>
                <p>Tel. (55) 23444353</p>
                <p>Cel. (55) 54654732</p>
                <p>Email. ventas@sucactus.com</p></th>

                <th>
                  <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/237/cactus_1f335.png" alt="cactus_1f335"></img>
                </th>

                <th><p>Horario</p>
                <p>Lunes a Viernes</p>
                <p>9:00 am - 7:00 pm</p></th>

            <th>
              <img class="map" src="images/map.jpg" width= "500" height= "350"; alt="mapa de ubicacion"></img>
            </th>
                </tr>
            </table>
        </div>
        <div>
          <center><p class="copyright">Copyright © 2020 🌵SUCCACTUS🌸, Inc</p></center>
          <hr>
        </div>

    </body>
</html>
