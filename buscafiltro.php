<?php
$wfiltro = "";
//FILTRO CATEGORIA
if (isset($_GET['filtro'])) {//melhor fazer validação aqui e logo alocar a variável
    $filtro = $_GET['filtro'];
    if(in_array("Todos", $filtro)){
        $wfiltro='';
    }else{
        $wfiltro = " AND filtro IN(";
        $wfiltro .= "'" . implode("','", $filtro) . "'";
        $wfiltro .= ")";
        }
}else{$wfiltro='';}


$query=("SELECT *, FROM dados_usuarios WHERE id > 0".$wfiltro);

?>