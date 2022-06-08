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
    <h3>Gerador de Assinaturas Lafaete 2019</h3>
    <br>
</center>
<?php
//Conexão com Banco de dados
    error_reporting(E_ERROR | E_PARSE);
    $lnk = mysqli_connect('localhost','root','', 'st_bd') or die(mysqli_error()) or die ('Nao foi possível conectar ao MySql: ' . mysqli_error($lnk));

    $id = filter_input(INPUT_GET, 'st_id', FILTER_SANITIZE_NUMBER_INT);
    $result_ass = "SELECT * FROM st_dados_usuarios WHERE st_id='$st_id'";
    $resultado_ass = mysqli_query($lnk, $result_ass);
    $row_ass = mysqli_fetch_assoc($resultado_ass);

?>

    <form action="proc_edit_ass.php" method="post">

        <div class="tabs-container">

            <!-- ABA 1 DADOS BASICOS -->
            <input type="radio" name="tabs" class="tabs" id="Editar" checked=checked />
            <label for="Cadastrar">Editar Assinatura</label>
            <div>
                <center>
                    <table width="550" height="110" align="left" border="0" cellspacing="0" class="tabela">
                        <tr>
                            <td>Campos Obrigatórios: *<br /><br /></td>
                        </tr>

                        <tr>
                            <td><br><input type="hidden" name="id_ass" value="<?php echo $row_ass['id_ass'];?>"/></td>
                        </tr>

                        <tr>
                            <td><br>Status:</td>
                            <td><br><input type="text" name="status_ass" value="<?php echo $row_ass['status_ass'];?>" maxlength="50" size="40" />*</td>
                        </tr>

                        <tr>
                            <td><br>Filial:</td>
                            <td><br><input type="text" name="filial_ass" value="<?php echo $row_ass['filial_ass'];?>" maxlength="50" size="40" />*</td>
                        </tr>

                        <tr>
                            <td><br>Nome Completo:</td>
                            <td><br><input type="text" name="nome_ass" value="<?php echo $row_ass['nome_ass'];?>" maxlength="50" size="40" />*</td>
                        </tr>

                        <tr>
                            <td><br>Setor:</td>
                            <td><br><input type="text" name="setor_ass" value="<?php echo $row_ass['setor_ass'];?>" maxlength="50" size="40" />*</td>
                        </tr>

                        <tr>
                            <td><br>Cargo:</td>
                            <td><br><input type="text" name="cargo_ass" value="<?php echo $row_ass['cargo_ass'];?>" maxlength="30" size="40" />*</td>
                        </tr>

                        <tr>
                            <td><br>E-mail:</td>
                            <td><br><input type="text" name="email_ass" value="<?php echo $row_ass['email_ass'];?>" maxlength="50" size="40" />*</td>
                        </tr>

                        <tr>
                            <td><br>Telefone Fixo:</td>
                            <td><br><input type="text" name="telefone_ass" value="<?php echo $row_ass['telefone_ass'];?>" maxlength="12" size="40" />*</td>
                        </tr>

                        <tr>
                            <td><br>Celular:</td>
                            <td><br><input type="text" name="celular_ass" value="<?php echo $row_ass['celular_ass']; ?>" maxlength="12" size="40" /></td>
                        </tr>

                        <tr>
                            <td><br>Celular 2:</td>
                            <td><br><input type="text" name="celular2_ass" value="<?php echo $row_ass['celular2_ass'];?>" maxlength="12" size="40" /></td>
                        </tr>


                            <tr>
                            <td></td>
                            <td>
                                <br><br><br><p><input type="submit" name="b1" value="Editar" /></p>
                            </td>
                        </tr>                           
                    </table>

                </center>
            </div>
        </form>

            <script>
        var expanded = false;
        function showCheckboxes() {
            var checkboxes = document.getElementById("checkboxes");
            if (!expanded) {
                checkboxes.style.display = "block";
                expanded = true;
            } else {
                checkboxes.style.display = "none";
                expanded = false;
            }
        }
        </script>
</main>
<?php
    include 'template/footer.php'
?>