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
<h5><p>Usuarios de Férias</p>
</center></h5>


<?php

//Conexão com Banco de dados
    error_reporting(E_ERROR | E_PARSE);
    $lnk = mysqli_connect('localhost','root','', 'intranet_sistemas') or die(mysqli_error()) or die ('Nao foi possível conectar ao MySql: ' . mysqli_error($lnk));
//Fim conexão com Banco de dados



?>
                
    <a href="relatorios\gerar_planilha_ferias.php"><button type='button' class='btn btn-sm btn-success'>Gerar Excel</button></a>


            <br>
            <br>
<table id="minhaTabela" class="table table-striped table-bordered table-hover text-center" style="width:100% ">
<thead class="thead-dark">
<tr>
<th>Alterar</th>
<th>Status</th>
<th>Nome</th>
<th>Departamento</th>
<th>Cargo</th>
<th>E-mail</th>
<th>Ramal</th>
<th>Celular</th>
<th>Hostname</th>
<th>Hardware</th>
<th>RAM</th>
<th>Frequencia</th>
<th>Processador</th>
<th>HD</th>
<th>SSD</th>
<th>S.O</th>
<th>Office</th>

</tr>
</thead>


<?php

// Inicio da Tabela de usuarios



//Consulta de tabela Dados Usuarios
    $result_bd_user = 'SELECT * FROM dados_usuarios WHERE status = "Ferias" ORDER BY nome ASC';
    $resultado_user = mysqli_query($lnk, $result_bd_user);
    while($row_usser = mysqli_fetch_assoc($resultado_user)){
                echo "<tr>";
        echo "<td><a href='edita_usuario.php?id=" . $row_usser['id'] . "'>Editar</a></td>";
        echo "<td>" . $row_usser['status'] . "</td>";
        echo "<td>" . $row_usser['nome'] . "</td>";
        echo "<td>" . $row_usser['departamento'] . "</td>";
        echo "<td>" . $row_usser['cargo'] . "</td>";
        echo "<td>" . $row_usser['email'] . "</td>";
        echo "<td>" . $row_usser['ramal'] . "</td>";
        echo "<td>" . $row_usser['numero_celular'] . "</td>";
        echo "<td>" . $row_usser['hostname'] . "</td>";
        echo "<td>" . $row_usser['hardware'] . "</td>";
        echo "<td>" . $row_usser['memoria_ram'] . "</td>";
        echo "<td>" . $row_usser['tipo_ram'] . "</td>";
        echo "<td>" . $row_usser['processador'] . "</td>";
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
</main>

<?php
    include 'template/footer.php'
?>