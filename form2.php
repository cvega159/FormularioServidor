<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
    </head>
    <body>
        <?php
            $datos1=[
                'nombre' =>  $_POST['nombre'],
                'apellidos' => $_POST['apellidos'],
                'correo' =>$_POST['correo'],
                'nombreUsuario' =>  $_POST['nombreUsuario'],
                'contraseña' => $_POST['contraseña'],
                'confContraseña' =>$_POST['confContraseña']
            ];
        ?>
        <form action="form3.php" method="post">
            <fieldset>
                <leyend>Seleccione su marcas de coche favoritas</leyend><br>
                <label><input type="checkbox" name="vehiculo[]" value="Audi">Audi</label><br>
                <label><input type="checkbox" name="vehiculo[]" value="Golf">Golf</label><br>
                <label><input type="checkbox" name="vehiculo[]" value="BMW">BMW</label><br>
                <label><input type="checkbox" name="vehiculo[]" value="Volkswagen">Volkswagen</label><br>
                <label><input type="checkbox" name="vehiculo[]" value="Seat">Seat</label><br>
                <label><input type="checkbox" name="vehiculo[]" value="Mercedes">Mercedes</label><br>
                <input type="hidden" name="nombreUsuario" value="<?php echo $datos1['nombreUsuario']; ?>">
                <input type="hidden" name="contraseña" value="<?php echo $datos1['contraseña']; ?>">
                <input type="hidden" name="confContraseña" value="<?php echo $datos1['confContraseña']; ?>">
                <input type="hidden" name="nombre" value="<?php echo $datos1['nombre']; ?>">
                <input type="hidden" name="apellidos" value="<?php echo $datos1['apellidos']; ?>">
                <input type="hidden" name="correo" value="<?php echo $datos1['correo']; ?>">
                <input type="submit" name="submit"/>
            </fieldset>
        </form>
    </body>
</html>
