<?php

$number = 10;
if( $number === 10){
    echo 'Ten';
}else{
    echo "not ten";
}

echo '</br>';
echo '</br>';

$array = ['jahed', 'hasan','bhuiyan', 25];

echo $array[0]; // jahed
echo '</br>';
echo $array[3]; // 25
echo '</br>';
echo '</br>';

$myarray = [
   'first_name' => 'Jahed', 
    'last_name'  => 'hasan',
    'dist' => 'Feni',
    'age' => 25
    ];

echo 'My name is '.$myarray['first_name'].' from '.$myarray['dist']; // My name is Jahedfrom Feni
echo '</br>';
echo '</br>';

$mDarray=[
    'first_name' => 'Jahed', 
    'last_name'  => 'hasan',
    'age' => 25,
    'address' => [
        'street' => 'kalidah',
        'city' => 'feni sadar',
        'dist' => 'feni'
    ]
];

echo $mDarray['address']['city']; // feni sadar
echo '</br>';
print_r($mDarray);// full array print
echo '</br>';

$i = 1;
while($i <= 10){
    echo $i. ' x 5 ='  .$i*5 . '<br/>';
    $i++;
}
echo '</br>';
// do while 
$iter =1;
do {
    echo $iter. ' x 2 ='  .$iter*2 . '<br/>';
    $iter++;
} while ($iter <= 10);

echo '</br>';
// for
for ($j=1; $j <=10 ; $j++) { 
    echo $j. ' x 7 ='  .$j*7 . '<br/>';
};
echo '</br>';
//for each

$arr = [ 1,2,3,4,5,6,7,8,10];
/* 
foreach ($arr as $key => $value) {
    echo $key . ':' .$value .'<br/>';
}
*/
foreach ($arr as $data) {
    echo $data . ' x 4 = '. $data*4 .'<br/>';
}

echo '</br>';
//function
$num1 = 10;
$num2 = 20;
function sum( $n1, $n2){
    return $n1+$n2;
};
echo 'sumation is '.sum($num1, $num2);
echo '</br>';
echo 'sum of 100 and 10 is = '.sum(100, 10);

echo '</br>';
echo '</br>';
//build-in function
$a =[ 10,20,30,40,10, 60];
$filtered_array = array_unique($a);
var_dump($filtered_array);
echo '</br>';
echo count($a);