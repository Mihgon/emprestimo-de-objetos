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
   $data_emp = $_POST['data_emp'];
   $data_dev = $_POST['data_dev'];
   
   if($disponibilidade == 'Disponivel') {
      //echo "$disponibilidade";}

     
         $sql = "UPDATE cadastra_itens SET 
         disponibilidade = 'Indisponivel' WHERE iddono not like '$_SESSION[id]' AND id like '$id'";
      
         //Envia código SQL para o MySQL
         $res = mysqli_query($conn, $sql);

         //echo "$sql";

         $sql2 = "INSERT INTO usuario_faz_emprestimo (id_item, id_usuario, data_emprestimo, data_devolucao) VALUES
         ('$idemprestimo_item', '$idemprestimo_usuario', '$data_emp', '$data_dev')";

         //echo "$sql2";

         //Envia código SQL para o MySQL
         $res2 = mysqli_query($conn, $sql2);
      
         //Se atualizou com sucesso
         if($res and $res2) {
            //Redireciona para login.
           header("Location: meus_emprestimos.php");
         }
      
         else {
      
            header("Location: itens_disponiveis.php?errodeemprestimo=2");
         }
   }
   else {
      header("Location: itens_disponiveis.php?errodeemprestimo=3");
  }


      
      

?>