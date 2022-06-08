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
    $lnk = mysqli_connect('localhost','root','', 'intranet_sistemas') or die(mysqli_error()) or die ('Nao foi possível conectar ao MySql: ' . mysqli_error($lnk));


?>
<center>
<h3><b>(31) 2519-2900 </b></h3>
<br>
<h3>Razão Social: UNIAO COMERCIAL BARÃO LTDA</h3>
<h3>CNPJ: 24.013.278/0006-76</h3>
<h3>Endereço: Rua Paraoquena, Nº 181, Nova Granada, Belo Horizonte, CEP 30.431-420</h3>
</center>
<br>
<br/>


<?php
//Conexão com Banco de dados
    error_reporting(E_ERROR | E_PARSE);
    $lnk = mysqli_connect('localhost','root','', 'intranet_sistemas') or die(mysqli_error()) or die ('Nao foi possível conectar ao MySql: ' . mysqli_error($lnk));

//Consulta de tabela Ass Email
    $sql = 'SELECT status_ass, nome_ass, setor_ass, cargo_ass, email_ass, telefone_ass, celular_ass, celular2_ass FROM ass_email WHERE status_ass = "Ativo" ORDER BY nome_ass ASC';

    $nome = @$_POST['nome_ass'];

    if(!is_null($nome) && !empty($nome)) 
        $sql = "SELECT status_ass, nome_ass, setor_ass, cargo_ass, email_ass, telefone_ass, celular_ass, celular2_ass FROM ass_email WHERE status_ass = 'Ativo'";

    $qry = mysqli_query($lnk, $sql) or die(mysqli_error($lnk));
    $count = mysqli_num_rows($qry);
    $num_fields = @mysqli_num_fields($qry);//Obtém o número de campos do resultado
    $fields[] = array();
    if($num_fields > 0) {
        for($i = 0;$i<$num_fields; $i++){//Pega o nome dos campos
            $fields[] = mysqli_fetch_field_direct($qry,$i)->name;
        }
    }
//Fim da consulta da tabela Dados Usuarios

?>


<br>
<br>

<!--Tabela com as buscas-->

<?php
$result_ass = "SELECT * FROM ass_email";
$result_cons = mysqli_query($lnk, $result_ass);

while ($row_ass = mysqli_fetch_assoc($result_cons)){

    echo "<table border='0'>";
    echo "<tr>";
    echo "<td><a href='http://www.google.com'><img src='img/email/logo_lafaete.png'></td>";
    echo "<td> ". $row_ass['nome_ass'] . "<br> <br>";
    echo $row_ass['cargo_ass'] . "<br> <br>";
    echo $row_ass['email_ass'] . "<br> <br>";
    echo $row_ass['telefone_ass'] . "<br> <br>";
    echo $row_ass['celular_ass'] . "<br> <br>";
    echo $row_ass['celular2_ass'] . "</td>" ."<br> <br>";
    echo "</table>";

}

?>


</main>

<?php
    include 'template/footer.php'
?>