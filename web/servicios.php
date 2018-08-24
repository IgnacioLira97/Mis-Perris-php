<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" media="screen" href="css/design.css " />  
        <title></title>
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
                        <img src="img/puppy.png" class="center-fit"/>
                        <table>
                            <tr>
                                <td>
                                    <nav id="Nav" >
                                        <a href="agregar.php">Agregar</a>
                                        <a href="listar.php">Eliminar/Modificar/Listar</a>                                        
                                        <a href="listar.php">Listar</a>
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
