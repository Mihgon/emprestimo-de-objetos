<?php

include "includes/topo.php";
include "includes/conecta.php";

$id = "";
$nome = "";
$cpf = "";
$genero = "";
$telefone = "";
$cep = "";
$logradouro = "";
$bairro = "";
$cidade = "";
$estado = "";
$email = "";
$senha = "";

//Se foi enviado ID via GET - se é edição de cadastro
//if(isset($_GET['id'])) {
$idalteracao = $_SESSION['id'];
//Obtém valor enviado via GET
//$id= $_GET['id'];

$sql = "SELECT * FROM cadastro_usuario WHERE id = $idalteracao";
//Envia a consulta para obter cadastro atual
$res = mysqli_query($conn, $sql);
//Armazena os dados obtidos
$row = mysqli_fetch_assoc($res);


$id = $row['id'];
$nome = $row['nome'];
$cpf = $row['cpf'];
$genero = $row['genero'];
$telefone = $row['telefone'];
$cep = $row['cep'];
$logradouro = $row['logradouro'];
$bairro = $row['bairro'];
$cidade = $row['cidade'];
$estado = $row['estado'];
$email = $row['email'];
$senha = $row['senha'];

?>
<header>
  <div>
    <a href="index.php">
      <img class="logo" src="img/lupas.png" alt="logo" />
    </a>
  </div>
  <div class="logout">
    <a href="logout.php">
      <img class="sair" src="img/sair.png" alt="sair" />
    </a>
  </div>
  <div class="containerfundo">
    <h1>
      Biblioteca de Bugigangas
      <h2>Faça aqui um empréstimo consciente!</h2>
    </h1>
  </div>
  <div class="dropdown">
    <button class="mainmenubtn">
      <img class="menu-suspenso" src="img/menu-suspenso.png" alt="menu-suspenso" />
    </button>
    <div class="dropdown-child">
      <a href="meus_emprestimos.php">Meus empréstimos</a>
      <a href="meus_itens_cadastrados.php">Meus itens cadastrados</a>
      <a href="itens_disponiveis.php">Itens disponíveis</a>
      <a href="altera_cadastro.php">Meu cadastro</a>
    </div>
  </div>
