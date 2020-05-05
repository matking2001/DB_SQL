<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
