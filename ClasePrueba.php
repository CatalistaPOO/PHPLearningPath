<?php

class ClasePrueba {
    //los atributos desde version 8, se definen directamente en el constructor
    public function __construct(
        private string $material,
        private string $color,
        private int $talla
        ){}
    //getters y setters hay que picarlos a mano...o buscar extension actual fiable
    public function getmaterial(){
        return $this->material;
    }
    public function setmaterial($material){
        $this->material = $material;
    }
    public function getcolor(){
        return $this->color;
    }
    public function setcolor($color){
        $this->color = $color;
    }
    public function gettalla(){
        return $this->talla;
    }
    public function settalla($talla){
        $this->talla = $talla;
    }

    public function actua(){
        echo "actuando\n";
    }

    public function habla(){
        echo  "Hola!!\n";
    }

    //tostring
    public function __toString() : string {
        return "ClasePrueba [Material: {$this->material}, Color: {$this->color}, Talla: {$this->talla}]";
    }
   

}

$prueba = new ClasePrueba("algodón", "rojo", 42);
$prueba2 = new ClasePrueba("lana", "azul", 38);

$prueba->habla();
$prueba2->actua();

echo "\n--- Prueba __toString() ---\n";
echo "Objeto 1: " . $prueba . "\n";
echo "Objeto 2: {$prueba2}\n";
 
?>