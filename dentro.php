<?php 
	session_start();

	if (isset($_SESSION['nivel_adm'])) {
		Header('Location: index_st.php');	

	}elseif (isset($_SESSION['diretoria'])) {
		Header('Location: diretoria/index_diretoria.php');

	}elseif (isset($_SESSION['normal'])) {
		echo "<script>
	alert('Usuario Normal'); location= './index.php';
	</script>";

	}else{
		echo "<script>
	alert('Falha no Login!!!!'); location= './index.php';
	</script>";
	}
 ?>
 <?php
    include 'template/headerST.php';
    include 'template/menuPadrao.php';
?>

<section>
<center>
  <img width="600px" height="200px" src="https://i.imgur.com/XfNLH0V.png"/>
</center>
</section>
<main>

</main>

<?php
    include 'template/footer.php'
?>