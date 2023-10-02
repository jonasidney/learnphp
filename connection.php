<?php

  function connect(){
    $PDO = new PDO ('mysql:host=' . HOST . ';DATABASE=' . BASE . ';charset=utf8', USER, PASSWORD);
    return $PDO;
  }

?>