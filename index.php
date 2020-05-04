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
        <form  method="post">
            <h1><img class="logo" src="https://www.tekla.io/wp-content/uploads/2019/09/logo-1162901_1920.png"></h1>
            <input class="datos" type="text" name="nombre1" placeholder="Primer nombre">
            <input class="datos" type="text" name="nombre2" placeholder="segundo nombre">
            <input class="datos" type="text" name="apellido1" placeholder="Primer apellido">
            <input class="datos" type="text" name="apellido2" placeholder="segundo apellido">
            <input class="correo" type="text" name="correo" placeholder="correo">
            <input class="pw" type="password" name="pw" placeholder="contraseña">
            <input class="d-p" type="text" name="fecha" placeholder="DD/MM/YY">
            <div id="sexo" >
                <label for="">sexo</label>
                <select name="sexo" id="">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>

            <br>
            <input class="btn-primary boton" type="submit" name="validar" value="Registrar" >
        </form>
    </div>

    <?php 

        include('insertar.php');

    ?>
</body>
</html>
