<?php
        echo 'Resumen de los datos introducidos en el formulario'.'<br>';
        echo 'Nombre de usuario: ' . $_POST['nombreUsuario'] .'<br>';
        echo 'Contraseña: ' . $_POST['contraseña'] .'<br>';
        echo 'Confirmar contraseña: ' . $_POST['confContraseña'] .'<br>';
        echo 'Nombre: ' . $_POST['nombre'] .'<br>';
        echo 'Apellidos: ' . $_POST['apellidos'] .'<br>';
        echo 'Correo electronico: ' . $_POST['correo'] .'<br>';
        echo 'Seleccion: ';
        foreach($_POST['vehiculo'] as $seleccion) {
            echo $seleccion . ' ';
        }
