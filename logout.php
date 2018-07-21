<?php
include "koneksi.php";
session_start();
session_destroy();
echo "<script>alert('You have successfully logged out')</script>";
echo "<meta http-equiv='refresh' content='1 url=index.php'>";
?>