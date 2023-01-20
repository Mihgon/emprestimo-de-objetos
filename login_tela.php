<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - área restrita</title>
  <link rel="stylesheet" href="style_login.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Mukta&family=Permanent+Marker&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="Img/lupas.png" type="image/lupa-icon" />
</head>

<body>
  <main>
    <div class="containerlogin">
      <h1>
        <img class="logo" src="img/lupas.png" alt="logo" />
       
        Login:
      </h1>

      <div class="login">

      <?php

        if(isset($_GET['erro'])) {
          echo '<p style="text-align:center;color:red">Usuário e/ou senha incorreta(s). </p>';
        }
        if(isset($_GET['autentica'])) {
          echo '<p style="text-align:center;color:red">Você não tem permissão de acesso. </p>';
        }
        if(isset($_GET['cadastrobemsucedido'])) {
          echo '<p style="text-align:center;color:green">Cadastro realizado, agora faça seu login. </p>';
        }
        if(isset($_GET['cpfexistente'])) {
          echo '<p style="text-align:center;color:green">CPF já cadastrado na base. </p>';
        }
        if(isset($_GET['errodesconhecido'])) {
          echo '<p style="text-align:center;color:green">Erro desconhecido. </p>';
        }
      ?>

      <form action="recebelogin.php" method="post" name="formulario">
        <table class="tablelogin">
            <thead>
              <th class="table-dark" colspan="4">Área Restrita</th>
              
            </thead>

            <tbody>
              
              <tr>
                <th id="usuario">E-mail</th>
                <td><input type="email" name="email" id="email"/></td>
              </tr><br>
              <tr>
                <th id="acesso">Senha</th>
                <td><input type="password" name="senha" id="senha" /></td>
              </tr>
              <tr>
                <td></td>
                <td><input class="botao" type="submit" value="Autenticar" /></td>
              </tr>
            </tbody>
          </table>

          <br><br>

          <h4>
            Não tem cadastro?
            <p>
              Cadastre-se
              <a href="novo_cadastro.php" target="_blank"> aqui.</a>
            </p>
          </h4>
        </form>
      </div>
    </div>
  </main>
</body>

</html>