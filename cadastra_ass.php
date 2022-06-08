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
$dbname = "st_bd";

// Envio de dados
$st_status = $_POST['st_status'];
$st_dt_entrada = $_POST['st_dt_entrada'];
$st_dt_saida = $_POST['st_dt_saida'];
$st_nome = $_POST['st_nome'];
$st_nacionalidade = $_POST['st_nacionalidade'];
$st_idade = $_POST['st_idade'];
$st_cpf = $_POST['st_cpf'];
$st_cnpj = $_POST['st_cnpj'];
$st_rg = $_POST['st_rg'];
$st_email = $_POST['st_email'];
$st_tel = $_POST['st_tel'];
$st_tel_celular = $_POST['st_tel_celular'];
$st_passatempo_01 = $_POST['st_passatempo_01'];
$st_passatempo_02 = $_POST['st_passatempo_02'];
$st_passatempo_03 = $_POST['st_passatempo_03'];
$st_objetivo = $_POST['st_objetivo'];
$st_sobre = $_POST['st_sobre'];
$st_educacao_fundamental = $_POST['st_educacao_fundamental'];
$st_educacao_medio = $_POST['st_educacao_medio'];
$st_educacao_superior_01 = $_POST['st_educacao_superior_01'];
$st_educacao_superior_02 = $_POST['st_educacao_superior_02'];
$st_educacao_superior_03 = $_POST['st_educacao_superior_03'];
$st_educacao_pos = $_POST['st_educacao_pos'];
$st_educacao_mestrado = $_POST['st_educacao_mestrado'];
$st_educacao_doutorado = $_POST['st_educacao_doutorado'];
$st_educacao_pos_doutorado = $_POST['st_educacao_pos_doutorado'];
$st_certificacao_01 = $_POST['st_certificacao_01'];
$st_certificacao_02 = $_POST['st_certificacao_02'];
$st_certificacao_03 = $_POST['st_certificacao_03'];
$st_experiencia = $_POST['st_experiencia'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO st_dados_usuarios (st_status,
st_dt_entrada,
st_dt_saida,
st_nome,
st_nacionalidade,
st_idade,
st_cpf,
st_cnpj,
st_rg,
st_email,
st_tel,
st_tel_celular,
st_passatempo_01,
st_passatempo_02,
st_passatempo_03,
st_objetivo,
st_sobre,
st_educacao_fundamental,
st_educacao_medio,
st_educacao_superior_01,
st_educacao_superior_02,
st_educacao_superior_03,
st_educacao_pos,
st_educacao_mestrado,
st_educacao_doutorado,
st_educacao_pos_doutorado,
st_certificacao_01,
st_certificacao_02,
st_certificacao_03,
st_experiencia
)
VALUES ('$st_status',
'$st_dt_entrada',
'$st_dt_saida',
'$st_nome',
'$st_nacionalidade',
'$st_idade',
'$st_cpf',
'$st_cnpj',
'$st_rg',
'$st_email',
'$st_tel',
'$st_tel_celular',
'$st_passatempo_01',
'$st_passatempo_02',
'$st_passatempo_03',
'$st_objetivo',
'$st_sobre',
'$st_educacao_fundamental',
'$st_educacao_medio',
'$st_educacao_superior_01',
'$st_educacao_superior_02',
'$st_educacao_superior_03',
'$st_educacao_pos',
'$st_educacao_mestrado',
'$st_educacao_doutorado',
'$st_educacao_pos_doutorado',
'$st_certificacao_01',
'$st_certificacao_02',
'$st_certificacao_03',
'$st_experiencia')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastrado com sucesso!!!";
    header('Location: cadastro_ass_sucesso.php');
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