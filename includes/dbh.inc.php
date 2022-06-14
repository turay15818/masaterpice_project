<?php
  $servername="sql210.hstn.me";
  $dbUsername="mseet_31600527";
  $dbPassword="15818Turay";
  $dbName="mseet_31600527_turaymathic_academy";
  $conn=mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);
  if (! $conn){
    die("Connection Failed :".mysqli_connect_error());
  }
 ?>
