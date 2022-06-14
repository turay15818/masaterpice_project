<?php
$host = "sql210.hstn.me";
$username = "mseet_31600527";
$password = "Mariaum15818";
$database = "mseet_31600527_turaymathic_academy";

$conn = new mysqli($host, $username, $password, $database);
if(!$conn){
    echo "Database connection failed. Error:".$conn->error;
    exit;
}
?>

sql210.hstn.me;dbname=mseet_31600527_turaymathic_academy;charset=utf8','mseet_31600527','Mariaum15818'