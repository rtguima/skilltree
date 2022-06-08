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
    $lnk = mysqli_connect('localhost','root','', 'st_bd') or die(mysqli_error()) or die ('Nao foi possível conectar ao MySql: ' . mysqli_error($lnk));

$st_id = filter_input(INPUT_GET, 'st_id', FILTER_SANITIZE_NUMBER_INT);
if (!empty($st_id)) {

$excl_usuario = "DELETE FROM st_dados_usuarios WHERE st_id='$st_id'";
$excluir_usuario = mysqli_query($lnk, $excl_usuario);


if (mysqli_affected_rows($lnk)){
	$_SESSION['msg'] = "<p style='color:green;'> Usuario EXCLUIDO com sucesso!!!</p>";
	header("Location: lista_assinaturas.php");
}else {
	$_SESSION['msg'] = "<p style='color:red;'> Usuario não foi excluido devido a erro.</p>";
	header("Location: edita_assinatura.php");
}

}else {
	$_SESSION['msg'] = "<p style='color:red;'> Erro, necessário selecionar um usuário.</p>";
	header("Location: edita_assinatura.php");
}
?>


<br/>
<br/>
<br/>
</body>
</html>