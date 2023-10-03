<?php

  $host =  "localhost";
  $username = "root";
  $password =  "";
  $database = "cadastros";

  $connect = new MySQLi($host, $username, $password, $database);

  /*
  if ($connection === false) {
    echo "Erro ao tentar conectar ao MySQL: " . mysqli_connect_error();
  } else {
    echo "Conexão estabelecida com sucesso!";
  }
  */
?>