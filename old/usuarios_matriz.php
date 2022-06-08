<?php
    session_start();
    require "verifica_ti.php"; 
    include 'template/headerTI.php';
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
<br>
<center>
<h5><p>Matriz</p>
<p>Consulta de Usuarios:</p>
</center></h5>


<?php

//Conexão com Banco de dados
    error_reporting(E_ERROR | E_PARSE);
    $lnk = mysqli_connect('localhost','root','', 'intranet_sistemas') or die(mysqli_error()) or die ('Nao foi possível conectar ao MySql: ' . mysqli_error($lnk));
//Fim conexão com Banco de dados


// Contador de Usuarios
    $count_dados = $lnk->query('SELECT count(hardware) FROM dados_usuarios WHERE hardware != "" AND status = "Ativo" AND filial = "Matriz" ');

if($count_dados){ // If $sql is True
    while($exibe = $count_dados->fetch_assoc()){
        foreach($exibe as $key => $value){
            echo "<center><br /> <h5> Total de Usuarios: " . $value .'</h5></center>';
        }

    }
}
// Fim total de Usuarios

// Contador de Desktops
    $count_desktops = $lnk->query('SELECT count(hardware) FROM dados_usuarios WHERE hardware like "Desktop" AND status = "Ativo" AND filial = "Matriz" ');

if($count_desktops){ // If $sql is True
    while($exibe = $count_desktops ->fetch_assoc()){
        foreach($exibe as $key => $value){
            echo "<center><h5> Total de Desktops: " . $value .'</h5></center>';
        }

    }
}
// Fim contador de Desktios

// Contador de Notebooks
    $count_notebooks = $lnk->query('SELECT count(hardware) FROM dados_usuarios WHERE hardware like "Notebook" AND status = "Ativo" AND filial = "Matriz" ');

if($count_notebooks){ // If $sql is True
    while($exibe = $count_notebooks ->fetch_assoc()){
        foreach($exibe as $key => $value){
            echo "<center><h5> Total de Notebooks: " . $value .'</h5></center>';
        }

    }
}
// Fim contador de Notebooks

// Contador de Numeros Corporativos
    $count_ncelular = $lnk->query('SELECT count(numero_celular) FROM dados_usuarios WHERE numero_celular > "" AND status = "Ativo" AND filial = "Matriz" ');

if($count_ncelular){ // If $sql is True
    while($exibe = $count_ncelular ->fetch_assoc()){
        foreach($exibe as $key => $value){
            echo "<center><h5> Total de Chip's Corporativos: " . $value .'</h5></center><br>';
        }

    }
}
// Fim contador de Numeros Corporati
?>
<div class="container-fluid">

<div class="table-responsive">

<table class="table table-striped table-bordered table-hover text-center table-responsive">
<thead class="thead-dark">
<tr>
<th>Alterar</th>
<th>Filial</th>
<th>Status</th>
<th>Nome</th>
<th>Departamento</th>
<th>Cargo</th>
<th>E-mail</th>
<th>E-mail Grupo</th>
<th>E-mail Senha</th>
<th>Ramal</th>
<th>Celular</th>
<th>Propriedade Celular</th>
<th>Marca Celular</th>
<th>Tablet</th>
<th>Wi-Fi</th>
<th>Senha Telefonica</th>
<th>Hardware</th>
<th>Patrimonio</th>
<th>Marca Notebook</th>
<th>Hostname</th>
<th>Usuario AD</th>
<th>Sistema Operacional</th>
<th>Processador</th>
<th>Memoria RAM</th>
<th>Tipo RAM</th>
<th>HD</th>
<th>SSD</th>
<th>Placa de Video</th>
<th>Office</th>
<th>Usuário Totvs</th>
<th>Usuário Sankhya</th>
<th>Navegador SKW</th>
<th>Padrão</th>
<th>Kaspersky</th>
<th>Kaspersky Externo</th>
<th>RDP</th>
<th>Admin Local</th>
<th>USB</th>
<th>Outros Softwares</th>
<th>OBS</th>


</tr>
</thead>

<?php

// Inicio da Tabela de usuarios



//Consulta de tabela Dados Usuarios
    $result_bd_user = 'SELECT * FROM dados_usuarios WHERE status = "Ativo" AND filial = "Matriz" ORDER BY nome ASC';
    $resultado_user = mysqli_query($lnk, $result_bd_user);
    while($row_usser = mysqli_fetch_assoc($resultado_user)){
        echo "<tr>";
        echo "<td><a href='edita_usuario.php?id=" . $row_usser['id'] . "'>Editar</a></td>";
        echo "<td>" . $row_usser['nome'] . "</td>";
        echo "<td>" . $row_usser['departamento'] . "</td>";
        echo "<td>" . $row_usser['cargo'] . "</td>";
        echo "<td>" . $row_usser['email'] . "</td>";
        echo "<td>" . $row_usser['ramal'] . "</td>";
        echo "<td>" . $row_usser['numero_celular'] . "</td>";
        echo "<td>" . $row_usser['hostname'] . "</td>";
        echo "</tr>";
    }

        echo "</table>";

//Fim da consulta da tabela Dados Usuarios

?>

</div>
</div>
</main>

<?php
    include 'template/footer.php'
?>