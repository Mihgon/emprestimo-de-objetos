<?php
   session_start();
   include "includes/conecta.php";

   $id = $_POST['id'];
   $iddono = $_SESSION['id'];
   $objeto = $_POST['objeto'];
   $estado_obj = $_POST['estado_obj'];
   $data_cad = $_POST['data_cad'];
   $disponibilidade = $_POST['disponibilidade'];


      //Monta o SQL para inserir os dados do formulário no SQL
      $sql = "INSERT INTO cadastra_itens (iddono, objeto, estado_obj, data_cad, disponibilidade) 
      VALUES ('$iddono', '$objeto', '$estado_obj', '$data_cad', '$disponibilidade')";
      
     

      //Envia código SQL para o MySQL
      $res = mysqli_query($conn, $sql);

      //Se inserio com sucesso
      if($res) {
         //Redireciona para login.
         header("Location: meus_itens_cadastrados.php?cadastrobemsucedido=1");
      }

      else {

         header("Location: login_tela.php?errodesconhecido=1");
      }


?>