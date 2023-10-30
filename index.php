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

      print "<table class='table table-hover table-striped table-bordered'>";
        print"<tr>";
        print"<th>ID</th>";
        print"<th>Nome</th>";
        print"<th>E-mail</th>";
        print"<th>Nascimento</th>";
        print"<th>Estado</th>";
        print"<th>Endereco</th>";
        print"<th>Sexo</th>";
        print"<th>Categoria</th>";
        print"<th>Login</th>";
        print"<th>Acoes</th>";
        print"</th>";
            while($row = $registro->fetchObject()){
              print"<tr>"; 
              print "<td>".$row->ID_User."</td>";
              print "<td>".$row->NM_User."</td>";
              print "<td>".$row->EM_User."</td>";
              print "<td>".$row->DN_User."</td>";
              print "<td>".$row->ST_User."</td>";
              print "<td>".$row->AD_User."</td>";
              print "<td>".$row->SX_User."</td>";
              print "<td>".$row->CT_User."</td>";
              print "<td>".$row->LG_User."</td>";
              print "<td>
                            <button onclick=\"location.href=' ?edita.php&ID_User=".$row->ID_User."';\" class='btn btn-success'>Editar</button>
                            <button class='btn btn-danger'>Excluir</button>
                        </td>";
              print"</tr>";
            }
      print"</table>";

  ?>
</body>
</html>