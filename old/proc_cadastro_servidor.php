<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br"><head>
<meta charset="UTF-8" />
<link rel="shortcut icon" href="icon.ico" type="image/x-icon" />

<title>TI</title>
<link href="css.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="destacaTexto.js"></script></head>
<body>

<?php
// Login no Banco
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intranet_sistemas";

// Envio de dados
$status_srv = $_POST['status_srv'];  
$filial_srv = $_POST['filial_srv'];  
$tipo_srv = $_POST['tipo_srv'];  
$descricao_srv = $_POST['descricao_srv'];  
$hostname_srv = $_POST['hostname_srv'];  
$dominio_srv = $_POST['dominio_srv'];  
$ip_interno_srv = $_POST['ip_interno_srv'];  
$ip_externo_srv = $_POST['ip_externo_srv'];  
$usuario_srv = $_POST['usuario_srv'];  
$so_srv = $_POST['so_srv'];  
$processador_srv = $_POST['processador_srv'];  
$ram_srv = $_POST['ram_srv'];  
$frequencia_ram_srv = $_POST['frequencia_ram_srv'];  
$raid_srv = $_POST['raid_srv'];  
$primeiro_hd_srv = $_POST['primeiro_hd_srv'];  
$segundo_hd_srv = $_POST['segundo_hd_srv'];  
$terceiro_hd_srv = $_POST['terceiro_hd_srv'];  
$fortinet_srv = $_POST['fortinet_srv'];  
$modelo_srv = $_POST['modelo_srv'];  
$dhcp_srv = $_POST['dhcp_srv'];  
$cobian_srv = $_POST['cobian_srv'];  
$spiceworks_srv = $_POST['spiceworks_srv'];  
$kaspersky_slave_srv = $_POST['kaspersky_slave_srv'];  
$ativacao_srv = $_POST['ativacao_srv'];  
$obs_srv = $_POST['obs_srv'];  



// Create connection
$lnk = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($lnk->connect_error) {
    die("Connection failed: " . $lnk->connect_error);
} 

$sql = "INSERT INTO servidores_lafaete (status_srv, 
filial_srv, 
tipo_srv,
descricao_srv, 
hostname_srv, 
dominio_srv, 
ip_interno_srv, 
ip_externo_srv, 
usuario_srv, 
so_srv, 
processador_srv, 
ram_srv, 
frequencia_ram_srv, 
raid_srv, 
primeiro_hd_srv, 
segundo_hd_srv, 
terceiro_hd_srv, 
fortinet_srv, 
modelo_srv, 
dhcp_srv, 
cobian_srv, 
spiceworks_srv, 
kaspersky_slave_srv, 
ativacao_srv, 
obs_srv )
VALUES ('status_srv', 
'filial_srv', 
'tipo_srv', 
'descricao_srv', 
'hostname_srv', 
'dominio_srv', 
'ip_interno_srv', 
'ip_externo_srv', 
'usuario_srv', 
'so_srv', 
'processador_srv', 
'ram_srv', 
'frequencia_ram_srv', 
'raid_srv', 
'primeiro_hd_srv', 
'segundo_hd_srv', 
'terceiro_hd_srv', 
'fortinet_srv', 
'modelo_srv', 
'dhcp_srv', 
'cobian_srv', 
'spiceworks_srv', 
'kaspersky_slave_srv', 
'ativacao_srv', 
'obs_srv')";

if ($lnk->query($sql) === TRUE) {
    echo "Cadastrado com sucesso!!!";
    header('Location: ../ti/cadastro_sucesso.php');
} else {
	echo "ERRO NO CADASTRO - Pressione Backspace e tente novamente... <br>";
	echo "Log do erro <br><br>";
    echo "Error: " . $sql . "<br>" . $lnk->error;

}
$lnk->close();
?>


<br/>
<br/>
<br/>
</body>
</html>