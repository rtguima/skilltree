<?php
    include 'template/headerST.php';
    include 'template/menu_login_ST.php';
?>

<section>
</section>
<main>
<center>
	<h2>Skill Tree</h2>
<br>
<br>

<table style="width: 300px; height: 250px;background-color: #F0F8FF; text-align: center; border: 1;">
  <tr>
    <td>
<h2>Entrar</h2>
<br>
<form method="post" action="login.php">
<input type="text" name="st_login_email" placeholder="E-mail" autofocus="autofocus" size="40" /><br><br>
<input type="password" name="st_login_senha" placeholder="Senha" size="40" /><br><br>
<input type="submit" value="Entrar" /><br>
<br>
<br>
<a href="recuperar_senha.php">Recuperar Senha</a>
</form>
</td>
</tr>
</table>
</center>

</main>

<?php
    include 'template/footer.php'
?>