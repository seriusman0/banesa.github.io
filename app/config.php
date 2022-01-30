<?php
$server = "178-18-253-214.cprapid.com";
$username = "englishchalleng_root";
$password = "Banes@11";
$database = "englishchalleng_banesa";

$conn = mysqli_connect($server, $username, $password, $database) or die("Gagal");
$db1 = new mysqli($server, $username, $password, $database);
