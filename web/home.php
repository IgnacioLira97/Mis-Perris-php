<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mis_Perris</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/design.css " />  
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>

    <body>

        <header>
            <div class="Container">
                <img src="img/logo.png" alt="logo"  > 
                <div>
                    <?php
                    include_once'menu.php'
                    ?> 
                </div>    
        </header>

        <div class="content">
            <section class="main_articles">
                <article >
                    <div class="imgbox">
                        <img src="img/perro.png" class="center-fit"/>
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
                        <font color = "grey" face="courier new" class="greyTextRight" >FINANCIAMIENTO</font>
                    </h3>

                    <h3>_____</h3>

                    <p>
                        Sigue nuestras redes sociales para informate acerca de las diversas campañas actividades que realizamos para obtener financiamiento para seguir ayudando.
                    </p>

                    <h3>
                        <button class="button"  type="button" onclick="alert('*List of campaign*')">CAMPAÑAS</button>   
                    </h3>



                </div>
            </section>

        </div>

        <footer>
            Desarollo Web y Mobile
        </footer>   



    </div>    

</body>
</html>
