<?php
echo 'Класс c приватными переменными'."<br/>";
require_once 'PrivatePoint.php';
$privatpoint = new PrivatePoint();
echo '$privatpoint -> y = 123;'.' // ошибка переменная запривачена'."<br/>";
echo 'Класс'."<br/>";
require 'Point.php';
$point = new Point();
$point ->x = 123;

echo $point ->x."<br/>";

echo ('Десятичное в двоичное 4252 - '.decbin(4252)."<br/>");
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
echo mt_rand(0,1000);

