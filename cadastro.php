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
$status = $_POST['status'];
$filial = $_POST['filial'];
$dt_admis = $_POST['dt_admis'];
$dt_demis = $_POST['dt_demis'];
$dt_fim = $_POST['dt_fim'];
$nome = $_POST['nome'];
$departamento = $_POST['departamento'];
$cargo = $_POST['cargo'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$email = $_POST['email'];
$email_grupo = $_POST['email_grupo'];
$email_senha = $_POST['email_senha'];
$ramal = $_POST['ramal'];
$senha_telefonia = $_POST['senha_telefonia'];
$numero_celular = $_POST['numero_celular'];
$numero_celular_pessoal = $_POST['numero_celular_pessoal'];
$contato_skype = $_POST['contato_skype'];
$propriedade_celular = $_POST['propriedade_celular'];
$modelo_celular = $_POST['modelo_celular'];
$wifi = $_POST['wifi'];
$patrimonio_celular = $_POST['patrimonio_celular'];
$nota_celular = $_POST['nota_celular'];
$serial_celular = $_POST['serial_celular'];
$mac_celular = $_POST['mac_celular'];
$imei1_celular = $_POST['imei1_celular'];
$imei2_celular = $_POST['imei2_celular'];
$tablet = $_POST['tablet'];
$patrimonio_tablet = $_POST['patrimonio_tablet'];
$nota_tablet = $_POST['nota_tablet'];
$serial_tablet = $_POST['serial_tablet'];
$mac_tablet = $_POST['mac_tablet'];
$imei1_tablet = $_POST['imei1_tablet'];
$imei2_tablet = $_POST['imei2_tablet'];
$hardware = $_POST['hardware'];
$patrimonio = $_POST['patrimonio'];
$hostname = $_POST['hostname'];
$marca_notebook = $_POST['marca_notebook'];
$modelo_notebook = $_POST['modelo_notebook'];
$serial_notebook = $_POST['serial_notebook'];
$mac_wifi_notebook = $_POST['mac_wifi_notebook'];
$mac_lan_notebook = $_POST['mac_lan_notebook'];
$usuario_ad = $_POST['usuario_ad'];
$grupo_internet = $_POST['grupo_internet'];
$sistema_operacional = $_POST['sistema_operacional'];
$office = $_POST['office'];
$processador = $_POST['processador'];
$memoria_ram = $_POST['memoria_ram'];
$tipo_ram = $_POST['tipo_ram'];
$memoria_hd = $_POST['memoria_hd'];
$memoria_ssd = $_POST['memoria_ssd'];
$placa_video = $_POST['placa_video'];
$usuario_totvs = $_POST['usuario_totvs'];
$usuario_sankhya = $_POST['usuario_sankhya'];
$navegador_sankhya = $_POST['navegador_sankhya'];
$padrao = $_POST['padrao'];
$spiceworks = $_POST['spiceworks'];
$kaspersky = $_POST['kaspersky'];
$kaspersky_externo = $_POST['kaspersky_externo'];
$rdp = $_POST['rdp'];
$ad = $_POST['ad'];
$adm_local = $_POST['adm_local'];
$usb_gpo = $_POST['usb_gpo'];
$outros_softwares = $_POST['outros_softwares'];
$termos = $_POST['termos'];
$obs = $_POST['obs'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO dados_usuarios (status,
filial,
dt_admis,
dt_demis,
dt_fim,
nome,
departamento,
cargo,
cpf,
rg,
email,
email_grupo,
email_senha,
ramal,
senha_telefonia,
numero_celular,
numero_celular_pessoal,
contato_skype,
propriedade_celular,
modelo_celular,
wifi,
patrimonio_celular,
nota_celular,
serial_celular,
mac_celular,
imei1_celular,
imei2_celular,
tablet,
patrimonio_tablet,
nota_tablet,
serial_tablet,
mac_tablet,
imei1_tablet,
imei2_tablet,
hardware,
patrimonio,
hostname,
marca_notebook,
modelo_notebook,
serial_notebook,
mac_wifi_notebook,
mac_lan_notebook,
usuario_ad,
grupo_internet,
sistema_operacional,
office,
processador,
memoria_ram,
tipo_ram,
memoria_hd,
memoria_ssd,
placa_video,
usuario_totvs,
usuario_sankhya,
navegador_sankhya,
padrao,
spiceworks,
kaspersky,
kaspersky_externo,
rdp,
ad,
adm_local,
usb_gpo,
outros_softwares,
termos,
obs)
VALUES ('$status',
'$filial',
'$dt_admis',
'$dt_demis',
'$dt_fim',
'$nome',
'$departamento',
'$cargo',
'$cpf',
'$rg',
'$email',
'$email_grupo',
'$email_senha',
'$ramal',
'$senha_telefonia',
'$numero_celular',
'$numero_celular_pessoal',
'$contato_skype',
'$propriedade_celular',
'$modelo_celular',
'$wifi',
'$patrimonio_celular',
'$nota_celular',
'$serial_celular',
'$mac_celular',
'$imei1_celular',
'$imei2_celular',
'$tablet',
'$patrimonio_tablet',
'$nota_tablet',
'$serial_tablet',
'$mac_tablet',
'$imei1_tablet',
'$imei2_tablet',
'$hardware',
'$patrimonio',
'$hostname',
'$marca_notebook',
'$modelo_notebook',
'$serial_notebook',
'$mac_wifi_notebook',
'$mac_lan_notebook',
'$usuario_ad',
'$grupo_internet',
'$sistema_operacional',
'$office',
'$processador',
'$memoria_ram',
'$tipo_ram',
'$memoria_hd',
'$memoria_ssd',
'$placa_video',
'$usuario_totvs',
'$usuario_sankhya',
'$navegador_sankhya',
'$padrao',
'$spiceworks',
'$kaspersky',
'$kaspersky_externo',
'$rdp',
'$ad',
'$adm_local',
'$usb_gpo',
'$outros_softwares',
'$termos',
'$obs')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastrado com sucesso!!!";
    header('Location: ../ti/cadastro_sucesso.php');
} else {
	echo "ERRO NO CADASTRO - Pressione Backspace e tente novamente... <br>";
	echo "Log do erro <br><br>";
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
?>


<br/>
<br/>
<br/>
</body>
</html>