<?php

  $hostname = "localhost";
  $username = "root";
  $password = "";
  $database = "tepatsewa";

  $db = mysqli_connect($hostname, $username, $password, $database);

  if($db -> connect_error) {
    echo "koneksi database rusak";
    die("rusak!");
  }
 
?>