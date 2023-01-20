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
    
      <div class="containeritens">
        <div class="cadastro">
          
            <h3>Meus itens cadastrados</h3>

              <table border="1" class="tablecadastro">
              <thead>
              <th class="table-dark" colspan="1">ID</th>
              <th class="table-dark" colspan="1">Objeto</th>
              <th class="table-dark" colspan="1">Estado do objeto</th>
              <th class="table-dark" colspan="1">Disponibilidade</th>
              <th class="table-dark" colspan="2">Ação</th>
              
                  <?php
                    
                    include "includes/conecta.php";
                    $idproprio = $_SESSION['id'];
                    //Monta comando SQL para obter todos os itens.
                    $sql = "SELECT id, objeto, estado_obj, disponibilidade FROM cadastra_itens WHERE iddono like '$idproprio'";

                    //Envia código SQL para o MySQL
                    $res = mysqli_query($conn, $sql);

                    //Percorre os registros encontrados
                    while($row = mysqli_fetch_assoc($res)) {
                      echo "<tr>
                      <td>" . $row['id'] . "</td>
                      <td>" . $row['objeto'] . "</td>
                      <td>" . $row['estado_obj'] . "</td>
                      <td>" . $row['disponibilidade'] . "</td>
                      <td><a href='edita_item.php?id=" . $row['id'] . "'>Editar</td>
                      <td><a href='exclui_item.php?id=". $row['id'] ."'>Excluir</td>

                      </tr>";
                    }
                  ?>
                  
                </tbody>
              </table>
            </form>
        </div>
      </div>

 
<?php
  include "includes/menu_itens.php";

  include "includes/rodape.php";

?>