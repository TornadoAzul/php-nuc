<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 2.2 A</title>
</head>
<body>
    <?php
        $edad = 16;
        $mayordeedad = 17;

        $nombre = "Emmanuel Alicea Rodríguez";
        $esmayor = "El usuario es mayor de edad.";
        echo "<h1>" . $nombre . "</h1>";
        echo "<p> Su edad es: <b>" . $edad . "</b>.</p>";
        echo $edad > $mayordeedad, "<p>" . $esmayor . "</p>";
    ?>
</body>
</html>