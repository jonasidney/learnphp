<?php
/*
  Conexão utilizando a função PDO( )
  $host =  "localhost";
  $username = "root";
  $password =  "";
  $database = "cadastros";

  $connect = new PDO("mysql:host=$host;dbname=$database", $username, $password);
*/

  define('HOST', 'localhost');
  define('USER', 'root');
  define('PASS', '');
  define('BASE', 'cadastros');

  $connect = new MySQLi(HOST, USER, PASS, BASE);

?>