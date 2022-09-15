<?php
$Alunni=[
            [
                "nome" => "pino",
                "cognome" => "daniele",
                "voti" => [6,8,7,8,9]
            ],
            [
                "nome" => "napoleone",
                "cognome" => "bounaparte",
                "voti" => [6,5,7,5,10]
            ],
            [
                "nome" => "marco",
                "cognome" => "polo",
                "voti" => [2,8,4,3,9]
            ]
    
        ];


 /*  foreach($Alunni as $Alunno){
     // var_dump($Alunno["voti"]);

      $somma= 0;
      $somma = $Alunno["voti"];
      var_dump($somma);


   }*/

   for($i=0; $i<count($Alunni); $i++){
     $Alunno = $Alunni[$i];
     $somma =0;
     $voti = $alunno["voti"];
     for($v=0; $v<count($voti); $v++){
        $somma += $voti[$v];

     }
     
  
 }    

 var_dump($voti);







?>