<?php

if($qwe = file_get_contents('https://gb.ru')){
    echo $qwe;
}

//echo 6&10;

/*$num1 = 2;
$num2 = 9;
$num = $num1;
echo pow($num1,$num2)."</br>";
for($i=1;$i<3;$i++){ //ошибка
    $num1 *=$num;
    echo $num1.'---'.$i."</br>";

}
$i=1;
while($i < $num2){
    $num1 *=$num;
    $i++;
}
echo $num1."</br>";*/


/*$simbol= 'a';
while($simbol!='z'){
    echo $simbol."</br>";
    ++$simbol;

}*/
//require "Point.php";


//echo PHP_VERSION;

//echo __LINE__;

/*// Формируем случайное число от 1 до 10
$index = mt_rand(1, 10);
echo mt_rand(1,10);
//Формируем имя константы
$name = "VALUE{$index}";
//Определяем константу с динамическим именем
define($name, 1);
// Получаем значение константы
echo constant($name );*/


/*require 'PointAlter.php';

$point1 = new PointAlter();
$point1 -> x = $_POST['num1x'];
$point1 -> y = $_POST['num1y'];
$point1 -> z = $_POST['num1z'];

$point2 = new PointAlter();
$point2 -> x = $_POST['num2x'];
$point2 -> y = $_POST['num2y'];
$point2 -> z = $_POST['num2z'];

$D = sqrt( pow($point2->x - $point1->x,2) + pow($point2->y - $point1->y,2) + pow($point2->z - $point1->z,2));

// "Растояние между двумя точками = $D";
echo "<p> $D </p>";*/


/*echo 'Класс c статичными переменными'."<br/>";

echo 'Класс c приватными переменными'."<br/>";
require_once 'PrivatePoint.php';
$privatpoint = new PrivatePoint();
echo '$privatpoint -> y = 123;'.' // ошибка переменная запривачена'."<br/>";

echo 'Класс'."<br/>";
require 'Point.php';
$point = new Point();
$point ->x = 123;

echo $point ->x."<br/>";

echo 'Класс c статичными переменными'."<br/>";
echo Point::$pointItem."<br/>";*/

/*echo ('Десятичное в двоичное 4252 - '.decbin(4252)."<br/>");
echo ('Десятичное в двоичное 89080 - '.decbin(89080)."<br/>");

$num = 42.43752;
echo round($num,2)."<br/>";

$num = 123;
if(is_int($num)) { // true
echo "Переменная $num является целочисленн"."<br/>";
}

$int = 123;
echo ' $int is - '. gettype($int)."<br/>";

$str = '';
if(isset($str)){ //true
    echo 'Переменная $str существует'."<br/>";
}
$str = <<< HTML_END
Много текста, прям много офигеть
HTML_END;
echo $str."<br/>";

//print_r(`dir`) ;
echo date("l").'<br/>';
echo date("l jS \of F Y h:i:s A").'<br/>';
echo  date('<br/>');
echo "Feb 8, 2000 is on a " . date("l", mktime(0, 0, 0, 2, 8, 2000)).'<br/>';
//echo  date('<br/>');
echo date(DATE_RFC822).'<br/>';
print_r( getdate());
echo  '-----------------'.'<br/>';
echo mt_rand(0,1000);*/

