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
		<?php
			if (isset($_SESSION['username'])) {
				echo "<div class='content'><p><a href='/forum-tutorial/newtopic/".$_GET['cid']."/".$_GET['scid']."'>
					  Adicionar novo topico.</a></p></div>";
			}
		?>
		<div class="content">
			<?php disptopics($_GET['cid'], $_GET['scid']); ?>
		</div>
	</div>
</body>
</html>