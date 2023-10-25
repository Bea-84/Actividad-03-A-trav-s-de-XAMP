<!DOCTYPE html>
<html>
<head>
    <title>Generador de número aleatorio</title>
</head>
<body>
    <?php
        // Genera un número aleatorio entre 3 y 20
        $numeroAleatorio = rand(3, 20);
        
        // Muestra el número generado en pantalla
        echo "El número es el " . $numeroAleatorio;
        
        // Crea una tabla con tantas casillas como el número generado
        echo "<table border='1'>";
        for ($i = 1; $i <= $numeroAleatorio; $i++) {
            echo "<tr>";
            echo "<td>Casilla $i</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>