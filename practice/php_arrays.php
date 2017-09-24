<?php
    session_start();

    function displaySymbol($symbol)
    {
        echo "<img src='../labs/lab2/img/$symbol.png' width='70'/>";
    }

    $symbol=array("lemon","orange","cherry","seven");
    //print_r($symbol);//displays array, only for debugging purposes
    echo $symbol[2];
    //displaySymbol($symbol[2]);
    array_push($symbol,"bar");
    $symbol[]="grapes";
    //print_r($symbol);
    //displaySymbol($symbol[4]);
    sort($symbol);
    for($i=0;$i<4;$i++)
    {
        displaySymbol($symbol[$i]);
    }
    shuffle($symbol);
    for($i=0;$i<4;$i++)
    {
        displaySymbol($symbol[$i]);
    }
    $lastSymbol=array_pop($symbol);
    displaySymbol($lastSymbol);
    
    foreach($symbol as $s){
        displaySymbol($s);
    }
    unset($symbol[2]);
    echo "<hr>";
    foreach($symbol as $s){
        displaySymbol($s);
    }
    //displaying random symbol;
    $random=rand(0,2);
    //displaySymbol($symbol[rand(0,count($symbol)-1)]);
    displaySymbol($symbol[array_rand($symbol)]);
    echo $_SESSION["juan"];


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Php arrays </title>
    </head>
    <body>
        

    </body>
</html>