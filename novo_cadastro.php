<!DOCTYPE html>

<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Faça seu cadastro</title>
  <link rel="stylesheet" href="style_login.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Mukta&family=Permanent+Marker&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="Img/lupas.png" type="image/lupa-icon" />
</head>

<body>
  <main>
    <div class="containercadastro">
      <div class="cadastro">
        <fieldset>
          <legend>Formulário de cadastro:</legend>
          <form action="recebeCadastro.php" method="post" name="formulario">

            <input type="hidden" name="id" value="id" /> <br /> 

            <table class="tablecadastro">
              <tbody>
                <tr>
                  <th id="nome">Nome completo</th>
                  <td><input type="text" id="nome" name="nome" maxlength="100" /></td>
                </tr><br>
                <tr>
                  <th id="cpf">CPF</th>
                  <td><input type="text" id="number" name="cpf" maxlength="11" /></td>
                </tr>

                <tr>
                  <th id="genero">Gênero</th>
                  <td>
                    <select name="genero">
                      <option value="M">Masculino</option>
                      <option value="F">Feminino</option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <th id="telefone">Telefone</th>
                  <td><input type="text" id="phone" name="telefone" maxlength="11" /></td>
                </tr>


                <tr>
                  <th id="cep">CEP</th>
                  <td><input type="text" id="cep" name="cep" maxlength="8" /></td>
                </tr>

                <tr>
                  <th id="logradouro">Logradouro</th>
                  <td><input type="text" id="logradouro" name="logradouro" maxlength="50" /></td>
                </tr>

                <tr>
                  <th id="bairro">Bairro</th>
                  <td><input type="text" id="bairro" name="bairro" maxlength="15" /></td>
                </tr>

                <tr>
                  <th id="cidade">Cidade</th>
                  <td><input type="text" id="cidade" name="cidade" maxlength="15" /></td>
                </tr>
                      
                <tr>
                  <th id="estado">Estado</th>
                  <td>
                    <select name="estado">
                      <option value="AC">AC</option>
                      <option value="AL">AL</option>
                      <option value="AP">AP</option>
                      <option value="AM">AM</option>
                      <option value="BA">BA</option>
                      <option value="CE">CE</option>
                      <option value="DF">DF</option>
                      <option value="ES">ES</option>
                      <option value="GO">GO</option>
                      <option value="MA">MA</option>
                      <option value="MT">MT</option>
                      <option value="MS">MS</option>
                      <option value="MG">MG</option>
                      <option value="PA">PA</option>
                      <option value="PB">PB</option>
                      <option value="PR">PR</option>
                      <option value="PE">PE</option>
                      <option value="PI">PI</option>
                      <option value="RJ">RJ</option>
                      <option value="RN">RN</option>
                      <option value="RS">RS</option>
                      <option value="RO">RO</option>
                      <option value="RR">RR</option>
                      <option value="SC">SC</option>
                      <option value="SP">SP</option>
                      <option value="SE">SE</option>
                      <option value="TO">TO</option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <th id="usuario">E-mail</th>
                  <td><input type="email" id="email" name="email" maxlength="100" /></td>
                </tr>

                <tr>
                  <th id="senha">Senha</th>
                  <td><input type="password" id="senha" name="senha" maxlength="100" /></td>
                </tr>

                <tr>
                  <td></td>
                  <td><input class="botao" type="submit" value="Cadastrar" /></td>
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
</body>

</html>