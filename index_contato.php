<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>CONTATO</title>
	<link rel="stylesheet" type="text/css" href="loja.css">

</head>
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
    <div class="contato">	
	<h1 class="titulos">CONTATO</h1>
	<!-- ---------------------------FORMULARIO--------------------------- -->

		<div class="contato1">
			<label class="legenda">NOME :</label><br>
			<input type="text" name="nome" class="campos" placeholder="Preencha este campo com seu nome" required><br><br>
		
			<label class="legenda">EMAIL :</label><br>
			<input type="email" name="email" class="campos" placeholder="Digite seu emali aqui" required><br><br>
	
			<label class="legenda">ASSUNTO :</label><br>
			<input type="text" name="assunto" class="campos" placeholder="Sobre o que você deseja falar ?" required><br><br>
		
			<label class="legenda">CONTEUDO :</label><br>
			<textarea name="conteudo" class="campos" placeholder="Digite no maximo 140 caracteres o conteudo" maxlength="140"  required></textarea><br><br>
			
			<input type="submit" value="ENVIAR" class="bt_enviar">
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