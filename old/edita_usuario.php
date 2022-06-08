<?php 
  session_start();

require "verifica_ti.php"; 
 ?>
<?php
    include 'template/headerTI.php';
    include 'template/menuTI.php';
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

<?php
//Conexão com Banco de dados
    error_reporting(E_ERROR | E_PARSE);
    $lnk = mysqli_connect('localhost','root','', 'intranet_sistemas') or die(mysqli_error()) or die ('Nao foi possível conectar ao MySql: ' . mysqli_error($lnk));

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $result_usuario = "SELECT * FROM dados_usuarios WHERE id = '$id'";

    $resultado_usuario = mysqli_query($lnk, $result_usuario);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>



<center>
    <h3>Editar Usuario</h3>
    <br>
</center>
    <form action="proc_edit_usuario.php" method="post">

        <div class="tabs-container">

            <!-- ABA 1 DADOS BASICOS -->
            <input type="radio" name="tabs" class="tabs" id="dados_basicos" checked=checked />
            <label for="dados_basicos">Dados Basicos</label>
            <div>
                <center>
                    <table width="600" height="210" align="left" border="0" cellspacing="0" class="tabela">
                        <tr>
                            <td>Campos Obrigatórios: *<br /><br /></td>
                        </tr>

                        <tr>
                            <td><input type="hidden" name="id" value="<?php echo $row_usuario['id'];  ?>"/></td>
                        </tr>       

                        <tr>
                            <td>Status:</td>
                            <td><input type="text" name="status" value="<?php echo $row_usuario['status'];?>" maxlength="50" size="40" />*</td>
                        </tr>

                        <tr>
                            <td>Filial:</td>
                            <td><input type="text" name="filial" value="<?php echo $row_usuario['filial'];?>" maxlength="50" size="40" />*</td>
                        </tr>

                        <tr>
                            <td>Data de Admissão:</td>
                            <td><input type="text" id="dt_admis" name="dt_admis" value="<?php echo $row_usuario['dt_admis'];  ?>" maxlength="10" size="10" OnKeyPress="formatar(this, '##/##/####')" onBlur="return doDateVenc(this.id,this.value, 4);"></td>
                        </tr>

                        <tr>
                            <td>Data de Demissão:</td>
                            <td><input type="text" name="dt_demis" value="<?php echo $row_usuario['dt_demis']; ?>" maxlength="10" size="10" OnKeyPress="formatar(this, '##/##/####')" onBlur="return doDateVenc(this.id,this.value, 4);"></td>                      
                        </tr>

                        <tr>
                            <td>Data de Fim do Cotnrato:</td>
                            <td><input type="text" name="dt_fim" value="<?php echo $row_usuario['dt_fim'];  ?>" maxlength="10" size="10" OnKeyPress="formatar(this, '##/##/####')" onBlur="return doDateVenc(this.id,this.value, 4);"></td>                            
                        </tr>

                        <tr>
                            <td>Nome Completo:</td>
                            <td><input type="text" name="nome" value="<?php echo $row_usuario['nome'];  ?>" maxlength="100" size="40" />*</td>
                        </tr>


                        <tr>
                            <td>Departamento:</td>
                            <td><input type="text" name="departamento" value="<?php echo $row_usuario['departamento'];  ?>" maxlength="100" size="40" />*</td>
                        </tr>

                        <tr>
                            <td>Cargo:</td>
                            <td><input type="text" name="cargo" value="<?php echo $row_usuario['cargo'];  ?>" maxlength="30" size="40" /></td>
                        </tr>

                        <tr>
                            <td>CPF:</td>
                            <td><input type="text" name="cpf" value="<?php echo $row_usuario['cpf'];  ?>" maxlength="11" size="11" /></td>
                        </tr>

                        <tr>
                            <td>RG:</td>
                            <td><input type="text" name="rg" value="<?php echo $row_usuario['rg'];  ?>" maxlength="15" size="15" /></td>
                        </tr>
                    </table>
                </center>
            </div>

            <!-- ABA 2 E-MAIL -->
            <input type="radio" name="tabs" class="tabs" id="email" />
            <label for="email">E-mail</label>
            <div>
                <center>
                    <table width="580" height="200" align="left"  border="0" cellspacing="0" class="tabela">

                        <tr>
                            <td>E-mail:</td>
                            <td><input type="text" name="email" value="<?php echo $row_usuario['email'];  ?>" maxlength="100" size="40" /></td>
                        </tr>

                        <tr>
                            <td>Grupos de E-mail:</td>
                            <td><textarea name="email_grupo" value="<?php echo $row_usuario['email_grupo'];  ?>" rows="5" cols="20" maxlength="50"></textarea></td>
                        </tr>      

                        <tr>
                            <td>Senha do E-mail:</td>
                            <td><input type="text" name="email_senha" value="<?php echo $row_usuario['email_senha'];  ?>" maxlength="20" size="21"/></td>
                        </tr>


                    </table>
                </center>
            </div>


            <!-- ABA 4 TELEFONIA -->
            <input type="radio" name="tabs" class="tabs" id="telefonia" />
            <label for="telefonia">Telefonia</label>
            <div>
                <center>
                    <table width="620" height="300" align="left" border="0" cellspacing="0" class="tabela">
                        <tr>

                        <tr>
                            <td>Ramal:</td>
                            <td><input type="text" name="ramal" value="<?php echo $row_usuario['ramal'];  ?>" maxlength="4" size="4" /></td>
                        </tr>

                        <tr>
                            <td>Senha Telefonia:</td>
                            <td><input type="text" name="senha_telefonia" value="<?php echo $row_usuario['senha_telefonia'];  ?>" maxlength="4" size="4" /></td>
                        </tr>

                        <tr>
                            <td>Numero Celular:</td>
                            <td><input type="text" name="numero_celular" value="<?php echo $row_usuario['numero_celular'];  ?>" maxlength="16" size="16" /></td>
                        </tr>

                        <tr>
                            <td>Whatsapp:</td>
                            <td><input type="text" name="numero_celular_pessoal" value="<?php echo $row_usuario['numero_celular_pessoal'];  ?>" maxlength="15" size="15" /></td>
                        </tr>

                        <tr>
                            <td>Skype:</td>
                            <td><input type="text" name="contato_skype" value="<?php echo $row_usuario['contato_skype'];  ?>" maxlength="50" size="50" /></td>
                        </tr>

                        <tr>
                            <td>Propriedade do Celular:</td>
                            <td><input type="text" name="propriedade_celular" value="<?php echo $row_usuario['propriedade_celular'];  ?>" maxlength="100" size="40" />*</td>
                        </tr>

                        <tr>
                            <td>Modelo do Celular:</td>
                            <td><input type="text" name="modelo_celular" value="<?php echo $row_usuario['modelo_celular'];  ?>" maxlength="15" size="15" /></td>
                        </tr>

                        <tr>
                            <td>Wi-fi:</td>
                            <td><input type="text" name="wifi" value="<?php echo $row_usuario['wifi'];  ?>" maxlength="100" size="40" />*</td>
                        </tr>

                        <tr>
                            <td>Patrimonio do Celular:</td>
                            <td><input type="text" name="patrimonio_celular" value="<?php echo $row_usuario['patrimonio_celular'];  ?>" maxlength="4" size="4" /></td>
                        </tr>

                        <tr>
                            <td>Numero da Nota do Celular:</td>
                            <td><input type="text" name="nota_celular" value="<?php echo $row_usuario['nota_celular'];  ?>" maxlength="20" size="20" /></td>
                        </tr>                        

                        <tr>
                            <td>Numero de Serie do Celular:</td>
                            <td><input type="text" name="serial_celular" value="<?php echo $row_usuario['serial_celular'];  ?>" maxlength="20" size="20" /></td>
                        </tr>

                        <tr>
                            <td>Mac do Celular:</td>
                            <td><input type="text" name="mac_celular" value="<?php echo $row_usuario['mac_celular'];  ?>" maxlength="30" size="30" /></td>
                        </tr>                        

                        <tr>
                            <td>Primeiro IMEI do Celular:</td>
                            <td><input type="text" name="imei1_celular" value="<?php echo $row_usuario['imei1_celular'];  ?>" maxlength="30" size="30" /></td>
                        </tr>

                        <tr>
                            <td>Segundo IMEI do Celular:</td>
                            <td><input type="text" name="imei2_celular" value="<?php echo $row_usuario['imei2_celular'];  ?>" maxlength="30" size="30" /></td>
                        </tr>

                        <tr>
                            <td>Tablet:</td>
                            <td><input type="text" name="tablet" value="<?php echo $row_usuario['tablet'];  ?>" maxlength="100" size="40" />*</td>
                        </tr>

                        <tr>
                            <td>Patrimonio do Tablet:</td>
                            <td><input type="text" name="patrimonio_tablet" value="<?php echo $row_usuario['patrimonio_tablet'];  ?>" maxlength="4" size="4" /></td>
                        </tr>

                        <tr>
                            <td>Numero da Nota do Tablet:</td>
                            <td><input type="text" name="nota_tablet" value="<?php echo $row_usuario['nota_tablet'];  ?>"  maxlength="20" size="20" /></td>
                        </tr>                            

                        <tr>
                            <td>Numero de Serie do Tablet:</td>
                            <td><input type="text" name="serial_tablet" value="<?php echo $row_usuario['serial_tablet'];  ?>" maxlength="20" size="20" /></td>
                        </tr>

                        <tr>
                            <td>Mac do Tablet:</td>
                            <td><input type="text" name="mac_tablet" value="<?php echo $row_usuario['mac_tablet'];  ?>"  maxlength="30" size="30" /></td>
                        </tr>                        

                        <tr>
                            <td>Primeiro IMEI do Tablet:</td>
                            <td><input type="text" name="imei1_tablet" value="<?php echo $row_usuario['imei1_tablet'];  ?>" maxlength="30" size="30" /></td>
                        </tr>

                        <tr>
                            <td>Segundo IMEI do Tablet:</td>
                            <td><input type="text" name="imei2_tablet" value="<?php echo $row_usuario['imei2_tablet'];  ?>" maxlength="30" size="30" /></td>
                        </tr>

                    </table>
                </center>
            </div>

            <!-- ABA 4 HARDWARE e SOFTWARE-->
            <input type="radio" name="tabs" class="tabs" id="Hardware e Software" />
            <label for="Hardware e Software">Hardware e Software</label>
            <div>
                <center>
                    <table width="700" height="210" align="left" border="0" cellspacing="0" class="tabela">

                        <tr>
                            <td>Hardware:</td>
                            <td><input type="text" name="hardware" value="<?php echo $row_usuario['hardware'];  ?>" maxlength="100" size="40" />*</td>
                        </tr>

                        <tr>
                            <td>Patrimonio do Computador:</td>
                            <td><input type="text" name="patrimonio" value="<?php echo $row_usuario['patrimonio'];  ?>" maxlength="4" size="4" /></td>
                        </tr>

                        <tr>
                            <td>Hostname:</td>
                            <td><input type="text" name="hostname" value="<?php echo $row_usuario['hostname'];  ?>" maxlength="15" size="15" /></td>
                        </tr>

                        <tr>
                            <td>Marca do Notebook:</td>
                            <td><input type="text" name="marca_notebook" value="<?php echo $row_usuario['marca_notebook'];  ?>" maxlength="15" size="15" /></td>
                        </tr>

                        <tr>
                            <td>Modelo do Notebook:</td>
                            <td><input type="text" name="modelo_notebook" value="<?php echo $row_usuario['modelo_notebook'];  ?>" maxlength="15" size="15" /></td>
                        </tr>

                         <tr>
                            <td>Numero de Serie do Notebook:</td>
                            <td><input type="text" name="serial_notebook" value="<?php echo $row_usuario['serial_notebook'];  ?>" maxlength="30" size="30" /></td>
                        </tr>                       

                        <tr>
                            <td>Mac Wi-fi do Notebook:</td>
                            <td><input type="text" name="mac_wifi_notebook" value="<?php echo $row_usuario['mac_wifi_notebook'];  ?>" maxlength="30" size="30" /></td>
                        </tr>    

                        <tr>
                            <td>Mac Lan do Notebook:</td>
                            <td><input type="text" name="mac_lan_notebook" value="<?php echo $row_usuario['mac_lan_notebook'];  ?>" maxlength="30" size="30" /></td>
                        </tr>   

                        <tr>
                            <td>Usuario do AD:</td>
                            <td><input type="text" name="usuario_ad" value="<?php echo $row_usuario['usuario_ad'];  ?>" maxlength="25" size="25" /></td>
                        </tr>

                        <tr>
                            <td>Grupo de Internet:</td>
                            <td><input type="text" name="grupo_internet" value="<?php echo $row_usuario['grupo_internet'];  ?>" maxlength="40" size="40" /></td>
                        </tr>                         

                        <tr>
                            <td>Sistema Operacional:</td>
                            <td><input type="text" name="sistema_operacional" value="<?php echo $row_usuario['sistema_operacional'];  ?>" maxlength="100" size="40" />*</td>
                        </tr>

                        <tr>
                            <td>Office:</td>
                            <td><input type="text" name="office" value="<?php echo $row_usuario['office'];  ?>" maxlength="100" size="40" />*</td>
                        </tr>                     

                        <tr>
                            <td>Processador:</td>
                            <td><input type="text" name="processador" value="<?php echo $row_usuario['processador'];  ?>" maxlength="25" /></td>
                        </tr>

                        <tr>
                            <td>Memoria RAM:</td>
                            <td><input type="text" name="memoria_ram" value="<?php echo $row_usuario['memoria_ram'];  ?>" maxlength="25" /></td>
                        </tr>

                        <tr>
                            <td>Frequencia/Modelo RAM:</td>
                            <td><input type="text" name="tipo_ram" value="<?php echo $row_usuario['tipo_ram'];  ?>" maxlength="25" /></td>
                        </tr>

                        <tr>
                            <td>Capacidade do HD:</td>
                            <td><input type="text" name="memoria_hd" value="<?php echo $row_usuario['memoria_hd'];  ?>" maxlength="25" /></td>
                        </tr>

                        <tr>
                            <td>Capacidade do SSD:</td>
                            <td><input type="text" name="memoria_ssd" value="<?php echo $row_usuario['memoria_ssd'];  ?>" maxlength="25" /></td>
                        </tr>

                        <tr>
                            <td>Placa de Video:</td>
                            <td><input type="text" name="placa_video" value="<?php echo $row_usuario['placa_video'];  ?>" maxlength="20" size="20" /></td>
                        </tr>

                    </table>
                </center>
            </div>

            <!-- ABA 5 SISTEMAS E ADICIONAIS -->
            <input type="radio" name="tabs" class="tabs" id="Sistemas" />
            <label for="Sistemas">Sistemas</label>
            <div>
                <center>
                    <table width="500" height="210" align="left" border="0" cellspacing="0" class="tabela">

                        <tr>
                            <td>Usuario Totvs:</td>
                            <td><input type="text" name="usuario_totvs" value="<?php echo $row_usuario['usuario_totvs'];  ?>" maxlength="20" size="20" /></td>
                        </tr>

                        <tr>
                            <td>Usuario Sankhya:</td>
                            <td><input type="text" name="usuario_sankhya" value="<?php echo $row_usuario['usuario_sankhya'];  ?>" maxlength="20" size="20" /></td>
                        </tr>

                        <tr>
                            <td>Navegador Sankhya:</td>
                            <td><input type="text" name="navegador_sankhya" value="<?php echo $row_usuario['navegador_sankhya'];  ?>" maxlength="10" size="10" /></td>
                        </tr>

                        <tr>
                            <td>Padrão do Computador:</td>
                            <td><input type="text" name="padrao" value="<?php echo $row_usuario['padrao'];  ?>" maxlength="25" /></td>
                        </tr>

                        <tr>
                            <td>Spiceworks:</td>
                            <td><input type="text" name="spiceworks" value="<?php echo $row_usuario['spiceworks'];  ?>" maxlength="25" /></td>
                        </tr>

                        <tr>
                            <td>Kaspersky:</td>
                            <td><input type="text" name="kaspersky" value="<?php echo $row_usuario['kaspersky'];  ?>" maxlength="25" /></td>
                        </tr>       

                        <tr>
                            <td>Kaspersky Externo:</td>
                            <td><input type="text" name="kaspersky_externo" value="<?php echo $row_usuario['kaspersky_externo'];  ?>" maxlength="25" /></td>
                        </tr>   

                        <tr>
                            <td>Área de trabalho remota:</td>
                            <td><input type="text" name="rdp" value="<?php echo $row_usuario['rdp'];  ?>" maxlength="25" /></td>
                        </tr>   

                        <tr>
                            <td>AD:</td>
                            <td><input type="text" name="ad" value="<?php echo $row_usuario['ad'];  ?>" maxlength="25" /></td>
                        </tr>   

                        <tr>
                            <td>Administrador Local:</td>
                            <td><input type="text" name="adm_local" value="<?php echo $row_usuario['adm_local'];  ?>" maxlength="25" /></td>
                        </tr>   

                        <tr>
                            <td>USB:</td>
                            <td><input type="text" name="usb_gpo" value="<?php echo $row_usuario['usb_gpo'];  ?>" maxlength="25" /></td>
                        </tr>   

                        <tr>
                            <td>Outros Softwares:</td>
                            <td><input type="text" name="outros_softwares" value="<?php echo $row_usuario['outros_softwares'];  ?>" maxlength="25" /></td>
                        </tr>   

                        <tr>
                            <td>Termos de Responsabilidade:</td>
                            <td><input type="text" name="termos" value="<?php echo $row_usuario['termos'];  ?>" maxlength="25" /></td>
                        </tr>   

                        <tr>
                            <td>Observações:</td>
                            <td><textarea name="obs" value="<?php echo $row_usuario['obs'];  ?>" rows="5" cols="20" maxlength="50"></textarea></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                    <div align="center">
                                        <p>
                                            <br />
                                            <input type="submit" name="b1" value="Alterar" />
                                        </p>
                                    </div>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
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