<?php
    session_start();

//Conexão com Banco de dados
    error_reporting(E_ERROR | E_PARSE);
    $lnk = mysqli_connect('localhost','root','', 'intranet_sistemas') or die(mysqli_error()) or die ('Nao foi possível conectar ao MySql: ' . mysqli_error($lnk));


//Consulta de tabela Dados Usuarios
    $sql = 'SELECT * FROM dados_usuarios WHERE status = "Ativo" AND filial = "Matriz" ORDER BY nome ASC';

    $nome = @$_POST['nome'];

    if(!is_null($nome) && !empty($nome)) 
        $sql = "SELECT * FROM dados_usuarios WHERE nome LIKE '".$nome."' ORDER BY nome ASC";

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

//Montando o cabeçalho da tabela de ramais
$table = '<table class="table table-hover table-inverse" style="width:10000px; background-color: #37444a; color:lightgrey; text-align: center; border="0";"> <tr> <td>Alterar</td><td>ID</td>
<td>Status</td>
<td>Filial</td>
<td>Data de Admissão</td>
<td>Data de Demissão</td>
<td>Data de Fim do Cotnrato</td>
<td>Nome</td>
<td>Departamento</td>
<td>Cargo</td>
<td>CPF</td>
<td>RG</td>
<td>E-mail</td>
<td>Grupo de E-mail</td>
<td>Senha de E-mail</td>
<td>Ramal</td>
<td>Senha Telefonia</td>
<td>Numero do Celular</td>
<td>Propriedade Celular</td>
<td>Modelo do Celular</td>
<td>Wi-fi</td>
<td>Patrimonio do Celular</td>
<td>Nota Celular</td>
<td>Nº Serie Celular</td>
<td>Mac Celular</td>
<td>Imei 1 Celular</td>
<td>Imei 2 Celular</td>
<td>Tablet</td>
<td>Patrimonio do Tablet</td>
<td>Nota Tablet</td>
<td>Nº Serie Tablet</td>
<td>Mac do Tablet</td>
<td>Imei 1 Tablet</td>
<td>Imei 2 do Tablet</td>
<td>Hardware</td>
<td>Patrimonio</td>
<td>Hostname</td>
<td>Marca do Notebook</td>
<td>Modelo do Notebook</td>
<td>Nº Serie Notebook</td>
<td>Mac Wi-fi Notebook</td>
<td>Mac Lan Notebook</td>
<td>Usuario do Ad</td>
<td>Grupo de Internet</td>
<td>Sistema Operacional</td>
<td>Office</td>
<td>Processador</td>
<td>Ram</td>
<td>Tipo Ram</td>
<td>HD</td>
<td>SSD</td>
<td>Placa de Video</td>
<td>Usuario Totvs</td>
<td>Usuario Sankhya</td>
<td>Navegador Sankhya</td>
<td>Padrão</td>
<td>Spiceworks</td>
<td>Kaspersky</td>
<td>Kaspersky Externo</td>
<td>RDP</td>
<td>AD</td>
<td>Adm Local</td>
<td>USB</td>
<td>Outros Softwares</td>
<td>Termos</td>
<td>Obs</td>
</tr>';


//Montando o corpo da tabela
$table .= '<tbody style="
    background-color: #D8D8D8;
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