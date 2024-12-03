<link rel="stylesheet" type="text/css" href="loja.css">


<body>
<div id="topo">
            <?php
            include 'index_topo.php';
            ?>
</div>
<div id="menu">
            <?php
            include 'index_menu.php';
            ?>
</div>

<div class="conteudo">
  <div class="produtos">
    <div class="roupas">
      <img src="imagens/poloazul.jfif" class="img_roupa">
      <h4 class="nome_produto">Camisa Polo Azul</h4>
      <p class="valor_produto">R$ 150,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/polovermelha.jfif" class="img_roupa">
      <h4 class="nome_produto">Camisa Polo Vermelha</h4>
      <p class="valor_produto">R$ 147,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/polocinza.jfif" class="img_roupa">
      <h4 class="nome_produto">Camisa Polo Cinza</h4>
      <p class="valor_produto">R$ 145,90</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/calcajeans.jfif" class="img_roupa">
      <h4 class="nome_produto">Calça Jeans</h4>
      <p class="valor_produto">R$ 147,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/polopreta.jfif" class="img_roupa">
      <h4 class="nome_produto">Camisa Polo Preta</h4>
      <p class="valor_produto">R$ 147,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/blusapreta.jfif" class="img_roupa">
      <h4 class="nome_produto">Blusa Preta</h4>
      <p class="valor_produto">R$ 147,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

  </div>
  <div class="produtos">
    <div class="roupas">
      <img src="imagens/poloazul.jfif" class="img_roupa">
      <h4 class="nome_produto">Camisa Polo Azul</h4>
      <p class="valor_produto">R$ 150,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/polovermelha.jfif" class="img_roupa">
      <h4 class="nome_produto">Camisa Polo Vermelha</h4>
      <p class="valor_produto">R$ 147,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/polocinza.jfif" class="img_roupa">
      <h4 class="nome_produto">Camisa Polo Cinza</h4>
      <p class="valor_produto">R$ 145,90</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/calcajeans.jfif" class="img_roupa">
      <h4 class="nome_produto">Calça Jeans</h4>
      <p class="valor_produto">R$ 147,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/polopreta.jfif" class="img_roupa">
      <h4 class="nome_produto">Camisa Polo Preta</h4>
      <p class="valor_produto">R$ 147,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/blusapreta.jfif" class="img_roupa">
      <h4 class="nome_produto">Blusa Preta</h4>
      <p class="valor_produto">R$ 147,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>
  </div>

  <div class="produtos">
    <div class="roupas">
      <img src="imagens/poloazul.jfif" class="img_roupa">
      <h4 class="nome_produto">Camisa Polo Azul</h4>
      <p class="valor_produto">R$ 150,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/polovermelha.jfif" class="img_roupa">
      <h4 class="nome_produto">Camisa Polo Vermelha</h4>
      <p class="valor_produto">R$ 147,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/polocinza.jfif" class="img_roupa">
      <h4 class="nome_produto">Camisa Polo Cinza</h4>
      <p class="valor_produto">R$ 145,90</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/calcajeans.jfif" class="img_roupa">
      <h4 class="nome_produto">Calça Jeans</h4>
      <p class="valor_produto">R$ 147,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/polopreta.jfif" class="img_roupa">
      <h4 class="nome_produto">Camisa Polo Preta</h4>
      <p class="valor_produto">R$ 147,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/blusapreta.jfif" class="img_roupa">
      <h4 class="nome_produto">Blusa Preta</h4>
      <p class="valor_produto">R$ 147,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

  </div>

  <div class="produtos">
    <div class="roupas">
      <img src="imagens/poloazul.jfif" class="img_roupa">
      <h4 class="nome_produto">Camisa Polo Azul</h4>
      <p class="valor_produto">R$ 150,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/polovermelha.jfif" class="img_roupa">
      <h4 class="nome_produto">Camisa Polo Vermelha</h4>
      <p class="valor_produto">R$ 147,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/polocinza.jfif" class="img_roupa">
      <h4 class="nome_produto">Camisa Polo Cinza</h4>
      <p class="valor_produto">R$ 145,90</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/calcajeans.jfif" class="img_roupa">
      <h4 class="nome_produto">Calça Jeans</h4>
      <p class="valor_produto">R$ 147,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/polopreta.jfif" class="img_roupa">
      <h4 class="nome_produto">Camisa Polo Preta</h4>
      <p class="valor_produto">R$ 147,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

    <div class="roupas">
      <img src="imagens/blusapreta.jfif" class="img_roupa">
      <h4 class="nome_produto">Blusa Preta</h4>
      <p class="valor_produto">R$ 147,00</p>
      <input type="number" class="input-quantidade" min="1" value="1">
      <select class="select-tamanho">
        <option value="P">P</option>
        <option value="M">M</option>
        <option value="G">G</option>
        <option value="GG">GG</option>
      </select>
      <button class="btn-add-carrinho" onclick="addProduct(event)">Adicionar ao Carrinho</button>
    </div>

  </div>



  <form action="index_conteudo2.php" method="post">
        <button type="submit" name="pagina2"> 2 </button>
    </form>

</div>


<!-- Interface do Carrinho -->
<div id="carrinho" class="carrinho">
  <h2>Seu Carrinho</h2>
  <ul id="lista-carrinho">
    <!-- Produtos serão adicionados aqui -->
  </ul>
  <p id="total-carrinho">Total: R$ 0,00</p>
  <button class="btn-finalizar">Finalizar Compra</button>
</div>
<script src="conteudo_carrinho.js"></script>

<div id="rodape">
            <?php
            include 'index_rodape.php';
            ?>
</div>

</body>