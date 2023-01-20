<?php

  include "includes/topo.php"

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
    
    <section class="introducao">
      <article>
      Bem-vindo usuário <?php echo $_SESSION['nome']; ?>! <br/>
      </article>
      <h3>Introdução</h3>
      <p>
        Aqui neste espaço você pode estar emprestando qualquer item disponível
        em nosso acervo, ou também pode realizar empréstimos de itens da sua
        escolha.
      </p>
      <ul>
        Alguns exemplos de itens que encontrará em nosso site:
        <li>Escova de dente</li>
        <li>Meia</li>
        <li>Bicicleta</li>
        <li>Smartphone</li>
        <li>Caderno escolar</li>
        <li>Ingresso de cinema</li>
        <li>Alimentos perecíveis e não perecíveis</li>
        <li>Dinheiro</li>
        <li>Passaporte</li>
        <li>Videogames atuais (os retrôs ninguém quer emprestar)</li>
        <li>Botijão de gás</li>
        <li>Sofá</li>
      </ul>
      <p>
        Agora que você já realizou seu cadastro, basta selecionar o objeto
        disponível do seu interesse e ele será enviado para seu endereço.
        <br />
        Poderá selecionar a data de devolução desejada e quando esta data
        chegar basta realizar a devolução que um motoboy irá até a sua casa
        buscar, ou poderá devolver antes caso não precise mais.
        <br /><br />
        Seja muito bem-vindo!
      </p>
    </section>
  </main>
 <?php

    include "includes/rodape.php";

 ?>