 <?php

 //Captura a conexão com banco dedados Mysql do Xampp
 $link = mysqli_connect('localhost','root','', 'st_bd') or die(mysqli_error());
	
//Trata as informações coletadas do banco, como e-mail e senha
	if(isset($_POST['st_login_email']) && isset($_POST['st_login_senha'])){
		$st_login_email = $_POST['st_login_email'];
		$st_login_senha = $_POST['st_login_senha'];

//Faz o select das informações do banco
		$get = mysqli_query($link,"SELECT * FROM st_dados_login WHERE st_login_email = '$st_login_email' AND st_login_senha = '$st_login_senha'");
		$num = mysqli_num_rows($get);

		if($num == 1){

			while ($percorrer = mysqli_fetch_array($get)) {
				$st_login_nivel_adm = $percorrer['st_login_nivel_adm'];
				$st_login_nome = $percorrer['st_login_nome'];

				session_start();

				if ($st_login_nivel_adm == 2) {
					$_SESSION['nivel_adm'] = $st_login_nome;

				} elseif ($st_login_nivel_adm == 1) {
					$_SESSION['diretoria'] = $st_login_nome;

				} else {
					$_SESSION['normal'] = $st_login_nome;
					echo "Usuario Normal";
				}
				Header('Location: dentro.php');		
			}

		}else{
			Header('Location: index_erro.php');	
		}
	}
?>