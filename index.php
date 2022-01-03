<?php 
error_reporting(-1);
//По заданному натуральному числу N получить число M, записанное цифрами исходного числа, взятыми в обратном порядке.

$n = 1679;  


$counter = 0;
$i=10;
while($n % $i != $n){
    $counter++;
    $i *= 10;
    
}

$value = $n;
$numf = 0; // текущая цифра 
$res = 0;
while($value != 0){
    $numf = round((($value / 10 )- (floor($value / 10)) )*10);  // вычисляем текущую цифру
    $value = floor($value / 10);  
    $dg = pow(10, $counter);
    $res = $res + ($numf * $dg);
    $counter--;
    
}   

echo ($res);
