// Função para renderizar o carrinho
function renderizarCarrinho() {
    var carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    var containerProdutos = document.getElementById('lista-carrinho');
    containerProdutos.innerHTML = ''; // Limpa o conteúdo anterior
    var totalCompra = 0;
  
    if (carrinho.length === 0) {
      // Se o carrinho estiver vazio, exibe a mensagem
      containerProdutos.innerHTML = 'Desculpe, não há nenhum item no carrinho.';
      return;
    }
  
    carrinho.forEach(function(produto, index) {
      var item = document.createElement('li');
      item.innerHTML = `
        <img src="${produto.image}" class="img_roupa">
        <span>${produto.title}</span>
        <span>${produto.size}</span>
        <span>${produto.price}</span>
        <button onclick="removeItemFromCart(${index})">Remover</button>
      `;
      containerProdutos.appendChild(item);
      totalCompra += parseFloat(produto.price.replace('R$', '').replace(',', '.')) * produto.quantity;
    });
  
    document.getElementById('total-carrinho').innerText = `Total: R$ ${totalCompra.toFixed(2)}`;
  }
  
  // Função para adicionar o item no carrinho
  function addProduct(event) {
    var cardProduto = event.target.closest('.roupas');
    var nomeProduto = cardProduto.querySelector('.nome_produto').textContent;
    var imagem = cardProduto.querySelector('.img_roupa').src;
    var tamanhoProduto = cardProduto.querySelector('.select-tamanho').value;
    var precoProduto = cardProduto.querySelector('.valor_produto').textContent;
    var quantidadeProduto = parseInt(cardProduto.querySelector('.input-quantidade').value);
  
    var novoProduto = {
      title: nomeProduto,
      image: imagem,
      size: tamanhoProduto,
      price: precoProduto,
      quantity: quantidadeProduto
    };
  
    // Recuperar o carrinho atual do localStorage, ou iniciar um novo carrinho se não existir
    var carrinho = localStorage.getItem('carrinho') ? JSON.parse(localStorage.getItem('carrinho')) : [];
  
    // Verifica se o produto já está no carrinho
    var produtoExistente = carrinho.find(function(produto) {
      return produto.title === novoProduto.title && produto.size === novoProduto.size;
    });
  
    if (produtoExistente) {
      // Se o produto já estiver no carrinho, atualiza a quantidade
      produtoExistente.quantity += novoProduto.quantity;
    } else {
      // Adiciona o novo produto ao carrinho
      carrinho.push(novoProduto);
    }
  
    localStorage.setItem('carrinho', JSON.stringify(carrinho));
    renderizarCarrinho();
  }
  
  // Função para remover o item do carrinho
  function removeItemFromCart(index) {
    var carrinho = JSON.parse(localStorage.getItem('carrinho')) || [];
    carrinho.splice(index, 1); // Remove o item no índice especificado
    localStorage.setItem('carrinho', JSON.stringify(carrinho)); // Atualiza o carrinho no localStorage
    renderizarCarrinho(); // Re-renderiza a lista de produtos no carrinho após a remoção
  }
  
  // Inicializa o carrinho ao carregar a página
  document.addEventListener('DOMContentLoaded', renderizarCarrinho);


