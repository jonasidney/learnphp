<?php
require_once 'config.php';

  if (isset ($_POST['nome']) && !empty(trim($_POST['nome']))) {

      $nome = $_POST['nome'];
      $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
      $nascimento = $_POST['nascimento'];
      $estado = $_POST['estado'];
      $endereco = $_POST['endereco'];
      $sexo = $_POST['sexo'];
      $categoria = implode(" , ", $_POST['categoria']);
      $login = $_POST['login'];
      $senha = $_POST['senha'];
  }
      $PDO = connect();
      
      $sql = "INSERT INTO
      usuario(NM_User, EM_User, DN_User, ST_User, AD_User, SX_User, CT_User, LG_User, PS_User)
      VALUES (:nome, :email, :nascimento, :estado, :endereco, :sexo, :categoria, :login, :senha)"; 
      
      $stmt = $PDO->prepare($sql);
      $stmt->bindParam(':nome', 'nome');
      $stmt->bindParam(':emai', 'email');
      $stmt->bindParam(':nascimento', 'nascimento');
      $stmt->bindParam(':estado', 'estado');
      $stmt->bindParam(':endereco', 'endereco');
      $stmt->bindParam(':sexo', 'sexo');
      $stmt->bindParam(':categoria', 'categoria');
      $stmt->bindParam(':login', 'login');
      $stmt->bindParam(':senha', 'senha');

      if ($stmt->execute()) {
        header('Location: cadastroUsuario.php');
      }
      else {
        echo "Não foi possível gravar o registro!";
        print_r ($stmt->errorInfo());
      }


      /*
      //-- Calcular a idade em anos;
      $dataInformada = new DateTime($nascimento);
      $hoje = new DateTime( );
      $intervalo = $dataInformada->diff($hoje);
      $idade = $intervalo->format('%Y');
      
      //-- Formata a data a ser exibida
      $dataNascimento = date('d/m/Y', strtotime($nascimento));

      if ($_POST['sexo'] == 'masculino') {
        echo "<b>Olá Sr.</b> <br>";
      } else {
        echo "<b>Olá Sra.</b> <br>";
      }
      echo "<b>Nome:</b> $nome <br>";
      echo "<b>E-mail:</b>  $email <br>";
      if ($idade >= 18) {
        echo "<b>Data de nascimento:</b> $dataNascimento | Maior de idade <br>";  
      } else {
        echo "<b>Data de nascimento:</b> $dataNascimento | Menor de idade <br>";
      }
      echo "<b>Estado:</b> $estado <br>";
      echo "<b>Endereço:</b> $endereco <br>";     
      if ($_POST['sexo'] == 'masculino') {
        echo "<b>Sexo:</b> Masculino <br>";
      } else {
        echo "<b>Sexo:</b> Feminino<br>";
      }
    
      echo "<b>Categorias de interesse:</b> $categoria <br>";
      echo "<b>Login de acesso:</b> $login <br>";

  } else {
    echo "Não há dados a exibir.";
  }
*/
  
?>