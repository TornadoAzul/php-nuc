<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>
        Mi información
    </h1>

    <?php
        echo "<p>Emmanuel Alicea Rodríguez</p>";
        echo "<p>ealicea5633@stu.nuc.com</p>";

        // Esta es mi información personal.
    ?>



    <h1>
        Información de PHP
    </h1>

    <?php
        echo "<p>Versión de PHP: " . phpversion() . "</p>";
        echo "<p>Sistema: " . PHP_OS . "</p>";
        echo "<p>Server API: " . php_sapi_name() . "</p>";
        echo "<p>Loaded Configuration File: " . php_ini_loaded_file() . "</p>";
        // Aquí información básica requerida.
    ?>

    <h1>
        Más detalles
    </h1>

    <?php
        phpinfo(INFO_GENERAL | INFO_ENVIRONMENT | INFO_VARIABLES);
        // Aquí toda la información de PHP requerida.
    ?>

</body>
</html>