<?php
	function loginform() {
		echo "<form action='/forum-tutorial/validatelogin.php' method='POST'>
			  <p>Usuario:</p>
			  <input type='text' id='usernameinput' name='usernameinput' />
				<p>Senha:</p>
				<input type='password' id='passwordinput' name='passwordinput' />
				<input type='submit' value='Entrar' />
				<button type='button' onclick='location.href=\"/forum-tutorial/register.html\";'>Cadastrar</button>
			</form>";
	}
	
	function logout() {
		echo nl2br("<p>Ola ".$_SESSION['username']."!\nTenha um otimo dia e aproveite o nosso forum!</p>
				<form action='/forum-tutorial/logout.php' method='GET'>
				<input type='submit' value='Sair' /></form>");
	}
?>