
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <title> Ejercicio 2 - Practica PHP </title>
</head>
<body>
    <h1>Contacto</h1>
    <form method="post" id="form1" name="form1" action="correo.php"  target="_self">
        <fieldset>
         <input type="text" name="nombre" placeholder="Nombre" />
         <input type="email" name="email" placeholder="email" />
         <input type="text" name="asunto" placeholder="asunto" />
         <textarea placeholder="mensaje"  name="msg"></textarea>
        <input type="submit" value="ENVIAR"/>
        </fieldset>
    </form>

</body>