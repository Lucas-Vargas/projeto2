<?php

$xD = 'xDDDD';
$anoNasc = 1988;
$idade = 2023-$anoNasc;

$altura = 1.80;
$peso = 70;
$imc = $peso/($altura**2);
echo"<h1 style='color:green; text-align: center;'>
    Hello World!, $imc
    </h1> <br>";

if($imc<17){
    echo"Come mlk pqp";
}else if($imc >=17 && $imc <18.5){
    echo"continua comendo";
}else if($imc >= 18.5 && $imc<24.9){
    echo'na medida';
}else{
    echo'gordão em filho';
}

