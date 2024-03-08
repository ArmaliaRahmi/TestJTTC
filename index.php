<?php
$db_host		= 'localhost:8080'; 
$db_usn		= 'root'; //nama username
$db_pwd		= ''; //password jika tadak ada bisa di kosongi seperti contoh 
$db_name	= 'testjttc'; //nama database

$db_link	= mysqli_connect($db_host,$db_usn,$db_pwd,$db_name);
if (!$db_link){
	echo 'Tidak dapat terhubung ke database';
}
?>
