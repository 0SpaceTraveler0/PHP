<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Простейший PHP-скрипт</title>
    <meta charset='utf-8'>
</head>
<body>
<?php
    //echo "Hello world!\n";
    //phpinfo();
    //echo phpversion();
//    echo "Текущая дата:<Ьr />";
//    echo date(DATE_RSS);

?>
<?php
    if(mt_rand( 0, 1)) {
        ?>
        <div style='color: green' ><?= "Иcтина"; ?></div>
        <?php
    } else {
        ?>
    <div style='color:red' ><?= "Ложь" ?></div>
    <?php } ?>

<?php

echo 'Основной скрипт<br/> ';
include 'included.php';
echo 'Основной скрипт<br/> ';
?>
</body>
</html>