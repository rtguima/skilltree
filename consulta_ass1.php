<?php
    session_start();
    require "verifica_ti.php"; 
    include 'template/menuTI.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
<link href="css/ti_style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="filtro.js"></script>

<title>Intranet</title>

</head>

<body>

<main>

<?php
//Conexão com Banco de dados
    error_reporting(E_ERROR | E_PARSE);
    $lnk = mysqli_connect('localhost','root','', 'intranet_sistemas') or die(mysqli_error()) or die ('Nao foi possível conectar ao MySql: ' . mysqli_error($lnk));

//Consulta de tabela Ass Email

        $sql_PegaUsuario = mysqli_query("SELECT * FROM ass_email WHERE status_ass = 'Ativo'");
          while($dados = mysqli_fetch_array($sql_PegaUsuario)){
            $nome = $dados['nome_ass'];
        }
    ?>
    
    <form action="consulta_ass1.php?nome_ass=$nome_ass" method="get" enctype="multipart/form-data">
        Buscar por Usuario:<input type="text" name="nome_ass" /><br />
        <input type="submit" name="mostrar" value="mostrar" />
    </form><br /><br />
    
    <?php
        if(isset($_GET['nome_ass'])){
            $nome_get = $_GET['nome_ass'];
            $sql_PegaUsuario = mysqli_query("SELECT nome_ass, cargo_ass, email_ass, telefone_ass, celular_ass
             FROM ass_email WHERE nome_ass = '$nome_get'");
              while($dados = mysqli_fetch_array($sql_PegaUsuario)){
                $nome_ass = $dados['nome_ass'];
                $cargo_ass = $dados['cargo_ass'];
                $email_ass = $dados['email_ass'];
                $telefone_ass = $dados['telefone_ass'];
                $celular_ass = $dados['celular_ass'];
            }
            if($nome_get != $nome_ass){
                echo "nenhum usuario encontrado com esse Nome <br /><br />";
            }
            else{
    ?>
        <form action="consulta_ass1.php" method="post" enctype="multipart/form-data">
            Nome:<input type="text" name="nome_ass" value="<?php echo $nome_ass; ?>" readonly="true" /><br />
            Cargo:<input type="text" name="cargo_ass" value="<?php echo $cargo_ass; ?>" readonly="true" /><br />
            E-mail:<input type="text" name="email_ass" value="<?php echo $email_ass; ?>" readonly="true" /><br />
            Telefone:<input type="text" name="telefone_ass" value="<?php echo $telefone_ass; ?>" readonly="true" /><br />
            Celular:<input type="text" name="celular_ass" value="<?php echo $celular_ass; ?>" readonly="true" /><br />

        </form><br /><br />
    <?php
            }
        }
    ?>
    <a href="index_ti.php">Voltar</a>

</body>
</html>