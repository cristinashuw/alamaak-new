<?php

$host='localhost';
$user='root';
$pass='';
$database='alamaak';

$connect=mysqli_connect($host, $user, $pass);

mysqli_select_db($connect, $database);



?>