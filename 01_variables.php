<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prueba</title>
</head>
<body>

    <?php 
        //para levantar un servidor local en terminal: php -S localhost:8000
        //luego abrir en navegador http://localhost:8000/01_variables.php

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

        //Clase para demostrar objetos con getter y setters y un metodo to string y comparator
        class Persona {
            private $nombre;
            private $edad;

            public function __construct($nombre, $edad) {
                $this->nombre = $nombre;
                $this->edad = $edad;
            }

            public function getNombre() {
                return $this->nombre;
            }

            public function setNombre($nombre) {
                $this->nombre = $nombre;
            }

            public function getEdad() {
                return $this->edad;
            }

            public function setEdad($edad) {
                $this->edad = $edad;
            }

            public function __toString() {
                return "Persona: " . $this->nombre . ", Edad: " . $this->edad;
            }

            public function compararEdad($otraPersona) {
                if ($this->edad > $otraPersona->getEdad()) {
                    return 1;
                } elseif ($this->edad < $otraPersona->getEdad()) {
                    return -1;
                } else {
                    return 0;
                }
            }
        }
        //crear objetos y mostrar comparacion
        $persona1 = new Persona("Ana", 30);
        $persona2 = new Persona("Luis", 25);   
        echo $persona1 . "<br>";
        echo $persona2 . "<br>";
    ?>

</body>
</html>