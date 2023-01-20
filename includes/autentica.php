<?php
   //(RE)iniciar sessão
   session_start();

   //Se NÃO foi criada uma sessão autenticada
   //Se NÃO existe o valor ID guardado na sessão
   if(!isset($_SESSION['id'])) {
      header("Location: login_tela.php?autentica=1");
   }
?>