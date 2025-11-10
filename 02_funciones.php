 <?php

    $v1 = rand(0,100);
    $v2 = round(5.5);

    // devuelvesuma($v1,$v2) . "<br>"; //en caso de cargar como html
    $gatherSuma = devuelveSuma($v1,$v2); //en caso de solo php
    devuleveResultado($gatherSuma);

    echo "------------------------------" . "\n";
      echo "configurando variable resultmatch \n";
    $resultMatch = match (true){
         $gatherSuma < 18 => "match mayor edad",
         $gatherSuma >= 18 && $gatherSuma < 65 => "match mayor de edad",
         $gatherSuma >= 65 => "match jubilado",
         default => "No contemplado"
    };
    echo $resultMatch . "\n";



    function devuelveSuma($value1,$value2){
        echo "------------------------------" . "\n";
        echo "funcion devuelveSuma: " . "\n";
       $resultado =  $value1+$value2;
       echo $resultado . "\n";
       echo gettype($resultado) . "\n";
       $resultado = (int)$resultado; //casting
       echo gettype($resultado) . "\n";
       echo $resultado > 50?"has superado los 50 \n":"no llegas a los 50 \n";
       return (int)round($resultado);
       echo "------------------------------" . "\n";
    }

    function devuleveResultado($gatherValue){
      echo "--------------------------\n ";
      echo "Funcion devuelveResultado\n ";
      switch (true) {
         case $gatherValue < 18:
            echo "Es menor de edad \n";
            break;
         case $gatherValue >= 18 && $gatherValue < 65:
            echo "Es mayor de edad \n";
            break;
         case $gatherValue >= 65:
            echo "Está jubilado \n";
            break;
         default:
            echo "Es un rango no contemplado \n";
            break;
      }
   }

    ?>
