<?php
   //echo "DADOS ENVIADOS VIA POST<br>"
   //var_dump($_POST)

   //echo "Usuário: " . $_POST["usuario"] . "<br>"
   //echo "Senha: " . $_POST["senha"] . "<br>"

   $login =$_POST["email"];
   $senha =$_POST["senha"];

   //Conecta com a base de dados.

   include "includes/conecta.php";

   $sql = "SELECT * FROM cadastro_usuario WHERE email = '$login' AND senha = '$senha'";
   $res = mysqli_query ($conn, $sql);
   
   //Número de registros encontrados
   $qtdeRegistros = mysqli_num_rows($res);

   //Encontrou login e senha compatíveis
   if($qtdeRegistros > 0) {

      //Inicia a sessão
      session_start();

      //Obtem dados do usuário
      $row = mysqli_fetch_assoc($res);

      //Armazena informações do usuário na sessão
      $_SESSION['id'] = $row['id'];
      $_SESSION['nome'] = $row['nome'];

      header("Location: index.php");
   }
   else{
      header("Location: login_tela.php?erro=1");
   }
?>


