<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>Cadastro de Usuario</title>
</head>
<body>
<h2><a href="cadastroUsuario.php">Novo usuário</a></h2>
<h1>Usuários Cadastrados</h1>
  <?php
      include("connection.php");

      $sql = "SELECT * FROM  usuario";

      $registro = $connect->query($sql);

      //$qtd = $registro->num_rows;

      while($row = $registro->fetchObject()){ 
        print $row->ID_User;
        print $row->NM_User;
        print $row->EM_User;
        print $row->DN_User;
        print $row->ST_User;
        print $row->AD_User;
        print $row->SX_User;
        print $row->CT_User;
        print $row->LG_User;
      }


  ?>
</body>
</html>