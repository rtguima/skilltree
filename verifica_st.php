<?php 

	if (isset($_SESSION['nivel_adm'])) {

	}elseif (isset($_SESSION['diretoria'])) {
		Header('Location: diretoria/index_diretoria.php');

	}elseif (isset($_SESSION['normal'])) {
		Header('Location: ramal/index_ramal.php');

	}else{
		Header('Location: index.php');	
	}
 ?>