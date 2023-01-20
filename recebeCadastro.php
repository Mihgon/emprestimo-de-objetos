<?php

include "includes/conecta.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$genero = $_POST['genero'];
$cep = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if (!empty($id)) {
   echo 'entrou aqui';

   //Monta o SQL para inserir os dados do formulário no SQL
   $sql = "INSERT INTO cadastro_usuario (nome, cpf, telefone, genero, cep, logradouro, bairro, cidade, estado, email, senha) 
      VALUES ('$nome', '$cpf', '$telefone', '$genero', '$cep', '$logradouro', '$bairro', '$cidade', '$estado', '$email', '$senha')";

   $sqlverifica = "SELECT * FROM cadastro_usuario WHERE cpf = '$cpf'";
   $res1 = mysqli_query($conn, $sqlverifica);

   $qtdeRegistros = mysqli_num_rows($res1);

   //Encontrou login e senha compatíveis
   if ($qtdeRegistros > 0) {

      //ERRO
      header("Location: login_tela.php?cpfexistente=5");
   } else {
      //Envia código SQL para o MySQL
      $res = mysqli_query($conn, $sql);

      //Se inserio com sucesso
      if ($res) {
         //Redireciona para login.
         header("Location: login_tela.php?cadastrobemsucedido=1");
      } else {

         header("Location: login_tela.php?errodesconhecido=1");
      }
   }
} else {
   echo 'Estou aqui';
}
