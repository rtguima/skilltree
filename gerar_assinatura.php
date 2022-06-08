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
            width: 98%;
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <h3>Gerador de Currículo</h3>
    <br>
</center>
    <form action="cadastra_ass.php" method="post">

        <div class="tabs-container">

            <!-- ABA 1 DADOS BASICOS -->
            <input type="radio" name="tabs" class="tabs" id="Cadastrar" checked=checked />
            <label for="Cadastrar">Dados Pessoais</label>
            <div>

                Campos Obrigatórios: *<br />
                <center>
                    <table width="500" height="110" align="left" border="0" cellspacing="0" class="tabela">
                        <tr>
                            <td><br>Status:</td>
                                <td><br>
                                <select id=st_status name="st_status">
                                    <option value=""></option>
                                    <option value="Ativo">Ativo</option>
                                    <option value="Inativo">Desligado</option>
                                </select>
                            *</td>
                        </tr>
                        </tr>

                        <tr>
                            <td><br>Data de Cadastro:</td>
                            <td><br><input type="text" name="st_dt_entrada" maxlength="15" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>Data de Inativação:</td>
                            <td><br><input type="text" name="st_dt_saida" maxlength="15" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>Nome Completo:</td>
                            <td><br><input type="text" name="st_nome" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>Nacionalidade:</td>
                            <td><br><input type="text" name="st_nacionalidade" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>Idade:</td>
                            <td><br><input type="text" name="st_idade" maxlength="2" size="1" />*</td>
                        </tr>

                        <tr>
                            <td><br>CPF:</td>
                            <td><br><input type="text" name="st_cpf" maxlength="11" size="15" />*</td>
                        </tr>

                        <tr>
                            <td><br>CNPJ:</td>
                            <td><br><input type="text" name="st_cnpj" maxlength="14" size="15" />*</td>
                        </tr>

                        <tr>
                            <td><br>Identidade:</td>
                            <td><br><input type="text" name="st_rg" maxlength="15" size="15" />*</td>
                        </tr>

                        <tr>
                            <td><br>E-mail:</td>
                            <td><br><input type="text" name="st_email" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>Telefone:</td>
                            <td><br><input type="text" name="st_tel" maxlength="20" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>Celular:</td>
                            <td><br><input type="text" name="st_tel_celular" maxlength="20" size="30" />*</td>
                        </tr>
                    </table>
                </center>
            </div>


            <!-- ABA 2 Capacidades -->
            <input type="radio" name="tabs" class="tabs" id="Capacidades"/>
            <label for="Capacidades">Capacidades</label>
            <div>

                Campos Obrigatórios: *<br />
                <center>
                    <table width="500" height="110" align="left" border="0" cellspacing="0" class="tabela">

                        <tr>
                            <td><br>1º Passatempo:</td>
                            <td><br><input type="text" name="st_passatempo_01" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>2º Passatempo:</td>
                            <td><br><input type="text" name="st_passatempo_02" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>3º Passatempo:</td>
                            <td><br><input type="text" name="st_passatempo_03" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>Objetivo:</td>
                            <td><br><input type="text" name="st_objetivo" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>Sobre:</td>
                            <td><br><input type="text" name="st_sobre" maxlength="100" size="30" />*</td>
                        </tr>
                    </table>
                </center>
            </div>

            <!-- ABA 3 Formação -->
            <input type="radio" name="tabs" class="tabs" id="Formacao"/>
            <label for="Formacao">Formação</label>
            <div>

                Campos Obrigatórios: *<br />
                <center>
                    <table width="500" height="110" align="left" border="0" cellspacing="0" class="tabela">


                        <tr>
                            <td><br>Ensino Fundamental - Escola:</td>
                            <td><br><input type="text" name="st_educacao_fundamental" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>Ensino Médio - Escola:</td>
                            <td><br><input type="text" name="st_educacao_medio" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>1º Ensino Superior:</td>
                            <td><br><input type="text" name="st_educacao_superior_01" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>2º Ensino Superior:</td>
                            <td><br><input type="text" name="st_educacao_superior_02" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>3º Ensino Superior:</td>
                            <td><br><input type="text" name="st_educacao_superior_03" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>Pós-Graduação:</td>
                            <td><br><input type="text" name="st_educacao_pos" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>Mestrado:</td>
                            <td><br><input type="text" name="st_educacao_mestrado" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>Doutorado:</td>
                            <td><br><input type="text" name="st_educacao_doutorado" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>PHD:</td>
                            <td><br><input type="text" name="st_educacao_pos_doutorado" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>1º Certificação:</td>
                            <td><br><input type="text" name="st_certificacao_01" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>2º Certificação:</td>
                            <td><br><input type="text" name="st_certificacao_02" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>3º Certificação:</td>
                            <td><br><input type="text" name="st_certificacao_03" maxlength="100" size="30" />*</td>
                        </tr>

                        <tr>
                            <td><br>Experiencia:</td>
                            <td><br><textarea rows="5" cols="33" maxlength="500" name="st_experiencia"></textarea>*</td>
                        </tr>

                        <tr>
                            <td><br><br></td>
                            <td><br><input type="submit" name="b1" value="Cadastrar" /></td>
                        </tr>                           
                    </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
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