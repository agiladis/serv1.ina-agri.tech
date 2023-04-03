<?php
$hostname  = "localhost";

// $username  = "inastekdb1";
$username  = "root";
// $password  = "InamasTekdb1";
$password  = "";
$dbname  = "inastekdb1";
$db = mysql_connect($hostname, $username, $password) or die ('Koneksi Gagal! ');
mysql_select_db($dbname);
?>
