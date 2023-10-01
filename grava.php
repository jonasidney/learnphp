<?php

  if (isset ($_POST['nome']) && !empty(trim($_POST['nome']))) {

      $nome = $_POST['nome'];
      $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
      $nascimento = $_POST['nascimento'];
      $estado = $_POST['estado'];
      $endereco = $_POST['endereco'];
      $sexo = $_POST['sexo'];
      $categoria = implode(" , ", $_POST['categoria']);
      $login = $_POST['login'];
      
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

?>