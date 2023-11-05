<?php
        switch ($_REQUEST["operacao"]) {
                
                case "cadastrarUsuario":
                        $nome = $_POST["nome"];
                        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
                        $nascimento = $_POST["nascimento"];
                        $estado = $_POST["estado"];
                        $endereco = $_POST["endereco"];
                        $sexo = $_POST["sexo"];
                        $categoria = implode(" , ", $_POST["categoria"]);
                        $login = $_POST["login"];
                        $senha = $_POST["senha"];

                        $sql = "INSERT INTO usuario(NM_User, EM_User, DN_User, ST_User, AD_User, SX_User, CT_User, LG_User, PS_User)
                        VALUES ('{$nome}', '{$email}', '{$nascimento}', '{$estado}', '{$endereco}', '{$sexo}', '{$categoria}', '{$login}', '{$senha}')"; 
      
                        $registro = $connect->query($sql);

                        if ($registro==true){
                                print "<script>
                                        alert('Cadastro realizado com Sucesso');
                                </script>";
                                print "<script>
                                        location.href='?page=listarUsuario';
                                </script>";
                              } else {
                                print "<script>
                                        alert('Cadastro Nao realizado');
                                </script>";
                                print "<script>
                                        location.href='?page=listarUsuario';
                                </script>";
                        }
                break;

                case "editarUsuario":
                        $nome = $_POST["nome"];
                        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
                        $nascimento = $_POST["nascimento"];
                        $estado = $_POST["estado"];
                        $endereco = $_POST["endereco"];
                        $sexo = $_POST["sexo"];
                        $categoria = implode(" , ", $_POST["categoria"]);
                        $login = $_POST["login"];
                        $senha = $_POST["senha"];

                        $sql = "UPDATE usuario SET
                                                NM_User= '{$nome}',
                                                EM_User='{$email}',
                                                DN_User='{$nascimento}',
                                                ST_User='{$estado}',
                                                AD_User='{$endereco}',
                                                SX_User='{$sexo}',
                                                CT_User='{$categoria}',
                                                LG_User='{$login}',
                                                PS_User='{$senha}'
                                     WHERE
                                                ID_User=".$_REQUEST["ID_User"]; 

                        $registro = $connect->query($sql);

                        if ($registro==true){
                                print "<script>
                                        alert('Cadastro Editado com Sucesso');
                                </script>";
                                print "<script>
                                        location.href='?page=listarUsuario';
                                </script>";
                              } else {
                                print "<script>
                                        alert('Edicao Nao realizada');
                                </script>";
                                print "<script>
                                        location.href='?page=listarUsuario';
                                </script>";
                        }
                break;

                case "deletarUsuario":
                        $sql = "DELETE FROM usuario WHERE ID_User=".$_REQUEST["ID_User"];

                        $registro = $connect->query($sql);

                        if ($registro==true){
                                print "<script>
                                        alert('Cadastro Excluido com Sucesso');
                                </script>";
                                print "<script>
                                        location.href='?page=listarUsuario';
                                </script>";
                              } else {
                                print "<script>
                                        alert('Exclusao Nao realizada');
                                </script>";
                                print "<script>
                                        location.href='?page=listarUsuario';
                                </script>";
                        }
                break;
        }
?>