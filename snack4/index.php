<?php

//creo un array vuoto che ospitera i numeri generati 
$numericasuali =[];
//faccio un ciclo finche nell arrray non cisono 15 numeri usando funzione count


while(count($numericasuali)< 15){
    $numerocasuale= rand(1,100);
  //ora verifico se il numero e presente all'interno dell'array 
  if(!in_array($numerocasuale,$numericasuali)){
    //push il numero 
    $numericasuali[]=$numerocasuale;
  }

}
    //equivale al console.log
    var_dump($numericasuali)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack4</title>
</head>
    <body>
        
      <div>  <?php echo $numericasuali;?>  </div>







   </body>
</html>