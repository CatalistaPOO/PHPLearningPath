<?php

//Arrays indexados
$semana[] = "Lunes";
$semana[] = "Martes";
$semana[] = "Miércoles";
$semana[] = "Jueves";
$semana[] = "Viernes";
$semana[] = "Sábado";
$semana[] = "Domingo";
echo $semana[3] . "\n"; //acceder al elemento Jueves
sort($semana);//ordenar alfabeticamente
for ($i = 0; $i < count($semana); $i++) {
    echo $semana[$i] . " " . "\n";
}

$frutas = array("Banana", "Manzana", "Naranja");
foreach ($frutas as $fruta) {
    echo $fruta . " " ."\n";
}

//Arrays associativos
$persona = array("nombre" => "Juan", "edad" => 25, "ciudad" => "Madrid");
$persona["profesion"] = "Ingeniero";//agregar un nuevo par clave-valor
foreach ($persona as $clave => $valor) {
    echo $clave . ": " . $valor . "\n";
}


//Arrays multidimensionales
//Ejemplo sencillo de array multidimensional
$empleados = array(
    array("nombre" => "Ana", "edad" => 28, "departamento" => "Ventas"),
    array("nombre" => "Luis", "edad" => 34, "departamento" => "Marketing"),
    array("nombre" => "Marta", "edad" => 30, "departamento" => "Desarrollo")
);
foreach ($empleados as $empleado) {
    echo "Nombre: " . $empleado["nombre"] . ", Edad: " . $empleado["edad"] . ", Departamento: " . $empleado["departamento"] . "\n";
}
//array multidimensional asociativo
$alimentos=array("fruta"=>array("tropical"=>"kiwi",
                              "cítrico"=>"mandarina",
                              "otros"=>"manzana"),
                 "leche"=>array("animal"=>"vaca",
                              "vegetal"=>"coco"),
                 "carne"=>array("vacuno"=>"lomo",
                              "porcino"=>"pata"));
echo $alimentos["fruta"]["cítrico"] . "\n"; //acceder al elemento mandarina
$alimentos["carne"]["vacuno"]="entrecot";//cambiar un elemento
//usa vardump para mostrar array $alimentos de forma muy sencilla
var_dump($alimentos);
//si no en su lugar deberiamos usar todo este código:
//recorrer array multidimensional
foreach ($alimentos as $clave_alim => $alim) {
    echo $clave_alim . PHP_EOL;//Salto de linea independiente del sistema operativo (PHP_EOL)
    foreach ($alim as $clave => $valor) {
        echo $clave . "=" . $valor . PHP_EOL;
    }
    echo PHP_EOL;
}

//corroborar si una variable es un array
if (is_array($frutas)) {
    echo "Es un array" . "\n";
} else {
    echo "No es un array" . "\n";
}

?>