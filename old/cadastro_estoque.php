﻿<?php 
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
    <form action="cadastro.php" method="post">

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
                            <td>Status:</td>
                                <td>
                                <select id=status name="status">
                                    <option value=""></option>
                                    <option value="Ativo">Ativo</option>
                                    <option value="Férias">Férias</option>
                                    <option value="Inativo">Desligado</option>
                                </select>
                            *</td>
                        </tr>
                        </tr>

                        <tr>
                            <td>Filial:</td>
                                <td>
                                <select id=filial name="filial">
                                    <option value=""></option>
                                    <option value="Matriz">Matriz</option>
                                    <option value="Caçamba">Caçamba</option>
                                    <option value="Via Expressa">Via Expressa</option>
                                    <option value="Contagem">Contagem</option>
                                    <option value="CMC SP">CMC SP</option>
                                    <option value="Cotia SP">Cotia SP</option>
                                    <option value="Duque de Caxias RJ">Duque de Caxias RJ</option>
                                    <option value="São João da Barra RJ">São João da Barra RJ</option>
                                    <option value="São Luis MA">São Luis MA</option>
                                    <option value="Imperatriz MA">Imperatriz MA</option>
                                    <option value="Parauapebas PA">Parauapebas PA</option>
                                    <option value="Jaboatão dos Guararapes PE">Jaboatão dos Guararapes PE</option>
                                    <option value="Porto Velho RO">Porto Velho RO</option>
                                </select>
                            *</td>
                        </tr>

                        <tr>
                            <td>Data de Admissão:</td>
                            <td><input type="text" id="dt_admis" name="dt_admis" maxlength="10" size="10" OnKeyPress="formatar(this, '##/##/####')" onBlur="return doDateVenc(this.id,this.value, 4);"></td>
                        </tr>

                        <tr>
                            <td>Data de Demissão:</td>
                            <td><input type="text" id="dt_demis" name="dt_demis" maxlength="10" size="10" OnKeyPress="formatar(this, '##/##/####')" onBlur="return doDateVenc(this.id,this.value, 4);"></td>                      
                        </tr>

                        <tr>
                            <td>Data de Fim do Cotnrato:</td>
                            <td><input type="text" id="dt_fim" name="dt_fim" maxlength="10" size="10" OnKeyPress="formatar(this, '##/##/####')" onBlur="return doDateVenc(this.id,this.value, 4);"></td>                            
                        </tr>

                        <tr>
                            <td>Nome Completo:</td>
                            <td><input type="text" name="nome" maxlength="100" size="40" />*</td>
                        </tr>

                        <tr>
                            <td>Setor:</td>
                            <td>
                                <select id=departamento name="departamento">
                                    <option value=""></option>
                                    <option value="Gestão Administrativa">Gestão Administrativa</option>
                                    <option value="Diretoria">Diretoria</option>
                                    <option value="Gestão de Compras">Gestão de Compras</option>
                                    <option value="Gestão Contábil">Gestão Contábil</option>
                                    <option value="Gestão de Custos">Gestão de Custos</option>
                                    <option value="Gestão Financeira">Gestão Financeira</option>
                                    <option value="Negócios Internacionais">Negócios Internacionais</option>
                                    <option value="Gestão Jurídica">Gestão Jurídica</option>
                                    <option value="Gestão de Logistica">Gestão de Logistica</option>
                                    <option value="Gestão de Manutenção">Gestão de Manutenção</option>
                                    <option value="Gestão de Marketing">Gestão de Marketing</option>
                                    <option value="Gestão de Pessoal">Gestão de Pessoal</option>
                                    <option value="Gestão de RH">Gestão de RH</option>
                                    <option value="Gestão de TI">Gestão de TI</option>
                                    <option value="Gestão de Vendas">Gestão de Vendas</option>
                                </select>
                            *</td>
                        </tr>

                        <tr>
                            <td>Cargo:</td>
                            <td><input type="text" name="cargo" maxlength="30" size="40" /></td>
                        </tr>

                        <tr>
                            <td>CPF:</td>
                            <td><input type="text" name="cpf" maxlength="11" size="11" /></td>
                        </tr>

                        <tr>
                            <td>RG:</td>
                            <td><input type="text" name="rg" maxlength="15" size="15" /></td>
                        </tr>
                    </table>
                </center>
            </div>

            <!-- ABA 2 E-MAIL -->
            <input type="radio" name="tabs" class="tabs" id="email" />
            <label for="email">E-mail</label>
            <div>
                <center>
                    <table width="480" height="200" align="left"  border="0" cellspacing="0" class="tabela">

                        <tr>
                            <td>E-mail:</td>
                            <td><input type="text" name="email" maxlength="100" size="40" /></td>
                        </tr>

                        <tr>
                            <td>Grupos de E-mail:</td>
                            <td><textarea name="email_grupo" rows="5" cols="20" maxlength="50"></textarea></td>
                        </tr>      

                        <tr>
                            <td>Senha do E-mail:</td>
                            <td><input type="text" name="email_senha" maxlength="20" size="21"/></td>
                        </tr>


                    </table>
                </center>
            </div>


            <!-- ABA 4 TELEFONIA -->
            <input type="radio" name="tabs" class="tabs" id="telefonia" />
            <label for="telefonia">Telefonia</label>
            <div>
                <center>
                    <table width="480" height="200" align="left" border="0" cellspacing="0" class="tabela">
                        <tr>

                        <tr>
                            <td>Ramal:</td>
                            <td><input type="text" name="ramal" maxlength="4" size="4" /></td>
                        </tr>

                        <tr>
                            <td>Senha Telefonia:</td>
                            <td><input type="text" name="senha_telefonia" maxlength="4" size="4" /></td>
                        </tr>

                        <tr>
                            <td>Numero Celular:</td>
                            <td><input type="text" name="numero_celular" maxlength="16" size="16" /></td>
                        </tr>

                        <tr>
                            <td>Propriedade do Celular</td>
                            <td>
                                <select id=propriedade_celular name="propriedade_celular">
                                    <option value=""></option>
                                    <option value="Corporativo">Corporativo</option>
                                    <option value="Pessoal">Pessoal</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Modelo do Celular:</td>
                            <td><input type="text" name="modelo_celular" maxlength="15" size="15" /></td>
                        </tr>

                        <tr>
                            <td>Wi-fi:</td>
                            <td>
                                <select id=wifi name="wifi">
                                    <option value=""></option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Patrimonio do Celular:</td>
                            <td><input type="text" name="patrimonio_celular" maxlength="4" size="4" /></td>
                        </tr>

                        <tr>
                            <td>Numero da Nota do Celular:</td>
                            <td><input type="text" name="nota_celular" maxlength="20" size="20" /></td>
                        </tr>                        

                        <tr>
                            <td>Numero de Serie do Celular:</td>
                            <td><input type="text" name="serial_celular" maxlength="20" size="20" /></td>
                        </tr>

                        <tr>
                            <td>Mac do Celular:</td>
                            <td><input type="text" name="mac_celular" maxlength="30" size="30" /></td>
                        </tr>                        

                        <tr>
                            <td>Primeiro IMEI do Celular:</td>
                            <td><input type="text" name="imei1_celular" maxlength="30" size="30" /></td>
                        </tr>

                        <tr>
                            <td>Segundo IMEI do Celular:</td>
                            <td><input type="text" name="imei2_celular" maxlength="30" size="30" /></td>
                        </tr>

                        <tr>
                            <td>Tablet:</td>
                            <td>
                                <select id=tablet name="tablet">
                                    <option value=""></option>
                                    <option value="Samsung T116BU">Samsung T116BU</option>
                                    <option value="Samsung T285 A7">Samsung T285 A7</option>
                                    <option value="Não">Não</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Patrimonio do Tablet:</td>
                            <td><input type="text" name="patrimonio_tablet" maxlength="4" size="4" /></td>
                        </tr>

                        <tr>
                            <td>Numero da Nota do Tablet:</td>
                            <td><input type="text" name="nota_tablet" maxlength="20" size="20" /></td>
                        </tr>                            

                        <tr>
                            <td>Numero de Serie do Tablet:</td>
                            <td><input type="text" name="serial_tablet" maxlength="20" size="20" /></td>
                        </tr>

                        <tr>
                            <td>Mac do Tablet:</td>
                            <td><input type="text" name="mac_tablet" maxlength="30" size="30" /></td>
                        </tr>                        

                        <tr>
                            <td>Primeiro IMEI do Tablet:</td>
                            <td><input type="text" name="imei1_tablet" maxlength="30" size="30" /></td>
                        </tr>

                        <tr>
                            <td>Segundo IMEI do Tablet:</td>
                            <td><input type="text" name="imei2_tablet" maxlength="30" size="30" /></td>
                        </tr>

                    </table>
                </center>
            </div>

            <!-- ABA 4 HARDWARE e SOFTWARE-->
            <input type="radio" name="tabs" class="tabs" id="Hardware e Software" />
            <label for="Hardware e Software">Hardware e Software</label>
            <div>
                <center>
                    <table width="600" height="210" align="left" border="0" cellspacing="0" class="tabela">

                        <tr>
                            <td>Hardware:</td>
                            <td>
                                <select id=hardware name="hardware">
                                    <option value=""></option>
                                    <option value="Desktop">Desktop</option>
                                    <option value="Notebook">Notebook</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Patrimonio do Computador:</td>
                            <td><input type="text" name="patrimonio" maxlength="4" size="4" /></td>
                        </tr>

                        <tr>
                            <td>Hostname:</td>
                            <td><input type="text" name="hostname" maxlength="15" size="15" /></td>
                        </tr>

                        <tr>
                            <td>Marca do Notebook:</td>
                            <td><input type="text" name="marca_notebook" maxlength="15" size="15" /></td>
                        </tr>

                        <tr>
                            <td>Modelo do Notebook:</td>
                            <td><input type="text" name="modelo_notebook" maxlength="15" size="15" /></td>
                        </tr>

                         <tr>
                            <td>Numero de Serie do Notebook:</td>
                            <td><input type="text" name="serial_notebook" maxlength="30" size="30" /></td>
                        </tr>                       

                        <tr>
                            <td>Mac Wi-fi do Notebook:</td>
                            <td><input type="text" name="mac_wifi_notebook" maxlength="30" size="30" /></td>
                        </tr>    

                        <tr>
                            <td>Mac Lan do Notebook:</td>
                            <td><input type="text" name="mac_lan_notebook" maxlength="30" size="30" /></td>
                        </tr>   

                        <tr>
                            <td>Usuario do AD:</td>
                            <td><input type="text" name="usuario_ad" maxlength="25" size="25" /></td>
                        </tr>

                        <tr>
                            <td>Grupo de Internet:</td>
                            <td><input type="text" name="grupo_internet" maxlength="40" size="40" /></td>
                        </tr>                         

                        <tr>
                            <td>Sistema Operacional:</td>
                            <td>
                                <select id=sistema_operacional name="sistema_operacional">
                                    <option value=""></option>
                                    <option value="Windows 7">Windows 7 Pro</option>
                                    <option value="Windows 10">Windows 10 Pro</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Office:</td>
                            <td>
                                <select id=office name="office">
                                    <option value=""></option>
                                    <option value="2010 Home and Business">2010 Home and Business</option>
                                    <option value="2016 Home and Business">2016 Home and Business</option>
                                </select>
                            </td>
                        </tr>                        

                        <tr>
                            <td>Processador:</td>
                            <td><input type="text" name="processador" maxlength="25" /></td>
                        </tr>

                        <tr>
                            <td>Memoria RAM:</td>
                            <td>
                                <select id=memoria_ram name="memoria_ram">
                                    <option value=""></option>
                                    <option value="2 GB">2 GB</option>
                                    <option value="4 GB">4 GB</option>
                                    <option value="6 GB">6 GB</option>
                                    <option value="8 GB">8 GB</option>
                                    <option value="12 GB">12 GB</option>
                                    <option value="16 GB">16 GB</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Frequencia/Modelo RAM:</td>
                            <td>
                                <select id=tipo_ram name="tipo_ram">
                                    <option value=""></option>
                                    <option value="ddr2 800 Mhz">ddr2 800 Mhz</option>
                                    <option value="ddr3 1333 Mhz">ddr3 1333 Mhz</option>
                                    <option value="ddr3 1600 Mhz">ddr3 1600 Mhz</option>
                                    <option value="ddr4 2000 Mhz">ddr4 2000 Mhz</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Capacidade do HD:</td>
                            <td>
                                <select id=memoria_hd name="memoria_hd">
                                    <option value=""></option>
                                    <option value="320 GB">320 GB</option>
                                    <option value="500 GB">500 GB</option>
                                    <option value="1 TB">1 TB</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Capacidade do SSD:</td>
                            <td>
                                <select id=memoria_ssd name="memoria_ssd">
                                    <option value=""></option>
                                    <option value="120 GB">120 GB</option>
                                    <option value="240 GB">240 GB</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Placa de Video:</td>
                            <td><input type="text" name="placa_video" maxlength="20" size="20" /></td>
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
                            <td><input type="text" name="usuario_totvs" maxlength="20" size="20" /></td>
                        </tr>

                        <tr>
                            <td>Usuario Sankhya:</td>
                            <td><input type="text" name="usuario_sankhya" maxlength="20" size="20" /></td>
                        </tr>

                        <tr>
                            <td>Navegador Sankhya:</td>
                            <td><input type="text" name="navegador_sankhya" maxlength="10" size="10" /></td>
                        </tr>

                        <tr>
                            <td>Padrão do Computador:</td>
                            <td>
                                <select id=padrao name="padrao">
                                    <option value=""></option>
                                    <option value="Novo">Novo</option>
                                    <option value="Antigo">Antigo</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Spiceworks:</td>
                            <td>
                                <select id=spiceworks name="spiceworks">
                                    <option value=""></option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Kaspersky:</td>
                            <td>
                                <select id=kaspersky name="kaspersky">
                                    <option value=""></option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Kaspersky Externo:</td>
                            <td>
                                <select id=kaspersky_externo name="kaspersky_externo">
                                    <option value=""></option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Área de trabalho remota:</td>
                            <td>
                                <select id=rdp name="rdp">
                                    <option value=""></option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>AD:</td>
                            <td>
                                <select id=ad name="ad">
                                    <option value=""></option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Administrador Local:</td>
                            <td>
                                <select id=adm_local name="adm_local">
                                    <option value=""></option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>USB:</td>
                            <td>
                                <select id=usb_gpo name="usb_gpo">
                                    <option value=""></option>
                                    <option value="Liberado">Liberado</option>
                                    <option value="Bloqueado">Bloqueado</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Outros Softwares:</td>
                            <td><textarea name="outros_softwares" rows="5" cols="20" maxlength="50"></textarea></td>
                        </tr>

                        <tr>
                            <td>Termos de Responsabilidade:</td>
                            <td>
                                <select id=termos name="termos">
                                    <option value=""></option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Observações:</td>
                            <td><textarea name="obs" rows="5" cols="20" maxlength="50"></textarea></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                    <div align="center">
                                        <p>
                                            <br />
                                            <input type="submit" name="b1" value="Cadastrar" />
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