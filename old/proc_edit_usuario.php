<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br"><head>
<meta charset="UTF-8" />
<link rel="shortcut icon" href="icon.ico" type="image/x-icon" />

<title>TI</title>
<link href="css.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="destacaTexto.js"></script></head>
<body>



<?php
//Conexão com Banco de dados
    error_reporting(E_ERROR | E_PARSE);
    $lnk = mysqli_connect('localhost','root','', 'intranet_sistemas') or die(mysqli_error()) or die ('Nao foi possível conectar ao MySql: ' . mysqli_error($lnk));


// Envio de dados
$id  = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
$filial = filter_input(INPUT_POST, 'filial', FILTER_SANITIZE_STRING);
$dt_admis = filter_input(INPUT_POST, 'dt_admis', FILTER_SANITIZE_NUMBER_INT);
$dt_demis = filter_input(INPUT_POST, 'dt_demis', FILTER_SANITIZE_NUMBER_INT);
$dt_fim = filter_input(INPUT_POST, 'dt_fim', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$departamento = filter_input(INPUT_POST, 'departamento', FILTER_SANITIZE_STRING);
$cargo = filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$email_grupo = filter_input(INPUT_POST, 'email_grupo', FILTER_SANITIZE_STRING);
$email_senha = filter_input(INPUT_POST, 'email_senha', FILTER_SANITIZE_STRING);
$ramal = filter_input(INPUT_POST, 'ramal', FILTER_SANITIZE_STRING);
$senha_telefonia = filter_input(INPUT_POST, 'senha_telefonia', FILTER_SANITIZE_STRING);
$numero_celular = filter_input(INPUT_POST, 'numero_celular', FILTER_SANITIZE_STRING);
$numero_celular_pessoal = filter_input(INPUT_POST, 'numero_celular_pessoal', FILTER_SANITIZE_STRING);
$contato_skype = filter_input(INPUT_POST, 'contato_skype', FILTER_SANITIZE_STRING);
$propriedade_celular = filter_input(INPUT_POST, 'propriedade_celular', FILTER_SANITIZE_STRING);
$modelo_celular = filter_input(INPUT_POST, 'modelo_celular', FILTER_SANITIZE_STRING);
$wifi = filter_input(INPUT_POST, 'wifi', FILTER_SANITIZE_STRING);
$patrimonio_celular = filter_input(INPUT_POST, 'patrimonio_celular', FILTER_SANITIZE_STRING);
$nota_celular = filter_input(INPUT_POST, 'nota_celular', FILTER_SANITIZE_STRING);
$serial_celular = filter_input(INPUT_POST, 'serial_celular', FILTER_SANITIZE_STRING);
$mac_celular = filter_input(INPUT_POST, 'mac_celular', FILTER_SANITIZE_STRING);
$imei1_celular = filter_input(INPUT_POST, 'imei1_celular', FILTER_SANITIZE_STRING);
$imei2_celular = filter_input(INPUT_POST, 'imei2_celular', FILTER_SANITIZE_STRING);
$tablet = filter_input(INPUT_POST, 'tablet', FILTER_SANITIZE_STRING);
$patrimonio_tablet = filter_input(INPUT_POST, 'patrimonio_tablet', FILTER_SANITIZE_STRING);
$nota_tablet = filter_input(INPUT_POST, 'nota_tablet', FILTER_SANITIZE_STRING);
$serial_tablet = filter_input(INPUT_POST, 'serial_tablet', FILTER_SANITIZE_STRING);
$mac_tablet = filter_input(INPUT_POST, 'mac_tablet', FILTER_SANITIZE_STRING);
$imei1_tablet = filter_input(INPUT_POST, 'imei1_tablet', FILTER_SANITIZE_STRING);
$imei2_tablet = filter_input(INPUT_POST, 'imei2_tablet', FILTER_SANITIZE_STRING);
$hardware = filter_input(INPUT_POST, 'hardware', FILTER_SANITIZE_STRING);
$patrimonio = filter_input(INPUT_POST, 'patrimonio', FILTER_SANITIZE_STRING);
$hostname = filter_input(INPUT_POST, 'hostname', FILTER_SANITIZE_STRING);
$marca_notebook = filter_input(INPUT_POST, 'marca_notebook', FILTER_SANITIZE_STRING);
$modelo_notebook = filter_input(INPUT_POST, 'modelo_notebook', FILTER_SANITIZE_STRING);
$serial_notebook = filter_input(INPUT_POST, 'serial_notebook', FILTER_SANITIZE_STRING);
$mac_wifi_notebook = filter_input(INPUT_POST, 'mac_wifi_notebook', FILTER_SANITIZE_STRING);
$mac_lan_notebook = filter_input(INPUT_POST, 'mac_lan_notebook', FILTER_SANITIZE_STRING);
$usuario_ad = filter_input(INPUT_POST, 'usuario_ad', FILTER_SANITIZE_STRING);
$grupo_internet = filter_input(INPUT_POST, 'grupo_internet', FILTER_SANITIZE_STRING);
$sistema_operacional = filter_input(INPUT_POST, 'sistema_operacional', FILTER_SANITIZE_STRING);
$office = filter_input(INPUT_POST, 'office', FILTER_SANITIZE_STRING);
$processador = filter_input(INPUT_POST, 'processador', FILTER_SANITIZE_STRING);
$memoria_ram = filter_input(INPUT_POST, 'memoria_ram', FILTER_SANITIZE_STRING);
$tipo_ram = filter_input(INPUT_POST, 'tipo_ram', FILTER_SANITIZE_STRING);
$memoria_hd = filter_input(INPUT_POST, 'memoria_hd', FILTER_SANITIZE_STRING);
$memoria_ssd = filter_input(INPUT_POST, 'memoria_ssd', FILTER_SANITIZE_STRING);
$placa_video = filter_input(INPUT_POST, 'placa_video', FILTER_SANITIZE_STRING);
$usuario_totvs = filter_input(INPUT_POST, 'usuario_totvs', FILTER_SANITIZE_STRING);
$usuario_sankhya = filter_input(INPUT_POST, 'usuario_sankhya', FILTER_SANITIZE_STRING);
$navegador_sankhya = filter_input(INPUT_POST, 'navegador_sankhya', FILTER_SANITIZE_STRING);
$padrao = filter_input(INPUT_POST, 'padrao', FILTER_SANITIZE_STRING);
$spiceworks = filter_input(INPUT_POST, 'spiceworks', FILTER_SANITIZE_STRING);
$kaspersky = filter_input(INPUT_POST, 'kaspersky', FILTER_SANITIZE_STRING);
$kaspersky_externo = filter_input(INPUT_POST, 'kaspersky_externo', FILTER_SANITIZE_STRING);
$rdp = filter_input(INPUT_POST, 'rdp', FILTER_SANITIZE_STRING);
$ad = filter_input(INPUT_POST, 'ad', FILTER_SANITIZE_STRING);
$adm_local = filter_input(INPUT_POST, 'adm_local', FILTER_SANITIZE_STRING);
$usb_gpo = filter_input(INPUT_POST, 'usb_gpo', FILTER_SANITIZE_STRING);
$outros_softwares = filter_input(INPUT_POST, 'outros_softwares', FILTER_SANITIZE_STRING);
$termos = filter_input(INPUT_POST, 'termos', FILTER_SANITIZE_STRING);
$obs = filter_input(INPUT_POST, 'obs', FILTER_SANITIZE_STRING);


$result_user = "UPDATE dados_usuarios SET status='$status',filial=
'$filial',
dt_admis='$dt_admis',
dt_demis='$dt_demis',
dt_fim='$dt_fim',
nome='$nome',
departamento='$departamento',
cargo='$cargo',
cpf='$cpf',
rg='$rg',
email='$email',
email_grupo='$email_grupo',
email_senha='$email_senha',
ramal='$ramal',
senha_telefonia='$senha_telefonia',
numero_celular='$numero_celular',
numero_celular_pessoal='$numero_celular_pessoal',
contato_skype='$contato_skype',
propriedade_celular='$propriedade_celular',
modelo_celular='$modelo_celular',
wifi='$wifi',
patrimonio_celular='$patrimonio_celular',
nota_celular='$nota_celular',
serial_celular='$serial_celular',
mac_celular='$mac_celular',
imei1_celular='$imei1_celular',
imei2_celular='$imei2_celular',
tablet='$tablet',
patrimonio_tablet='$patrimonio_tablet',
nota_tablet='$nota_tablet',
serial_tablet='$serial_tablet',
mac_tablet='$mac_tablet',
imei1_tablet='$imei1_tablet',
imei2_tablet='$imei2_tablet',
hardware='$hardware',
patrimonio='$patrimonio',
hostname='$hostname',
marca_notebook='$marca_notebook',
modelo_notebook='$modelo_notebook',
serial_notebook='$serial_notebook',
mac_wifi_notebook='$mac_wifi_notebook',
mac_lan_notebook='$mac_lan_notebook',
usuario_ad='$usuario_ad',
grupo_internet='$grupo_internet',
sistema_operacional='$sistema_operacional',
office='$office',
processador='$processador',
memoria_ram='$memoria_ram',
tipo_ram='$tipo_ram',
memoria_hd='$memoria_hd',
memoria_ssd='$memoria_ssd',
placa_video='$placa_video',
usuario_totvs='$usuario_totvs',
usuario_sankhya='$usuario_sankhya',
navegador_sankhya='$navegador_sankhya',
padrao='$padrao',
spiceworks='$spiceworks',
kaspersky='$kaspersky',
kaspersky_externo='$kaspersky_externo',
rdp='$rdp',
ad='$ad',
adm_local='$adm_local',
usb_gpo='$usb_gpo',
outros_softwares='$outros_softwares',
termos='$termos',
obs='$obs' WHERE id='$id'";


$resultado_user = mysqli_query($lnk, $result_user);



if (mysqli_affected_rows($lnk)){
	$_SESSION['msg'] = "<p style='color:green;'> Usuario editado com sucesso!!!</p>";
	header("Location: matriz.php");
}else {
	echo '<h2><a style="color: #DF0101"><center>'. "Erro ao editar usuario." . '</a>';
	echo '<p><a href="Matriz.php">' . "Voltar" . '</a></center>';
}
?>


<br/>
<br/>
<br/>
</body>
</html>