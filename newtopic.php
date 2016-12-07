<?php
	include ('layout_manager.php');
	include ('content_function.php');
?>
<html>
<head>
	<title>Forum da Eng.Comp</title>
</head>
<link href="/forum-tutorial/styles/main.css" type="text/css" rel="stylesheet" />
<body>
	<div class="pane">
		<div class="header"><h1><a href="/forum-tutorial">Forum da Computacao</a></h1></div>
		<div class="loginpane">
			<?php
				session_start();
				if (isset($_SESSION['username'])) {
					logout();
				} else {
					if (isset($_GET['status'])) {
						if ($_GET['status'] == 'reg-success') {
							echo "<h1 style='color: green;'>Novo usuario cadastrado com sucesso!!</h1>";
						} else if ($_GET['status'] == 'login-fail') {
							echo "<h1 style='color: red;'>Usuario ou Senha invalida!!</h1>";
						}
					}
					loginform();
				}
			?>
		</div>
		<div class="forumdesc">
			<p>Seja bem vindo ao forum! Participe e seja legal com seus amiguinhos!</p>
		</div>
		<div class="content">
			<?php 
				if (isset($_SESSION['username'])) {
					echo "<form action='/forum-tutorial/addnewtopic.php?cid=".$_GET['cid']."&scid=".$_GET['scid']."'
						  method='POST'>
						  <p>Título: </p>
						  <input type='text' id='topic' name='topic' size='100' />
						  <p>Conteúdo: </p>
						  <textarea id='content' name='content'></textarea><br />
						  <input type='submit' value='Adicionar Tópico' /></form>";
				} else {
					echo "<p>Por favor faça seu login ou <a href='/forum-tutorial/register.html'>Clique aqui</a> para se cadastrar.</p>";
				}
			?>
		</div>
	</div>
</body>
</html>