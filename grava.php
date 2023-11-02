<?php

include("connection.php");

  if (isset ($_POST['nome']) && !empty(trim($_POST['nome']))) {

      $nome = $_POST["nome"];
      $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
      $nascimento = $_POST["nascimento"];
      $estado = $_POST["estado"];
      $endereco = $_POST["endereco"];
      $sexo = $_POST["sexo"];
      $categoria = implode(" , ", $_POST["categoria"]);
      $login = $_POST["login"];
      $senha = $_POST["senha"];
  }
      $sql = "INSERT INTO usuario(NM_User, EM_User, DN_User, ST_User, AD_User, SX_User, CT_User, LG_User, PS_User)
      VALUES ('{$nome}', '{$email}', '{$nascimento}', '{$estado}', '{$endereco}', '{$sexo}', '{$categoria}', '{$login}', '{$senha}')"; 
      
      $registro = $connect->query($sql);

      if ($registro==true){
        print "<script>
                alert('Cadastro realizado comsucesso');
        </script>";
        print "<script>
                location.href='index.php';
        </script>";
      }
      
?>