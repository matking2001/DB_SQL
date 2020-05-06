<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <title>Document</title>
</head>
<body>
    <div class="formulario">
        <form  method="POST">
            <h1 class="modal-dialog text-center" >Form Registro</h1>
            <input class="datos" type="text" name="nombre1" placeholder="Primer nombre">
            <input class="datos" type="text" name="nombre2" placeholder="segundo nombre">
            <input class="datos" type="text" name="apellido1" placeholder="Primer apellido">
            <input class="datos" type="text" name="apellido2" placeholder="segundo apellido">
            <input class="correo" type="email" name="correo" placeholder="correo">
            <input class="pw" type="password" name="pw" placeholder="contraseña">
            <input class="d-p" type="text" name="fecha" placeholder="Fecha nacimiento YYYY/MM/DD">
            <div id="sexo" >
                <label for="">sexo</label>
                <select name="sexo" id="">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <<option value="Otro">Otro</option>
                </select>
            </div>

            <div class="ch">
                <input type="checkbox" class="ck" name="radio" id=""><label for="" class="l-radio">Acepta <a href="https://www.masquenegocio.com/2016/05/16/ecommerce-pagina-web/">terminos y condciones?</a> </label>
            </div> 

            <br>
            <input class="btn-danger boton" type="submit" name="validar" value="Registrar" >
        </form>
    </div>

    <?php

        include('insertar.php');

    ?>
</body>
</html>
