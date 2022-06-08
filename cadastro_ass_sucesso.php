<?php 
  session_start();

require "verifica_st.php"; 
 ?>
<?php
    include 'template/headerST.php';
    include 'template/menuST.php';
?>
    <link href="css/abas.css" rel="stylesheet" type="text/css" />
    <link href="format.css" rel="stylesheet" type="text/css" />
<style>
        .multiselect {
            position: absolute;
            top: 13.5%;
            left: 16.5%;
            bottom: 100%;
            transform: translate(-50%, -50%);
            width: 200px;
        }
        .selectBox {
            position: relative;
        }
        .selectBox select{
            width: 100%;
            font-weight: bold;
        }
        .overSelect{
            position: absolute;
            left: 0; right: 0; top: 0; bottom: 0; 
        }
        #checkboxes{
            display: none;
            border: 1px #ff6d00 solid;
        }
        #checkboxes label{
            display: block;
            vertical-align: right;
            background-color: #FFFFFF;
        }
        #checkboxes label:hover{
            background-color: #A9D0F5;
        }
</style>
<section>
</section>
<main>
<center>
    <h3>Currículo Cadastrado com Sucesso.</h3>
    <h3><a href="http://10.140.5.239/ti/gerar_assinatura.php">Cadastrar Novo Currículo</a></h3>
    <br>
</center>
</main>
<?php
    include 'template/footer.php'
?>