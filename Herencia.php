<?php
//Haz una clase padre y una hija (usando un ejemplo con coches) que sirvan para mostrar herencia en php y ver usos con this y parent
//-------------CLASE PADRE------------------------------
class Coche{

   public function __construct(
       private string $marca,
       protected string $modelo,
       private int $anio,
    ){}

   // Getters
    public function getMarca(): string {
         return $this->marca;
    }
    public function getModelo(): string {
         return $this->modelo;
    }
    public function getAnio(): int {
         return $this->anio; 
    }

    // Solo incluimos Setters para las propiedades que SÍ pueden cambiar.
    public function setMarca(string $marca): void { 
        $this->marca = $marca;
     }
    public function setAnio(int $anio): void {
         $this->anio = $anio;
    }

   public function __tostring(): string {
     return  "Coche:\n" 
     . "Marca: " . $this->getMarca() . "\n"
     . "Modelo: " . $this->getModelo(). "\n"
     . "Año: " . $this->getAnio() . "\n";
    }
}
//-------------CLASE HEREDERA------------------------------
class Deportivo extends Coche{

     public function __construct(
          Coche $coche, 
          string $modelo,
           int $anio
     ){
          $marca_heredada = $coche->getMarca();
          parent::__construct($marca_heredada, $modelo, $anio);
     }

    public function __tostring(): string {
      return  "Deportivo:\n" 
      . "Marca: " . $this->getMarca() . "\n"
      . "Modelo: " . $this->getModelo(). "\n"
      . "Año: " . $this->getAnio() . "\n";
    }
}
//crear objetos y mostrar comparacion
$coche1 = new Coche("Toyota", "Corolla", 2020);
$coche2 = new Deportivo($coche1, "Supra", 2021);   

echo $coche1 . "<br>"; 
echo $coche2 . "<br>";

?>