<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>Cadastro de Usuario</title>
</head>

<body>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Cadastro</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Pagina Inicial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=cadastrarUsuario">Cadastrar Usuarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=listarUsuario">Listar Usuarios</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                        include("conecta.php");
                        switch(@$_REQUEST["page"]) {
                          case "cadastrarUsuario":
                            include("cadastrarUsuario.php");
                          break;

                          case "listarUsuario":
                            include("listarUsuario.php");
                          break;

                          case "editarUsuario":
                            include("editarUsuario.php");
                          break;

                          case "grava":
                            include("grava.php");
                          break;

                          default:
                          print "<h1>Boas vindas</h1>";
                        }
                  ?>
            </div>
        </div>
      </div>

      <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>