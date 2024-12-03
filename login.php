<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Login Get Over</title>
	<link rel="stylesheet" type="text/css" href="loja.css">
</head>
<body>
<div id="topo">
    <img src="imagens/getover.png" class="logo">
    <a href="cadastros.php" class="link">CADASTRE-SE</a>
</div>
<div id="menu">
            <?php
            include 'index_menu.php';
            ?>
</div>
<div class="conteudo">
    <div class="produtos">
    <div id="box_form">
	<h1 class="titulos">ENTRAR NO SITE</h1>
	<form action="login_acao.php" method="POST" enctype="multipart/form-data">
		<input type="email" name="email" class="campos_cad" placeholder="email">
		<input type="password" name="senha" class="campos_cad" placeholder="senha">
					<!-- formatação dos botoes -->
	<div id="botoes">
		<input type="submit" value="LOGAR" class="bt_cad">
	</div>
        </div>
    </div>
</div>
<div id="rodape">
            <?php
            include 'index_rodape.php';
            ?>
</div>
</body>
</html>