<?php
   session_start();
   include "includes/conecta.php";

   $id = $_POST['id'];
   $iddono = $_SESSION['id'];
   //$objeto = $_POST['objeto'];
   //$estado_obj = $_POST['estado_obj'];
   //$data_cad = $_POST['data_cad'];
   $disponibilidade = $_POST['disponibilidade'];

   $idemprestimo = $_POST['idemprestimo'];
   $idemprestimo_item = $_POST['id'];
   $idemprestimo_usuario = $_SESSION['id'];
   //$data_emp = $_POST['data_emp'];
   $data_dev = $_POST['data_dev'];
   
   if($disponibilidade == 'Indisponivel') {

         $sql = "UPDATE cadastra_itens JOIN usuario_faz_emprestimo ON cadastra_itens.id = usuario_faz_emprestimo.id_item SET disponibilidade = 'Disponivel' WHERE usuario_faz_emprestimo.id = '$id'";
         
         $res = mysqli_query($conn, $sql);

         //if($disponibilidade == 'Disponivel'){
         $sql2 = "DELETE FROM usuario_faz_emprestimo WHERE usuario_faz_emprestimo.id = '$id'";
         //Envia código SQL para o MySQL
         $res2 = mysqli_query($conn, $sql2);

         //Se atualizou com sucesso
         if($res and $res2) {
            //Redireciona para login.
            header("Location: meus_emprestimos.php");
         }
      
         else {
      
            header("Location: itens_disponiveis.php?errodedevolucao=2");
         }
   }
   else {
      header("Location: itens_disponiveis.php?errodedevolucao=1");
  }


?>