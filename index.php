<?php 
$N = 1232;
$M = 3212;

echo 'Исходные данные N: '.$N.'; M:'.$M.';';
$divider_1 = numberOfDividers($N);
$divider_2 = numberOfDividers($M);
$divider = 1;

for ($i = 0; $i < counts($divider_1); $i++){
    for ($j = 0; $j < counts($divider_2); $j++){
        if (($divider_1[$i] == $divider_2[$j]) && ($divider < $divider_1[$i])){
            $divider = $divider_1[$i];
        }
    }
}

echo '<br>Делители числа N: '.json_encode($divider_1);
echo '<br>Делители числа N: '.json_encode($divider_2);
echo '<br>Ответ: '.$divider;



// кол-во делителей числа
function numberOfDividers ($number, $param = null){
    $mass = [];
    for ($i = 1; $i < $number; $i++){
        if ($number % $i == 0){
            $mass[] = $i;
            $j++;
        }
    }        
    return $mass;
}


function counts($mass){
    $i = 1;            
    while ($mass[$i].'' != ''){
        $i++;
    }
    return $i;
}


?>