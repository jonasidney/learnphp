<h1> Lista de Usuários</h1>
<?php
          $sql = "SELECT * FROM usuario";
          $registro = $connect->query($sql);

          print "<table class='table table-hover table-striped table-bordered'>";
                  print"<tr>";
                  print"<th>ID</th>";
                  print"<th>Nome</th>";
                  print"<th>e-mail</th>";
                  print"<th>Dt. Nasc.</th>";
                  print"<th>Estado</th>";
                  print"<th>Endereco</th>";
                  print"<th>Sexo</th>";
                  print"<th>Categoria</th>";
                  print"<th>Login</th>";
                  print"<th>Operação</th>";
                  print"</th>";

                          while($row = $registro->fetch_object()){
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
                                          <button onclick=\"location.href='?page=editarUsuario&ID_User=".$row->ID_User."';\" 
                                                                        class='btn btn-success'>Editar</button>
                                          <button onclick=\"if(confirm('Realmente Excluir?')){
                                                                            location.href='?page=grava&operacao=deletarUsuario&ID_User=".$row->ID_User."';
                                                                        }else {
                                                                            false;
                                                                        }\" 
                                                                        class='btn btn-danger'>Excluir</button>
                                      </td>";
                            print"</tr>";
                          }

            print"</table>";
          
?>