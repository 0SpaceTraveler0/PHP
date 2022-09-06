<?php
$str = '';
if(isset($str)){ //true
    echo 'Переменная $str существует <Ьr/> ';
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
?>
