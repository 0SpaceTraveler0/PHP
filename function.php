<?php
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
