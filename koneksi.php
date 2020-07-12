<?php
  $host='localhost';
  $user='root';
  $password=''; //ini jangan lupa ganti, ini di kosongin aja 
  $database='uts_kia'; //ini juga disamain di database nya tadi
  $mysqli=mysqli_connect($host, $user, $password, $database);
  if (mysqli_connect_errno()) {
    echo "Koneksi database gagal ".mysqli_connect_errno();
    exit();
    mysqli_close($mysqli);
  }
 ?>
