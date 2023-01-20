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



if ($id) {
   $sql = "UPDATE cadastro_usuario SET 
      nome = '$nome',
      cpf = '$cpf',
      telefone =  '$telefone',
      genero = '$genero',
      cep =  '$cep',
      logradouro = '$logradouro',
      bairro = '$bairro',
      cidade = '$cidade',
      estado = '$estado',
      email = '$email',
      senha = '$senha'
      WHERE id = $id";
}
//Envia código SQL para o MySQL
$res = mysqli_query($conn, $sql);

//Se atualizou com sucesso
if ($res) {
   //Redireciona para login.
   header("Location: index.php");
} else {

   header("Location: alterar_cadastro.php?erro=2");
}
