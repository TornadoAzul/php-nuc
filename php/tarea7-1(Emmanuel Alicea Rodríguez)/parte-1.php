<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentación PHP (Parte 1)</title>
</head>
<body>
    <h1>
        Documentación de proyecto.
    </h1>

    <?php
        // a. Versión PHP
        echo "<b>Versión PHP: </b>" . phpversion() . "<br><br>";

        // b. System
        echo "<b>Sistema: </b>" . php_uname() . "<br><br>";

        // c. Configuration File (php.ini) Path
        echo "<b>Ruta del archivo de configuración (php.ini): </b>" . php_ini_loaded_file() . "<br><br>";

        // d. Versión Apache (Si estás utilizando Apache)
        echo "<b>Versión Apache: </b>" . apache_get_version() . "<br><br>";

        // e. IPv6 Support
        $ipv6Support = (defined('AF_INET6') && filter_var('::1', FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) ? 'Sí' : 'No';
        echo "<b>Soporte IPv6: </b>" . $ipv6Support . "<br><br>";
    ?>


    <?php
        phpinfo(INFO_GENERAL | INFO_ENVIRONMENT | INFO_VARIABLES);
    ?>
</body>
</html>