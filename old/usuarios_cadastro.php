<?php
    session_start();
    require "verifica_ti.php"; 
    include 'template/menuTI.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
<link href="css/ti_style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="filtro.js"></script>

<title>Intranet</title>
</head>
<body>
<main>
<div>
<center>
<h1><b>Cadastro de Usuario</h1>

<br/>
  <iframe id=cadastro_sistema name="iframe01" scrolling="no" marginwidth="0" marginheight="0" src="cadastro_sistema.html" width="700" height="650"></iframe>
</main>
<?php
    include 'template/footer.php'
?>