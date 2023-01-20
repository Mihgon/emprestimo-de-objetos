<?php
   //session_start();
   //include "includes/conecta.php";

   //Envia a consulta para obter cadastro atual
   //$res = mysqli_query($conn, $sql);
   
   //Armazena os dados obtidos
   //$row =mysqli_fetch_assoc($res);
 
   //$id = $_GET['id'];

   //echo "$_GET[id];"


   //$sql = "DELETE FROM cadastra_itens WHERE id = $id";

   //$res = mysqli_query($conn, $sql);

   //header("Location: meus_itens_cadastrados.php");

   session_start();
   include "includes/conecta.php";

   $id = $_POST['id'];
   $iddono = $_SESSION['id'];
   $objeto = $_POST['objeto'];
   $estado_obj = $_POST['estado_obj'];
   $data_cad = $_POST['data_cad'];
   $disponibilidade = $_POST['disponibilidade'];
   

   if(!empty($id)) {

      $sql = "DELETE FROM cadastra_itens WHERE iddono like '$_SESSION[id]' AND id like '$id'";
   }
      //Envia código SQL para o MySQL
      $res = mysqli_query($conn, $sql);
   
      //Se atualizou com sucesso
      if($res) {
         //Redireciona para login.
         header("Location: meus_itens_cadastrados.php");
      }
   
      else {
   
         header("Location: edita_item.php?errodeexclusao=2");
      }
      
?>
