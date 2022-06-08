<?php
    session_start();
    require "verifica_st.php"; 
    include 'template/headerST.php';
    include 'template/menuST.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
<link href="css/ti_style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="filtro.js"></script>

<title>Intranet</title>

<style>
        .multiselect {
            position: absolute;
            top: 25%;
            left: 80%;
            bottom: 100%;
            transform: translate(-50%, -50%);
            width: 200px;
        }
        .pesquisaFiltro {
            position: absolute;
            top: 26%;
            left: 90%;
            transform: translate(-50%, -50%);
            width: 80px;
        }
        .selectBox {
            position: relative;
        }
        .selectBox select{
            width: 100%;
            font-weight: bold;
        }
        .overSelect{
            position: absolute;
            left: 0; right: 0; top: 0; bottom: 0; 
        }
        #checkboxes{
            display: none;
            border: 1px #ff6d00 solid;
        }
        #checkboxes label{
            display: block;
			vertical-align: right;
        }
        #checkboxes label:hover{
            background-color: #A9D0F5;
        }
</style>

</head>
 
<body>

<main>

<?php

//Conexão com Banco de dados
    error_reporting(E_ERROR | E_PARSE);
    $lnk = mysqli_connect('localhost','root','', 'st_bd') or die(mysqli_error()) or die ('Nao foi possível conectar ao MySql: ' . mysqli_error($lnk));

?>
<center>
		<h1>Pesquisar Curriculo</h1>
		<br><br>
		<form method="POST" action="exibe_assinatura.php">
			<label>Eemail: </label>
			<input type="text" name="st_email" placeholder="Digite o e-mail"><br><br>
			
			<input name="SendPesqUser" type="submit" value="Pesquisar">
		</form><br><br>
</center>
	</body>
</html>