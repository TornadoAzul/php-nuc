<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 3.2</title>
</head>
<body>

    // Emmanuel Alicea Rodríguez
    // Tarea 3.2

    <h1>
        Funciones
    </h1>

    <?php
        function funcionDeCalculos($número1, $número2) {
            $suma = $número1 + $número2;
            $resta = $número1 - $número2;
            $multiplicacion = $número1 * $número2;
            $division = $número1 / $número2;

            $resultados = [
                "suma" => $suma,
                "resta" => $resta,
                "division" => $division,
                "multiplicacion" => $multiplicacion
            ];

            return $resultados;
        }

        $resultadosTotales = funcionDeCalculos(10, 5);

        echo "Suma: " . $resultadosTotales['suma'] . "<br>";
        echo "Resta: " . $resultadosTotales['resta'] . "<br>";
        echo "División: " . $resultadosTotales['division'] . "<br>";
        echo "Multiplicación: " . $resultadosTotales['multiplicacion'] . "<br>";
    ?>

</body>
</html>