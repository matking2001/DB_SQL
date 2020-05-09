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
    <div class="container">
        <form class="formulario"  method="POST">
            <h1 class="modal-dialog text-center" >Form Registro</h1>
            <input class="datos" type="text" name="nombre1" placeholder="Primer nombre"    maxlength="20" size="20" required>
            <input class="datos" type="text" name="nombre2" placeholder="segundo nombre"  maxlength="20" size="20">
            <input class="datos" type="text" name="apellido1" placeholder="Primer apellido"  maxlength="20" size="20" required>
            <input class="datos" type="text" name="apellido2" placeholder="segundo apellido"  maxlength="20" size="20" required>
            <input class="correo" type="email" name="correo" placeholder="correo" required>
            <label class="label" >Celular:</label>
            <input class="pw" type="number" name="numero" id="" placeholder="example 3005507242" min="0">
            <label class="label" >contraseña:</label>
            <input class="pw" type="password" name="pw" placeholder="**********" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
            <label class="label" >Fecha de nacimiento:</label>
            <input class="d-p" type="text" name="fecha" placeholder="YYYY/MM/DD">
            <div class="Dep">
                <label class="label" for="">Departamento:</label>
                <select name="departamento" id="">
                    <option value="Atlantico">Atlantico</option>
                    <option value="Antioquia">Antioquia</option>
                    <option value="Santa-marta">Santa marta</option>
                    <option value="Valle">Valle</option>
                    <option value="Bolivar">Bolivar</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
            <div id="sexo" >
                <label for="">sexo</label>
                <select name="sexo" id="">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
            <div class="radio">
                <label class="label" for="">Eres mayor de edad?</label>
                <input type="radio" name="radio" value="si" checked ><label for="">si</label>
                <input type="radio" name="radio" value="no"><label for="">no</label>
            </div>
            
            <div class="condicion">
                <label class="label" id="ter" for="">Terminos:</label>
                <textarea name="" id="text" cols="30" rows=10" readonly>Esta consiente que podremos acceder a todos sus registros en base de datos existentes</textarea>
            </div>

            
            <div class="gustos">
                <label class="label" for="">Pasatiempo:</label>
                <select name="gusto" id="gusto">
                    <option value="Deportes">Deportes</option>
                    <option value="Musica">Musica</option>
                    <option value="Lectura">Lectura</option>
                    <option value="Gaming">Gaming</option>
                    <option value="Otro">Otro</option>
                </select>
            
            </div>

            <div class="ch">
                <input type="checkbox" class="ck" name="ck" id=""><label for="" class="l-radio">Acepta <a href="https://www.masquenegocio.com/2016/05/16/ecommerce-pagina-web/">terminos y condciones?</a> </label>
            </div> 

            <br>
            <input class="btn-outline-danger  boton" type="submit" name="validar" value="Registrar" >
        </form>
    </div>

    <?php

        include('insertar.php');

    ?>
</body>
</html>
