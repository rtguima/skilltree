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


// recebe os dado
$id_ass = filter_input(INPUT_POST, 'id_ass', FILTER_SANITIZE_NUMBER_INT);
$status_ass = filter_input(INPUT_POST, 'status_ass', FILTER_SANITIZE_STRING);
$filial_ass = filter_input(INPUT_POST, 'filial_ass', FILTER_SANITIZE_STRING);
$nome_ass = filter_input(INPUT_POST, 'nome_ass', FILTER_SANITIZE_STRING);
$setor_ass = filter_input(INPUT_POST, 'setor_ass', FILTER_SANITIZE_STRING);
$cargo_ass = filter_input(INPUT_POST, 'cargo_ass', FILTER_SANITIZE_STRING);
$email_ass = filter_input(INPUT_POST, 'email_ass', FILTER_SANITIZE_STRING);
$telefone_ass = filter_input(INPUT_POST, 'telefone_ass', FILTER_SANITIZE_STRING);
$celular_ass = filter_input(INPUT_POST, 'celular_ass', FILTER_SANITIZE_STRING);
$celular2_ass = filter_input(INPUT_POST, 'celular2_ass', FILTER_SANITIZE_STRING);



$result_ass = "UPDATE ass_email SET status_ass='$status_ass', filial_ass='$filial_ass', nome_ass='$nome_ass', setor_ass='$setor_ass', cargo_ass='$cargo_ass', 
email_ass='$email_ass', telefone_ass='$telefone_ass', celular_ass='$celular_ass', celular2_ass='$celular2_ass' WHERE id_ass='$id_ass' ";
$resultado_ass = mysqli_query($lnk, $result_ass);


if (mysqli_affected_rows($lnk)){
	$_SESSION['msg'] = "<p style='color:green;'> Usuario editado com sucesso!!!</p>";
	header("Location: lista_assinaturas.php");
}else {
	$_SESSION['msg'] = "<p style='color:red;'> Usuario não foi editado devido a erro.</p>";
	header("Location: lista_assinaturas.php");
}
?>


<br/>
<br/>
<br/>
</body>
</html>