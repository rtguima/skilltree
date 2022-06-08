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
<br>
<br>
<center><h3>Lista de Corrúculos Cadastrados</h3></center>
<?php

//Conexão com Banco de dados
    error_reporting(E_ERROR | E_PARSE);
    $lnk = mysqli_connect('localhost','root','', 'st_bd') or die(mysqli_error()) or die ('Nao foi possível conectar ao MySql: ' . mysqli_error($lnk));

    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

?>

    <a href="relatorios\gerar_planilha_geral.php"><button type='button' class='btn btn-sm btn-success'>Gerar Excel</button></a>


            <br>
            <br>
<table id="minhaTabela" class="table table-striped table-bordered table-hover text-center" style="width:100% ">
<thead class="thead-dark">
<tr>
<th>Editar</th>
<th>Apagar</th>
<th>Status</th>
<th>Nome</th>
<th>Data Entrada</th>
<th>Data Saida</th>
<th>E-mail</th>
<th>Celular</th>

</tr>
</thead>
 
 <?php

//Consulta de tabela Dados Usuarios
    $result_bd_user = 'SELECT * FROM st_dados_usuarios';
    $resultado_user = mysqli_query($lnk, $result_bd_user);
    while($row_usser = mysqli_fetch_assoc($resultado_user)){
        echo "<tr>";
        echo "<td align=center><a href='editar_assinatura.php?st_id=" . $row_usser['st_id'] . "'>Editar</a></td>";
        echo "<td align=center><a href='proc_exclui_ass.php?st_id=" . $row_usser['st_id'] . "' data-confirm
        ='Te certeza de que deseja excluir o item selecionado?'>Apagar</a></td>";
        echo "<td align=center>" . $row_usser['st_status'] . "</td>";
        echo "<td align=center>" . $row_usser['st_nome'] . "</td>";
        echo "<td align=center>" . $row_usser['st_dt_entrada'] . "</td>";
        echo "<td align=center>" . $row_usser['st_dt_saida'] . "</td>";
        echo "<td align=center>" . $row_usser['st_email'] . "</td>";
        echo "<td align=center>" . $row_usser['st_tel_celular'] . "</td>";
        echo "</tr>";
    }

        echo "</table>";

//Fim da consulta da tabela Dados Usuarios

?>

</main>

<?php
    include 'template/footer.php';
?>