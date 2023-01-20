<?php
   session_start();
   include "includes/conecta.php";

   $id = $_POST['id'];
   $iddono = $_SESSION['id'];
   $objeto = $_POST['objeto'];
   $estado_obj = $_POST['estado_obj'];
   $data_cad = $_POST['data_cad'];
   $disponibilidade = $_POST['disponibilidade'];
   

   if(!empty($id)) {

      $sql = "UPDATE cadastra_itens SET 
      objeto =  '$objeto',
      estado_obj =  '$estado_obj',
      data_cad = '$data_cad',
      disponibilidade = '$disponibilidade' WHERE iddono like '$_SESSION[id]' AND id like '$id'";
   }
      //Envia código SQL para o MySQL
      $res = mysqli_query($conn, $sql);
   
      //Se atualizou com sucesso
      if($res) {
         //Redireciona para login.
         header("Location: meus_itens_cadastrados.php");
      }
   
      else {
   
         header("Location: edita_item.php?errodealteracao=2");
      }
