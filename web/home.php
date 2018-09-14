<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mis_Perris</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/design.css " />  
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">


        <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.js"></script>

        <style>
            .carousel-inner img{
                height: 50%;
                width: 50%;
                margin-left: 25%
            }
        </style>
    </head>

    <body>

        <header>


            <div class="Container">

                <div>                  
                    <?php
                    include_once'menu.php';
                    ?> 
                </div>  

            </div>
        </header>

        <div class="content">
            <section class="main_articles">
                <article class="imgbox">
                    <div> 
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/adoptados/Tom.jpg"   alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Tom</h5>
                                        <p>Desde que adopté a Tom, mi vida cambió.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="img/adoptados/Duque.jpg"  alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Duque</h5>
                                        <p>Duque es un viajero sin limítes, él siempre está conmigo en todas mis aventuras.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img  src="img/adoptados/Apolo.jpg" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Apolo</h5>
                                        <p><font color = "black">El día que conocí a Apolo, </font></p>
                                        <p><font color = "black"> supe que sería mi fiel amigo</font></p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>  

                    <table>
                        <tr>
                            <td class="phone">
                                <div>+ 56 9 987654321</div> 
                            </td> 
                            <td class="Prase1">
                                <b>Rescate y adopción de perros callejeros</b>     
                            </td>
                            <td>
                                <div >
                                    <a href="https://www.facebook.com/"><img src="img/socialfacebook.png" class="socialapps"></a>
                                    <a href="https://plus.google.com/discover"><img src="img/socialplus.png" class="socialapps"></a>
                                    <a href="https://www.instagram.com/?hl=en"><img src="img/social-inst.png" class="socialapps"></a>
                                    <a href="https://twitter.com/"><img src="img/social-twitter.png" class="socialapps"></a>
                                </div> 
                            </td>
                        </tr>   

                    </table>

                    </div>

                </article>
            </section>
        </div>

        <div class="content">
            <section class="main_articles">
                <div class="content-left">

                    <h3>
                        <p>                                   
                            <font face="courier new" class="bold1" >RESCATE</font>
                            <font color = "grey" face="courier new" class="greyText" >ETAPA UNO</font>
                        </p>

                        <h3>_____</h3> 

                        <p>
                            Rescatamos perros en situación de peligro y/o abandono. Los rehabilitamos y los preparamos para buscarles un hogar.
                        </p>

                    </h3>
                    <img src="img/rescate.jpg" class="img-rescate" >


                </div>

                <div class="content-right">
                    <img src="img/crowfunding.jpg" class="img-comida" alt="">
                    <h3>
                        <font face="courier new" class="bold" >CROWDFUNDING</font>
                        <font color = "grey" face="courier new" class="greyText" >FINANCIAMIENTO</font>
                    </h3>

                    <h3>_____</h3>

                    <p>
                        Sigue nuestras redes sociales para informate acerca de las diversas campañas actividades que realizamos para obtener financiamiento para seguir ayudando.
                    </p>

                    <h3>
                        <button class="button"  type="button" onclick="alert('*List of campaign*')">CAMPAÑAS</button>   
                    </h3>
                </div>


                <div class="main_articles pad-top" align="center">
                    <h3>
                        <?php
                        echo "";
                        echo "<br>"; //* Esto es un salto de linea
                        echo "<br>";
                        echo "";
                        ?>
                        <font face="courier new" class="greyTextRight"  >¡REVISA NUESTRA GALERÍA DE PERROS ADOPTADOS!</font>
                        <?php
                        echo "";
                        echo "<br>";
                        echo "";
                        ?>

                    </h3>
                </div>


                <div class="main_articles" align="center">
                    <a data-fancybox="gallery" href="img/rescatados/1.jpeg"><img src="img/rescatados/1 thumb.jpeg"></a>
                    <a data-fancybox="gallery" href="img/rescatados/2.jpeg"><img src="img/rescatados/2 thumb.jpeg"></a>
                    <a data-fancybox="gallery" href="img/rescatados/3.jpeg"><img src="img/rescatados/3 thumb.jpeg"></a>
                    <a data-fancybox="gallery" href="img/rescatados/4.jpeg"><img src="img/rescatados/4 thumb.jpeg"></a>
                    <a data-fancybox="gallery" href="img/rescatados/5.jpeg"><img src="img/rescatados/5 thumb.jpeg"></a>
                    <a data-fancybox="gallery" href="img/rescatados/6.jpeg"><img src="img/rescatados/6 thumb.jpeg"></a>
                    <a data-fancybox="gallery" href="img/rescatados/7.jpeg"><img src="img/rescatados/7 thumb.jpeg"></a>
                </div>



            </section>
        </div>

        <div>
            <?php
            echo "";
            echo "<br>"; //* Esto es un salto de linea
            echo "<br>";
            echo "";
            ?>
            <footer align="center">
                <font>Desarrollo web y mobile</font>
            </footer>  

        </div>

    </body>
</html>
