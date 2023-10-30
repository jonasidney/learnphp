<?php

  $host =  "localhost";
  $username = "root";
  $password =  "";
  $database = "cadastros";

  $connect = new PDO("mysql:host=$host;dbname=$database", $username, $password);

?>