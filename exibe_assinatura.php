<?php
    session_start();
    require "verifica_st.php"; 	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
<meta charset="UTF-8">
</head>
<body>
<main>
<td >

<?php

//Conexão com Banco de dados
    error_reporting(E_ERROR | E_PARSE);
    $lnk = mysqli_connect('localhost','root','', 'st_bd') or die(mysqli_error()) or die ('Nao foi possível conectar ao MySql: ' . mysqli_error($lnk));


		$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$st_email = filter_input(INPUT_POST, 'st_email', FILTER_SANITIZE_STRING);
			$result_usuario = "SELECT * FROM st_dados_usuarios WHERE st_email LIKE '%$st_email%'";
			$resultado_usuario = mysqli_query($lnk, $result_usuario);
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){


 echo "<div id='capture'>";
 echo "<br>";
 echo "<br>";
 echo "<p>";

echo "<p><b>Nome: </b>" . $row_usuario['st_nome'];
echo "<p><b>Nacionalidade: </b>" . $row_usuario['st_nacionalidade'];
echo "<p><b>Idade: </b>" . $row_usuario['st_idade'];
echo "<p><b>E-mail: </b>" . $row_usuario['st_email'];
echo "<p><b>Celular: </b>" . $row_usuario['st_tel_celular'];
echo "<p><b>Passatempo: </b>" . $row_usuario['st_passatempo_01'];
echo "<p><b>Objetivo: </b>" . $row_usuario['st_objetivo'];
echo "<p><b>Biografia: </b>" . $row_usuario['st_sobre'];
echo "<p><b>Escolaridade Superior: </b>" . $row_usuario['st_educacao_superior_01'];
echo "<p><b>1º Certificação: </b>" . $row_usuario['st_certificacao_01'];
echo "<p><b>2º Certificação: </b>" . $row_usuario['st_certificacao_02'];
echo "<p><b>3º Certificação: </b>" . $row_usuario['st_certificacao_03'];
echo "<p><b>Experiencia: </b>" . $row_usuario['st_experiencia'];
echo "	<br><br><br><br><br><br></div></div>";
			}
		}

		?>
	</body>
</html>