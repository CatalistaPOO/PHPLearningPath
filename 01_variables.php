<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba</title>
</head>
<body>

    <?php 

        // Esto es un comentario de una linea 
        /* esto es un 
        comentario de
        varias lineas */

        //diferentes tipos de variables en php
        $VString = "SoyString";
        $VNumero = 47;
        $VFloat = 3.1415; // float (double)
        $VBool = true; // boolean
        $VArray = ["manzana", "pera", 5]; // array
        $VObject = (object) ['prop' => 'valor', 'num' => 1]; // object
        $VNull = null; // null
        $VResource = fopen('php://memory', 'r+'); // resource

        const NOMBRE = 'Fernando'; // constante global (preferible a define para valores estáticos)

        //mostrar variables y limitaciones en php
        echo "Variable String: " . $VString . "<br>";
        echo "Variable Número: " . $VNumero . "<br>";
        echo "Variable Float: " . $VFloat . "<br>";
        echo "Variable Boolean: " . ($VBool ? 'true' : 'false') . "<br>";
        echo "Variable Array: " . implode(", ", $VArray) . "<br>";
        echo "Variable Object: " . json_encode($VObject) . "<br>";
        echo "Variable Null: " . var_export($VNull, true) . "<br>";
        echo "Constante NOMBRE: " . NOMBRE . "<br>";
        //cerrar recurso
        fclose($VResource);
        

    ?>

</body>
</html>