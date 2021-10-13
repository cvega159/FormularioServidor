<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>
    </head>
    <body>
        <?php
            $datos=[
                'nombreUsuario' =>  $_POST['nombreUsuario'],
                'contraseña' => $_POST['contraseña'],
                'confContraseña' =>$_POST['confContraseña']
            ];
        ?>
        <form action="form2.php" method="post">
            <fieldset>
            <leyend>Nombre</leyend><br>
            <input type="text" name="nombre" placeholder="nombre"><br><br>
            <leyend>Apellidos</leyend><br>
            <input type="text" name="apellidos" placeholder="apellidos"><br><br>
            <leyend>Correo electronico</leyend><br>
            <input type="text" name="correo" placeholder="correo electronico"><br><br>
            <!--<input type="hidden" name="datos" value=""> -->
            <input type="hidden" name="nombreUsuario" value="<?php echo $datos['nombreUsuario']; ?>">
            <input type="hidden" name="contraseña" value="<?php echo $datos['contraseña']; ?>">
            <input type="hidden" name="confContraseña" value="<?php echo $datos['confContraseña']; ?>">
            <input type="hidden" name="datos[]" value="<?php echo $datos; ?>">
            <input type="submit" value="submit"/>
            </fieldset>
        </form>
    </body>
</html>
