<?php

    include("conexion.php");

    if ($conect){
        echo "Conexion exitosa";
    }else{
        echo "Error con la conexion";
    }

    if (isset($_POST['validar'])){
        if(isset($_POST['nombre1']) && !empty($_POST['nombre1']) && strlen($_POST['nombre2']) >=0 && isset($_POST['apellido1']) && !empty($_POST['apellido2'])
        && isset($_POST['correo']) && !empty($_POST['correo']) && isset($_POST['pw']) && !empty($_POST['pw']) && isset($_POST['fecha'])
        && !empty($_POST['fecha']) && isset($_POST['sexo']) && !empty($_POST['sexo'])){

            $nombre1= trim($_POST['nombre1']);
            $nombre2= trim($_POST['nombre2']);
            $apellido1= trim($_POST['apellido1']);
            $apellido2= trim($_POST['apellido2']);
            $correo= trim($_POST['correo']);
            $pw= trim($_POST['pw']);
            $sexo= trim($_POST['sexo']);
            $fecha= trim($_POST['fecha']);
            $datos= "INSERT INTO `registro`( `nombre1`, `nombre2`, `apellido1`, `apellido2`, `correo`, `contraseña`, `sexo`, `fecha_nac`) VALUES
            ('$nombre1','$nombre2','$apellido1','$apellido2','$correo','$pw','$sexo','$fecha')";
            $reg= mysqli_query($conect,$datos);
            if ($reg){
              echo " registro exitoso";
            }else{
              echo " error al registrace";
            }

        }else{
          echo "favor completar los datos";
        }
      }

?>
