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

// Contador de Usuarios
    $count_dados = $lnk->query('SELECT count(hardware) FROM dados_usuarios WHERE hardware != "" AND status = "Ativo" AND filial = "Matriz" ');

if($count_dados){ // If $sql is True
    while($exibe = $count_dados->fetch_assoc()){
        foreach($exibe as $key => $value){
            echo "<center><h1>Matriz</h1>";
            echo "<center><br /> <h3> Total de Usuarios: " . $value .'</h3></center>';
        }

    }
}
// Fim total de Usuarios

// Contador de Desktops
    $count_desktops = $lnk->query('SELECT count(hardware) FROM dados_usuarios WHERE hardware like "Desktop" AND status = "Ativo" AND filial = "Matriz" ');

if($count_desktops){ // If $sql is True
    while($exibe = $count_desktops ->fetch_assoc()){
        foreach($exibe as $key => $value){
            echo "<center><h3> Total de Desktops: " . $value .'</h3></center>';
        }

    }
}
// Fim contador de Desktios

// Contador de Notebooks
    $count_notebooks = $lnk->query('SELECT count(hardware) FROM dados_usuarios WHERE hardware like "Notebook" AND status = "Ativo" AND filial = "Matriz" ');

if($count_notebooks){ // If $sql is True
    while($exibe = $count_notebooks ->fetch_assoc()){
        foreach($exibe as $key => $value){
            echo "<center><h3> Total de Notebooks: " . $value .'</h3></center>';
        }

    }
}
// Fim contador de Notebooks

// Contador de Numeros Corporativos
    $count_ncelular = $lnk->query('SELECT count(numero_celular) FROM dados_usuarios WHERE numero_celular > 0 AND status = "Ativo" AND filial = "Matriz" ');

if($count_ncelular){ // If $sql is True
    while($exibe = $count_ncelular ->fetch_assoc()){
        foreach($exibe as $key => $value){
            echo "<center><h3> Total de Chip's Corporativos: " . $value .'</h3></center><br>';
        }

    }
}
// Fim contador de Numeros Corporativos

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

//Consulta de tabela Dados Usuarios
    $sql = 'SELECT id, nome, departamento, email, ramal, numero_celular, hostname, hardware, processador, memoria_ram, tipo_ram, memoria_hd, memoria_ssd, sistema_operacional, office, usuario_ad, usuario_totvs, usuario_sankhya, padrao, grupo_internet, usb_gpo FROM dados_usuarios WHERE status = "Ativo" AND filial = "Matriz" ORDER BY nome ASC';

    $nome = @$_POST['nome'];

    if(!is_null($nome) && !empty($nome)) 
        $sql = "SELECT id, nome, departamento, email, ramal, numero_celular, hostname, hardware, processador, memoria_ram, tipo_ram, memoria_hd, memoria_ssd, sistema_operacional, office, usuario_ad, usuario_totvs, usuario_sankhya, padrao, grupo_internet, usb_gpo FROM dados_usuarios WHERE status = 'Ativo' AND filial = 'Matriz' AND nome LIKE '".$nome."' ORDER BY nome ASC";

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
//Montando o cabeçalho da tabela de ramais
$table = '<table class="table table-hover table-inverse" style="width:3000px; background-color: #37444a; color:lightgrey; text-align: center; border="0";"> <tr> <td>Alterar</td><td>ID</td>
<td>Nome</td>
<td>Departamento</td>
<td>E-mail</td>
<td>Ramal</td>
<td>Numero do Celular</td>
<td>Hostname</td>
<td>Hardware</td>
<td>Processador</td>
<td>Ram</td>
<td>Tipo Ram</td>
<td>HD</td>
<td>SSD</td>
<td>Sistema Operacional</td>
<td>Office</td>
<td>Usuario do Ad</td>
<td>Usuario Totvs</td>
<td>Usuario Sankhya</td>
<td>Padrão</td>
<td>Grupo de Internet</td>
<td>USB</td>
</tr>';


//Montando o corpo da tabela
$table .= '<tbody style="
    background-color: #E8E8E8;
    color: #000000; border="0";    
">';
while($r = mysqli_fetch_array($qry)){
    $table .= '<tr>';
    for($i = 0;$i <= $num_fields; $i++){
        $table .= '<td>'.$r[$fields[$i]].'</td>';
    }
}

//Finalizando a tabela
$table .= '</tbody></table>';

//Imprimindo a tabela
echo $table;

?>



</main>

<?php
    include 'template/footer.php'
?>