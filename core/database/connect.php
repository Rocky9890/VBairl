<?php 
$connect_error = 'sorry, server is down';
mysql_connect('localhost','root','','ir') or die($connect_error);
mysql_select_db('ir') or die($connect_error);


?>

