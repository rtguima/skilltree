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
<h5><p>Geral</p>
<p>Consulta de Usuarios:</p>
</center></h5>


<?php

//Conexão com Banco de dados
    error_reporting(E_ERROR | E_PARSE);
    $lnk = mysqli_connect('localhost','root','', 'intranet_sistemas') or die(mysqli_error()) or die ('Nao foi possível conectar ao MySql: ' . mysqli_error($lnk));
//Fim conexão com Banco de dados


// Contador de Usuarios
    $count_dados = $lnk->query('SELECT count(hardware) FROM dados_usuarios WHERE hardware != ""');

if($count_dados){ // If $sql is True
    while($exibe = $count_dados->fetch_assoc()){
        foreach($exibe as $key => $value){
            echo "<center><br /> <h5> Total de Usuarios: " . $value .'</h5></center>';
        }

    }
}
// Fim total de Usuarios

// Contador de Desktops
    $count_desktops = $lnk->query('SELECT count(hardware) FROM dados_usuarios WHERE hardware like "Desktop"');

if($count_desktops){ // If $sql is True
    while($exibe = $count_desktops ->fetch_assoc()){
        foreach($exibe as $key => $value){
            echo "<center><h5> Total de Desktops: " . $value .'</h5></center>';
        }

    }
}
// Fim contador de Desktios

// Contador de Notebooks
    $count_notebooks = $lnk->query('SELECT count(hardware) FROM dados_usuarios WHERE hardware like "Notebook"');

if($count_notebooks){ // If $sql is True
    while($exibe = $count_notebooks ->fetch_assoc()){
        foreach($exibe as $key => $value){
            echo "<center><h5> Total de Notebooks: " . $value .'</h5></center>';
        }

    }
}
// Fim contador de Notebooks

// Contador de Numeros Corporativos
    $count_ncelular = $lnk->query('SELECT count(numero_celular) FROM dados_usuarios WHERE numero_celular > ""');

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
<?php

// Inicio da Tabela de usuarios

        echo "<tr>";
        echo "<td>Alterar</td>";
        echo "<td>Deletar</td>";
        echo "<td>Status</td>";
        echo "<td>Filial</td>";
        echo "<td>Nome</td>";
        echo "<td>Departamento</td>";
        echo "<td>Cargo</td>";
        echo "<td>E-mail</td>";
        echo "<td>Ramal</td>";
        echo "<td>Celular</td>";
        echo "<td>Hostname</td>";
        echo "<td>Hardware</td>";
        echo "<td>Processador</td>";
        echo "<td>Memoria RAM</td>";
        echo "<td>HD</td>";
        echo "<td>SSD</td>";
        echo "<td>Windows</td>";
        echo "<td>Office</td>";
        echo "</tr>";
        echo "</thead>";

//Consulta de tabela Dados Usuarios
    $result_bd_user = 'SELECT * FROM dados_usuarios ORDER BY filial ASC';
    $resultado_user = mysqli_query($lnk, $result_bd_user);
    while($row_usser = mysqli_fetch_assoc($resultado_user)){
        echo "<tr>";
        echo "<td><a href='edita_usuario.php?id=" . $row_usser['id'] . "'>Editar</a></td>";
        echo "<td align=center><a href='proc_exclui_user.php?id=" . $row_usser['id'] . "' data-confirm
        ='Te certeza de que deseja excluir o item selecionado?'>Apagar</a></td>";
        echo "<td>" . $row_usser['status'] . "</td>";
        echo "<td>" . $row_usser['filial'] . "</td>";
        echo "<td>" . $row_usser['nome'] . "</td>";
        echo "<td>" . $row_usser['departamento'] . "</td>";
        echo "<td>" . $row_usser['cargo'] . "</td>";
        echo "<td>" . $row_usser['email'] . "</td>";
        echo "<td>" . $row_usser['ramal'] . "</td>";
        echo "<td>" . $row_usser['numero_celular'] . "</td>";
        echo "<td>" . $row_usser['hostname'] . "</td>";
        echo "<td>" . $row_usser['hardware'] . "</td>";
        echo "<td>" . $row_usser['processador'] . "</td>";
        echo "<td>" . $row_usser['memoria_ram'] . "</td>";
        echo "<td>" . $row_usser['memoria_hd'] . "</td>";
        echo "<td>" . $row_usser['memoria_ssd'] . "</td>";
        echo "<td>" . $row_usser['sistema_operacional'] . "</td>";
        echo "<td>" . $row_usser['office'] . "</td>";

        echo "</tr>";
    }

        echo "</table>";

//Fim da consulta da tabela Dados Usuarios

?>

</div>
</div>
</center>
</main>

<?php
    include 'template/footer.php'
?>