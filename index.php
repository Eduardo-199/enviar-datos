<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    
     <link rel="stylesheet" href="formestilos.css">
    <title>Pedir Cita</title>
</head>
<body>
    <h1>DATOS</h1>

    <form name="enviar" action="recibedatos.php" method="POST" class="form-register" data-netlify="true">

        <h2 class="form__titulo">
            Datos a envíar
        </h2>
        <div class="contenedor-inputs">

            <input type="text" name="nombre" placeholder="Nombre" class="input-48" required>
            <input type="text" name="apellidos" placeholder="Apellidos" class="input-48" required>
            <input type="email" name="correo" placeholder="Correo" class="input-100" required>
            <input type="text" name="telefono" placeholder="N° Telefonico" class="input-100" required>
            
            <textarea name="mensaje" id="mensaje" cols="30" rows="10" class="input-100"
            placeholder="¿Qué trabajo desea?" required></textarea>
            
            <input type="submit" value="Envíar" class="btn-enviar">

            <p class="parrafo">
                Tus datos serán envíados al estilista
            </p>

        </div>

    </form>
</body>

</html>