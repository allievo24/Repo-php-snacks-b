<?php
//diachiaro un variabile dove andra il resultato
$resultato = "";


//verifico se i parametri ci sono dentro le variabili alrementi do un messaggio di errore

if(isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])){

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];


    if (strlen($name) > 3 
    && strpos($mail,'.')!== false
    && strpos($mail,'@')!== false
    && is_numeric($age)
    ) {
        $resultato = "Acesso Riuscito";
    }else {
        $resultato= "accesso negato";
    }

}else{
    $resultato ="errore: mancano i parametri";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
    <body>
       
    
    <h1> <?php echo $resultato; ?> </h1>
    




</body>
</html>