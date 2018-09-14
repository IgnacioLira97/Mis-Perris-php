<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <style>
    .carousel-inner img{
        height: 50%;
        width: 50%;
        margin-left: 25%
    }
        </style>
                <link rel="stylesheet" href="CSS/estilo.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                <script src="js/slider.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <link rel="stylesheet" href="CSS/estilo.css">
        <script src="js/slider.js"></script>
        <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.1/jquery.fancybox.min.js"></script>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" media="screen" href="css/design.css " />  
        <title></title>
    </head>
    <body>
        <header>
            <div class="Container">

                <div>
                    <?php
                    include_once'./menu_serlogout.php'
                    ?> 
                  
                     
                </div>  
                
        </header>

        <div class="content">
            <section class="main_articles">
                <article >
                    <div class="imgbox">
                        <img src="img/perro.png" class="center-fit"/>  
                        </div>  
                        <table>
                            <tr>
                                <td>
                                    <nav id="Nav" >
                                        
                                    

                                        <a class="navcenter"  href="ag_user.php">Agregar Usuario</a>
                                        
                                        <a  class="navcenter" href="agregar.php">Agregar Perros</a>
                                            
                                        
                                                                                            
                                    </nav> 
                                </td>
                            </tr>   

                        </table>

                    </div>

                </article>
            </section>
        </div>
    </body>
</html>
