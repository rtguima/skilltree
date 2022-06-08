<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br"><head>
<meta charset="UTF-8" />
<link rel="shortcut icon" href="icon.ico" type="image/x-icon" />

<title>TI</title>
<link href="css.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="destacaTexto.js"></script></head>
<body>

<?php
//Conexão com Banco de dados
    error_reporting(E_ERROR | E_PARSE);
    $lnk = mysqli_connect('localhost','root','', 'intranet_sistemas') or die(mysqli_error()) or die ('Nao foi possível conectar ao MySql: ' . mysqli_error($lnk));

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if (!empty($id)) {

$excl_usuario = "DELETE FROM dados_usuarios WHERE id='$id'";
$excluir_usuario = mysqli_query($lnk, $excl_usuario);


if (mysqli_affected_rows($lnk)){
	$_SESSION['msg'] = "<p style='color:green;'> Usuario EXCLUIDO com sucesso!!!</p>";
	header("Location: matriz.php");
}else {
	echo '<h2><a style="color: #DF0101"><center>'. "Erro ao tentar excluir usuario." . '</a>';
	echo '<p><a href="Matriz.php">' . "Voltar" . '</a></center>';
}

}else {
	echo '<h2><a style="color: #DF0101"><center>'. "Erro, usuario invalido, tente novamente..." . '</a>';
	echo '<p><a href="Matriz.php">' . "Voltar" . '</a></center>';
}
?>


<br/>
<br/>
<br/>
</body>
</html>