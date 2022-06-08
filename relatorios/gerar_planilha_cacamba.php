<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
 <?php
	session_start(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
	<head>
	<body>
		<?php

		//Conexão com Banco de dados
    error_reporting(E_ERROR | E_PARSE);
    $lnk = mysqli_connect('localhost','root','', 'intranet_sistemas') or die(mysqli_error()) or die ('Nao foi possível conectar ao MySql: ' . mysqli_error($lnk));
		//Fim conexão com Banco de dados

		// Definimos o nome do arquivo que será exportado
		$arquivo = 'inventario_hardware_cacamba.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="17">Inventario de Hardware Caçamba</tr>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>Status</b></td>';
		$html .= '<td><b>Nome</b></td>';
		$html .= '<td><b>Departamento</b></td>';
		$html .= '<td><b>Cargo</b></td>';
		$html .= '<td><b>E-mail</b></td>';
		$html .= '<td><b>Ramal</b></td>';
		$html .= '<td><b>Senha Telefonica</b></td>';
		$html .= '<td><b>Celular</b></td>';
		$html .= '<td><b>Hostname</b></td>';
		$html .= '<td><b>Hardware</b></td>';
		$html .= '<td><b>Memoria RAM</b></td>';
		$html .= '<td><b>Tipo RAM</b></td>';
		$html .= '<td><b>Processador</b></td>';
		$html .= '<td><b>HD</b></td>';
		$html .= '<td><b>SSD</b></td>';
		$html .= '<td><b>S.O</b></td>';
		$html .= '<td><b>Office</b></td>';
		$html .= '</tr>';
		
		//Selecionar todos os itens da tabela 
		$result_msg_contatos = "SELECT * FROM dados_usuarios WHERE status != 'Desligado' AND filial = 'Caçamba' ORDER BY nome ASC";
		$resultado_msg_contatos = mysqli_query($lnk , $result_msg_contatos);
		
		while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){
			$html .= '<tr>';
			$html .= '<td>'.$row_msg_contatos["status"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nome"].'</td>';
			$html .= '<td>'.$row_msg_contatos["departamento"].'</td>';
			$html .= '<td>'.$row_msg_contatos["cargo"].'</td>';
			$html .= '<td>'.$row_msg_contatos["email"].'</td>';
			$html .= '<td>'.$row_msg_contatos["ramal"].'</td>';
			$html .= '<td>'.$row_msg_contatos["senha_telefonia"].'</td>';
			$html .= '<td>'.$row_msg_contatos["numero_celular"].'</td>';
			$html .= '<td>'.$row_msg_contatos["hostname"].'</td>';
			$html .= '<td>'.$row_msg_contatos["hardware"].'</td>';
			$html .= '<td>'.$row_msg_contatos["memoria_ram"].'</td>';
			$html .= '<td>'.$row_msg_contatos["tipo_ram"].'</td>';
			$html .= '<td>'.$row_msg_contatos["processador"].'</td>';
			$html .= '<td>'.$row_msg_contatos["memoria_hd"].'</td>';
			$html .= '<td>'.$row_msg_contatos["memoria_ssd"].'</td>';
			$html .= '<td>'.$row_msg_contatos["sistema_operacional"].'</td>';
			$html .= '<td>'.$row_msg_contatos["office"].'</td>';
			$html .= '</tr>';
			;
		}
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit;
		 ?>
	</body>
</html>