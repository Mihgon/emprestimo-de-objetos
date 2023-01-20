<?php

  include "includes/topo_menu.php";
  include "includes/conecta.php";

  $id = "";
  $iddono = "";
  $objeto = "";
  $estado_obj = "";
  $data_cad = "";
  $disponibilidade = "";

  $idemprestimo = "";
  $idemprestimo_item = "";
  $idemprestimo_usuario = "";
  $data_emp = "";
  $data_dev = "";

  //Se foi enviado ID via GET - se é edição de cadastro
  if(isset($_GET['id'])) {
    //$idalteracao = $_SESSION['id'];
    //Obtém valor enviado via GET
    $id= $_GET['id'];

    $sql = "SELECT * FROM cadastra_itens WHERE id = $id";
    //Envia a consulta para obter cadastro atual
    $res = mysqli_query($conn, $sql);
    //Armazena os dados obtidos
    $row =mysqli_fetch_assoc($res);
  }

  $id = $row['id'];
  $iddono = $row['iddono'];
  $objeto = $row['objeto'];
  $estado_obj = $row['estado_obj'];
  $data_cad = $row['data_cad'];
  $disponibilidade = $row['disponibilidade'];
  
  //$idemprestimo = $row['idemprestimo'];
  //$ididemprestimo_item = $row['ididemprestimo_item'];
  //$ididemprestimo_usuario = $row['ididemprestimo_usuario'];
  //$data_emp = $row['data_emp'];
  //$data_dev = $row['data_dev'];

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
            <legend>Realize seu empréstimo:</legend>
            <form action="emprestaItem.php" method="post" name="formulario">

              <input type="hidden" name="id" value="<?php echo $id;?>" /> <br />
              <input type="hidden" name="iddono" value="<?php echo $iddono;?>" /> <br />

              <table class="tableeditar">
                <tbody>
                  <tr>
                    <th id="objeto">Objeto</th>
                    <td><input type="text" id="objeto" name="objeto" maxlength="50" value="<?php echo $objeto;?>" disabled=""/></td>
                  </tr>

                  <tr>
                    <th id="status">Estado do objeto</th>
                    <td>
                      <select name="estado_obj" disabled="">
                        <option value="" <?php if($estado_obj=='') {echo "selected";} ?>>-Selecione-</option>
                        <option value="Novo" <?php if($estado_obj=='Novo') {echo "selected";} ?>>Novo</option>
                        <option value="Semi-novo" <?php if($estado_obj=='Semi-novo') {echo "selected";} ?>>Semi-novo</option>
                        <option value="Com marcas de uso" <?php if($estado_obj=='Com marcas de uso') {echo "selected";} ?>>Com marcas de uso</option>
                        <option value="Quebrado" <?php if($estado_obj=='Quebrado') {echo "selected";} ?>>Quebrado</option>
                      </select>
                    </td>
                  </tr>
                  
                  <tr>
                    <th id="data_cad">Data do cadastro</th>
                    <td><input type="date" name="data_cad" value="<?php echo $data_cad;?>" disabled=""></td>
                  </tr>

                  <input type="hidden" name="idemprestimo" value="<?php echo $idemprestimo;?>" /> <br />
                  <input type="hidden" name="idemprestimo_item" value="<?php echo $idemprestimo_item;?>" /> <br />
                  <input type="hidden" name="idemprestimo_usuario" value="<?php echo $idemprestimo_usuario;?>" /> <br />

                  <tr>
                    <th id="data_emp">Data do Emprestimo</th>
                    <td><input type="date" name="data_emp" value="<?php echo $data_emp;?>"></td>
                  </tr>

                  <tr>
                    <th id="data_dev">Data da Devolução</th>
                    <td><input type="date" name="data_dev" value="<?php echo $data_dev;?>"></td>
                  </tr>


                  <input type="hidden" name="disponibilidade" value="<?php echo $disponibilidade?>" >

                  <tr>
                    <td></td>
                    <td><input class="botao" type="submit" value="Pegar emprestado" /></td>
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