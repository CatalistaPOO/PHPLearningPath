<?php

//-------------CLASE PADRE------------------------------
class Padre{

   public function __construct(
       private string $nombre,
       protected string $apellido1,
       private string $apellido2,
       private int $edad,
    ){}

   // Getters
    public function getNombre(): string {
         return $this->nombre;
    }
    public function getApellido1(): string {
         return $this->apellido1;
    }
    public function getApellido2(): string {
         return $this->apellido2;
    }
    public function getEdad(): int {
         return $this->edad; 
    }

    // Solo incluimos Setters para las propiedades que SÍ pueden cambiar.
    public function setNombre(string $nombre): void { 
        $this->nombre = $nombre;
     }
    public function setApellido2(string $apellido2): void {
         $this->apellido2 = $apellido2; 
    }
    public function setEdad(int $edad): void {
         $this->edad = $edad;
    }

   public function __tostring(): string {
     return  "Padre:\n" 
     . "Nombre: " . $this->getNombre() . "\n"
     . "Apellido 1: " . $this->getApellido1(). "\n"
     . "Apellido 2: " . $this->getApellido2() . "\n"
     . "Edad: " . $this->getEdad() . "\n";
    }
}

//-------------CLASE HEREDERA------------------------------
class Hijo extends Padre{

     public function __construct(
          Padre $padre, 
          string $nombre, 
          string $apellido2,
           int $edad
     ){
          $apellido1_heredado = $padre->getApellido1();
          parent::__construct($nombre, $apellido1_heredado, $apellido2, $edad);
     }

    public function __tostring(): string {
     return  "Hijo (debría heredar apellido 1):\n" 
     . "Nombre: " . $this->getNombre() . "\n"
     . "Apellido 1: " . $this->getApellido1() . "\n"
     . "Apellido 2: " . $this->getApellido2() . "\n"
     . "Edad: " . $this->getEdad() . "\n";
    }
}

//-------------PROGRAMA, los hijos no cambian apellido1 y lo heredan del padre------------------------------------
$padresito = new padre("Pedro", "Gomez", "Guzman", 36);
echo $padresito;

$hijomio =new hijo($padresito,"Luis","Perez",12);
echo $hijomio;
$estenoesbastardo=new hijo($padresito,"Pablo","García", 20);
echo $estenoesbastardo;

?>