</header>
<main>

  <div class="containercadastro">
    <div class="cadastro">
      <fieldset>
        <legend>Formulário de cadastro:</legend>
        <form action="recebeAlteraCadastro.php" method="post" name="formulario">

          <input type="hidden" name="id" value="<?php echo $id; ?>" /> <br />

          <table class="tablecadastro">
            <tbody>
              <tr>
                <th id="nome">Nome completo</th>
                <td><input type="text" id="nome" name="nome" maxlength="100" value="<?php echo $nome; ?>" /></td>
              </tr><br>
              <tr>
                <th id="cpf">CPF</th>
                <td><input type="text" id="number" name="cpf" maxlength="11" value="<?php echo $cpf; ?>" /></td>
              </tr>

              <tr>
                <th id="genero">Gênero</th>
                <td>
                  <select name="genero">
                    <option value="M" <?php if ($genero == 'M') {
                                        echo "selected";
                                      } ?>>Masculino</option>
                    <option value="F" <?php if ($genero == 'F') {
                                        echo "selected";
                                      } ?>>Feminino</option>
                  </select>
                </td>
              </tr>

              <tr>
                <th id="telefone">Telefone</th>
                <td><input type="text" id="phone" name="telefone" maxlength="11" value="<?php echo $telefone; ?>" /></td>
              </tr>


              <tr>
                <th id="cep">CEP</th>
                <td><input type="text" id="cep" name="cep" maxlength="8" value="<?php echo $cep; ?>" /></td>
              </tr>

              <tr>
                <th id="logradouro">Logradouro</th>
                <td><input type="text" id="logradouro" name="logradouro" maxlength="50" value="<?php echo $logradouro; ?>" /></td>
              </tr>

              <tr>
                <th id="bairro">Bairro</th>
                <td><input type="text" id="bairro" name="bairro" maxlength="15" value="<?php echo $bairro; ?>" /></td>
              </tr>

              <tr>
                <th id="cidade">Cidade</th>
                <td><input type="text" id="cidade" name="cidade" maxlength="15" value="<?php echo $cidade; ?>" /></td>
              </tr>

              <tr>
                <th id="estado">Estado</th>
                <td>
                  <select name="estado">
                    <option value="AC" <?php if ($estado == 'AC') {
                                          echo "selected";
                                        } ?>>AC</option>
                    <option value="AL" <?php if ($estado == 'AL') {
                                          echo "selected";
                                        } ?>>AL</option>
                    <option value="AP" <?php if ($estado == 'AP') {
                                          echo "selected";
                                        } ?>>AP</option>
                    <option value="AM" <?php if ($estado == 'AM') {
                                          echo "selected";
                                        } ?>>AM</option>
                    <option value="BA" <?php if ($estado == 'BA') {
                                          echo "selected";
                                        } ?>>BA</option>
                    <option value="CE" <?php if ($estado == 'CE') {
                                          echo "selected";
                                        } ?>>CE</option>
                    <option value="DF" <?php if ($estado == 'DF') {
                                          echo "selected";
                                        } ?>>DF</option>
                    <option value="ES" <?php if ($estado == 'ES') {
                                          echo "selected";
                                        } ?>>ES</option>
                    <option value="GO" <?php if ($estado == 'GO') {
                                          echo "selected";
                                        } ?>>GO</option>
                    <option value="MA" <?php if ($estado == 'MA') {
                                          echo "selected";
                                        } ?>>MA</option>
                    <option value="MT" <?php if ($estado == 'MT') {
                                          echo "selected";
                                        } ?>>MT</option>
                    <option value="MS" <?php if ($estado == 'MS') {
                                          echo "selected";
                                        } ?>>MS</option>
                    <option value="MG" <?php if ($estado == 'MG') {
                                          echo "selected";
                                        } ?>>MG</option>
                    <option value="PA" <?php if ($estado == 'PA') {
                                          echo "selected";
                                        } ?>>PA</option>
                    <option value="PB" <?php if ($estado == 'PB') {
                                          echo "selected";
                                        } ?>>PB</option>
                    <option value="PR" <?php if ($estado == 'PR') {
                                          echo "selected";
                                        } ?>>PR</option>
                    <option value="PE" <?php if ($estado == 'PE') {
                                          echo "selected";
                                        } ?>>PE</option>
                    <option value="PI" <?php if ($estado == 'PI') {
                                          echo "selected";
                                        } ?>>PI</option>
                    <option value="RJ" <?php if ($estado == 'RJ') {
                                          echo "selected";
                                        } ?>>RJ</option>
                    <option value="RN" <?php if ($estado == 'RN') {
                                          echo "selected";
                                        } ?>>RN</option>
                    <option value="RS" <?php if ($estado == 'RS') {
                                          echo "selected";
                                        } ?>>RS</option>
                    <option value="RO" <?php if ($estado == 'RO') {
                                          echo "selected";
                                        } ?>>RO</option>
                    <option value="RR" <?php if ($estado == 'RR') {
                                          echo "selected";
                                        } ?>>RR</option>
                    <option value="SC" <?php if ($estado == 'SC') {
                                          echo "selected";
                                        } ?>>SC</option>
                    <option value="SP" <?php if ($estado == 'SP') {
                                          echo "selected";
                                        } ?>>SP</option>
                    <option value="SE" <?php if ($estado == 'SE') {
                                          echo "selected";
                                        } ?>>SE</option>
                    <option value="TO" <?php if ($estado == 'TO') {
                                          echo "selected";
                                        } ?>>TO</option>
                  </select>
                </td>
              </tr>

              <tr>
                <th id="usuario">E-mail</th>
                <td><input type="email" id="email" name="email" maxlength="100" value="<?php echo $email; ?>" /></td>
              </tr>

              <tr>
                <th id="senha">Senha</th>
                <td><input type="password" id="senha" name="senha" maxlength="100" value="<?php echo $senha; ?>" /></td>
              </tr>

              <tr>
                <td></td>
                <td><input class="botao" type="submit" value="Alterar" /></td>
              </tr>
              <tr>
                <td></td>
                <td><input class="botao" type="reset" value="Limpar" /></td>
              </tr>
            </tbody>
          </table>
        </form>
        <div>
          <a href="login_tela.php">
            <img class="voltar" src="img/voltar.png" alt="voltar" />
          </a>
        </div>
      </fieldset>
    </div>
  </div>
</main>
<?php

include "includes/rodape.php";

?>