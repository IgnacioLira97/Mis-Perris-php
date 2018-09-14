<!DOCTYPE html>
<html >

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Iniciar Sesión</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/design.css">
    </head>

    <body>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script>
            $(document).ready(function (event) {
                $("#btnLogin").click(function () {
                    $.ajax({
                        url: "acceso.php",
                        type: 'POST',
                        data: $("#formulario").serialize(),
                        success: function (data) {
                            if (data == "OK") {
                                window.location = "servicios.php";
                            } else {
                                alert(data);
                            }
                        }
                    });
                })
            });
        </script>
        <div class="container" id="log-in-form">
            <form id="formulario" method="post">
                <div class="heading">
                    <h1>Iniciar sesión en el sistema</h1>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" placeholder="Nombre de usuario">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="txtPass" name="txtPass" placeholder="Contraseña">
                </div>
                <div class="form-group form-group-btn">
                    <button type="submit" class="btn btn-success btn-lg" id="btnLogin">Log In</button>
                </div>
                
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Recordar en el sistema.</label>
                </div>
            </form>
        </div>
    </body>

</html>
