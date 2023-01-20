<?php

  include "includes/topo_menu.php"

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
            <legend>Formulário de cadastro de item:</legend>
            <form action="recebeItem.php" method="post" name="formulario">

              <input type="hidden" name="id" value="" /> <br />
              <input type="hidden" name="iddono" value="" /> <br />

              <table class="tablecadastro">
                <tbody>
                  <tr>
                    <th id="objeto">Objeto</th>
                    <td><input type="text" id="objeto" name="objeto" maxlength="50" /></td>
                  </tr>

                  <tr>
                    <th id="status">Estado do objeto</th>
                    <td>
                      <select name="estado_obj">
                        <option value="">-Selecione-</option>
                        <option value="Novo">Novo</option>
                        <option value="Semi-novo">Semi-novo</option>
                        <option value="Com marcas de uso">Com marcas de uso</option>
                        <option value="Quebrado">Quebrado</option>
                      </select>
                    </td>
                  </tr>

                  <tr>
                    <th id="data_cad">Data do cadastro</th>
                    <td><input type="date" name="data_cad" value="<?php echo $data_cad;?>"></td>
                  </tr>

                  <input type="hidden" name="disponibilidade" value="Disponivel" >

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
          </fieldset>
        </div>
      </div>
  
<?php
  include "includes/menu_itens.php";
  include "includes/rodape.php";

?>