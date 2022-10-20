<?php


echo 'Pregunta 1'.'<br><br>';

function primo($num) {

    for($i = 2; $i <= $num-1; $i++) {
        
        if($num%$i == 0) {
            return false;
        }
    }
    return true;
}
    
$sum = 0;
$cont = 0;
$i = 2;

while($cont < 10){
    if(primo($i)) {
        $sum = $sum + $i;
        $cont++;
    }
    $i++;
}
    

echo 'La suma de los 10 primeros primeros: '.$sum;

echo '<br><br>';

echo 'Pregunta 2'.'<br><br>';

for($j = 10; $j > 0; $j--){
    echo $j.' ';
}

echo '<br><br>';
echo 'Pregunta 3'.'<br><br>';

$text = "Artsign Soluciones es la mejor empresa"; 
$letters = str_split($text);

for ($k = 0; $k < sizeof($letters); $k++){
    
    if($k%2==0)
        $letters[$k] = '@';

    if($k%3==0)
        $letters[$k] = '*';

    if($k%2==0 && $k%3==0)
        $letters[$k] = '&';
}

for ($k = 0; $k < sizeof($letters); $k++){
    echo $letters[$k];
}

echo '<br><br>';
echo 'Pregunta 4'.'<br><br>';

$text2 = "LA VACA LOLA PASEA POR LA PRADERA"; 
$letterA = str_split($text2);
$cont2 = 0;

for ($k = 0; $k < sizeof($letterA); $k++){
    if($letterA[$k] == 'A'){
        $cont2++;
    }
}

for ($k = 0; $k < $cont2; $k++){
    echo $text2.'<br>';
}

?>