<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 3.1</title>
</head>
<body>

    // Emmanuel Alicea Rodríguez
    // Tarea 3.1 (INTE 3510)


    <h1>Número de mes</h1>

    <?php
        $meses = array (0,1,2,3,4,5,6,7,8,9,10,11,12);
        $mesNúmero = $meses[15];

        switch ($mesNúmero) {
            case 1:
                $nombreMes = "enero";
                break;
            case 2:
                $nombreMes = "febrero";
                break;
            case 3:
                $nombreMes = "marzo";
                break;
            case 4:
                $nombreMes = "abril";
                break;
            case 5:
                $nombreMes = "mayo";
                break;
            case 6:
                $nombreMes = "junio";
                break;
            case 7:
                $nombreMes = "julio";
                break;
            case 8:
                $nombreMes = "agosto";
                break;
            case 9:
                $nombreMes = "septiembre";
                break;
            case 10:
                $nombreMes = "octubre";
                break;
            case 11:
                $nombreMes = "noviembre";
                break;
            case 12:
                $nombreMes = "diciembre";
                break;
            default:
                $nombreMes = "(Error)";
                break;
        }

        echo "<h3>El número $mesNúmero es el mes de $nombreMes.</h3>";
    ?>


</body>
</html>