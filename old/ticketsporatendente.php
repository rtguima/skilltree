<?php 
  session_start();

require "verifica_ti.php"; 
 ?>
<?php
    include 'template/headerTI.php';
    include 'template/menuTI.php';
?>

<section>
</section>
<main>
<center>
  <br>
   <br>
<div>  <h2>Para visualização externa do BI Acesse: <a href="https://tinyurl.com/ticketlafaete">tinyurl.com/ticketlafaete</a></h2></div>
  <iframe width="1020" height="650" src="https://app.powerbi.com/view?r=eyJrIjoiMWY3ZmFiYTktYzU4MC00YzJhLWFmYTgtMjcyNTkxNTVhODQ1IiwidCI6ImFjNjY0ZTE0LTI3ZWYtNDc5Mi1iMjc5LWM3OWJlZWYzZDg0YyJ9" frameborder="0" allowFullScreen="true"></iframe>
</center>
</main>
<?php
    include 'template/footer.php'
?>