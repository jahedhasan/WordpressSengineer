<?php
// echo 'Start to practicing PHP programming language';

// define('PI', 3.1416);
// echo PI;

//variable declare and value assign

$num1= 50;
$num2 = 20;
echo $num1+$num2;
echo '<br/>';
echo $num1-$num2;
echo '<br/>';
echo $num1 % $num2;
echo '<br/>';
echo $num1 ** $num2 ; // exponent
echo '<br/>';

// cls 5 assign and concate
$name = 'Jahed ';
$name .= 'Hasan';
echo $name;
echo '<br/>';
echo '<br/>';

//comparision

var_dump(10>5); //true
var_dump ( 10 <= 15);
var_dump ( 10 <= 10);
var_dump ( 10 <= 9); //false
var_dump ( 10 >= 5); //true

var_dump ( 10 == 15); //false
var_dump ( 10 != 15); //true

echo '<br/>';
echo '<br/>';
var_dump ( 10 === 10); //true
var_dump ( '10' === 10); // false bcz datatype and value same noy

echo '<br/>';
echo '<br/>';
// cls 6 - condition if else
$day = 'Friday';
if ($day === 'Friday' || $day === 'Saturday') {
    echo 'Today is OFF day!';
} else {
    echo 'Today is working day!';
}

//  '||' or sign
// '&&' and sign 





