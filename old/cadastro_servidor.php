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
<center>
    <h3>Cadastrar Servidor</h3>
    <br>
</center>
    <form action="proc_cadastro_servidor.php" method="post">

        <div class="tabs-container">

            <!-- ABA 1 DADOS BASICOS -->
            <input type="radio" name="tabs" class="tabs" id="dados_basicos" checked=checked />
            <label for="dados_basicos">Dados Basicos</label>
            <div>
                <center>
                    <table width="600" height="210" align="left" border="0" cellspacing="0" class="tabela">
                                                <br>
                        <tr>
                        <tr>
                            <td>Status:</td>
                                <td>
                                <select id=status name="status_srv">
                                    <option value=""></option>
                                    <option value="Ativo">Ativo</option>
                                    <option value="Inativo">Inativo</option>
                                </select>
                            </td>
                        </tr>
                        </tr>

                        <tr>
                            <td>Filial:</td>
                                <td>
                                <select id=filial name="filial_srv">
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
                            </td>
                        </tr>

                        <tr>
                            <td>Tipo de Servidor:</td>
                            <td>
                                <select id=tipo_srv name="tipo_srv">
                                    <option value=""></option>
                                    <option value="Ad Primario">Ad Primario</option>
                                    <option value="Ad Secundario">Ad Secundario</option>
                                    <option value="File Server">File Server</option>
                                    <option value="Kaspersky">Kaspersky</option>
                                    <option value="Sistema">Sistema</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Descrição:</td>
                            <td><input type="text" name="descricao_srv" maxlength="30" size="30" /></td>
                        </tr>

                        <tr>
                            <td>Hostname:</td>
                            <td><input type="text" name="hostname_srv" maxlength="30" size="30" /></td>
                        </tr>

                        <tr>
                            <td>Dominio:</td>
                            <td><input type="text" name="dominio_srv" maxlength="20" size="20" /></td>
                        </tr>

                        <tr>
                            <td>IP Interno:</td>
                            <td><input type="text" name="ip_interno_srv" maxlength="15" size="15" /></td>
                        </tr>

                        <tr>
                            <td>IP Externo:</td>
                            <td><input type="text" name="ip_externo_srv" maxlength="15" size="15" /></td>
                        </tr>

                        <tr>
                            <td>Usuario:</td>
                            <td><input type="text" name="usuario_srv" maxlength="15" size="15" /></td>
                        </tr>

                    </table>
                </center>
            </div>

            <!-- ABA 2 CONFIGURAÇÕES -->
            <input type="radio" name="tabs" class="tabs" id="Configurações" />
            <label for="Configurações">Configurações</label>
            <div>
                <center>
                    <table width="700" height="200" align="left"  border="0" cellspacing="0" class="tabela">
                        <br>
                        <tr>
                            <td>Sistema Operacional:</td>
                            <td>
                                <select id=so_srv name="so_srv">
                                    <option value=""></option>
                                    <option value="Windows Server 2008 Standard">Windows Server 2008 Standard</option>
                                    <option value="Windows Server 2008 Standard R2">Windows Server 2008 Standard R2</option>
                                    <option value="Windows Server 2012 Standard">Windows Server 2012 Standard</option>
                                    <option value="Windows Server 2016 Standard">Windows Server 2016 Standard</option>
                                    <option value="Windows 7 Pro">Windows 7 Pro</option>
                                    <option value="SQL Server 2012 Standard">SQL Server 2012 Standard</option>
                                    <option value="SQL Server 2012 Standard Core">SQL Server 2012 Standard Core</option>
                                    <option value="Linux">Linux</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Processador:</td>
                            <td><input type="text" name="processador_srv" maxlength="40" size="40" /></td>
                        </tr>

                        <tr>
                            <td>Memorai RAM:</td>
                            <td>
                                <select id=ram_srv name="ram_srv">
                                    <option value="4 Gb">4 Gb</option>
                                    <option value="8 Gb">8 Gb</option>
                                    <option value="12 Gb">12 Gb</option>
                                    <option value="16 Gb">16 Gb</option>
                                    <option value="32 Gb">32 Gb</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Memorai RAM:</td>
                            <td>
                                <select id=frequencia_ram_srv name="frequencia_ram_srv">
                                    <option value="ddr2 600">ddr2 600</option>
                                    <option value="ddr2 800">ddr2 800</option>
                                    <option value="ddr3 1300">ddr3 1300</option>
                                    <option value="ddr3 1600">ddr3 1600</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Raid:</td>
                            <td>
                                <select id=raid_srv name="raid_srv">
                                    <option value=""></option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Primeiro HD:</td>
                            <td>
                                <select id=primeiro_hd_srv name="primeiro_hd_srv">
                                    <option value="100 Gb">100 Gb</option>
                                    <option value="250 Gb">250 Gb</option>
                                    <option value="500 Gb">500 Gb</option>
                                    <option value="1 Tb">1 Tb</option>
                                    <option value="2 Tb">2 Tb</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Segundo HD:</td>
                            <td>
                                <select id=segundo_hd_srv name="segundo_hd_srv">
                                    <option value=""></option>
                                    <option value="100 Gb">100 Gb</option>
                                    <option value="250 Gb">250 Gb</option>
                                    <option value="500 Gb">500 Gb</option>
                                    <option value="1 Tb">1 Tb</option>
                                    <option value="2 Tb">2 Tb</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Terceiro HD:</td>
                            <td>
                                <select id=terceiro_hd_srv name="terceiro_hd_srv">
                                    <option value=""></option>
                                    <option value="100 Gb">100 Gb</option>
                                    <option value="250 Gb">250 Gb</option>
                                    <option value="500 Gb">500 Gb</option>
                                    <option value="1 Tb">1 Tb</option>
                                    <option value="2 Tb">2 Tb</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Fortinet:</td>
                            <td>
                                <select id=fortinet_srv name="fortinet_srv">
                                    <option value=""></option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Modelo:</td>
                            <td>
                                <select id=modelo_srv name="modelo_srv">
                                    <option value=""></option>
                                    <option value="30 D">30 D</option>
                                    <option value="50 D">50 D</option>
                                    <option value="60 D">60 D</option>
                                    <option value="100 D">100 D</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>DHCP:</td>
                            <td>
                                <select id=dhcp_srv name="dhcp_srv">
                                    <option value=""></option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Cobian:</td>
                            <td>
                                <select id=cobian_srv name="cobian_srv">
                                    <option value=""></option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Spiceworks:</td>
                            <td>
                                <select id=spiceworks_srv name="spiceworks_srv">
                                    <option value=""></option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Kaspersky Slave:</td>
                            <td>
                                <select id=kaspersky_slave_srv name="kaspersky_slave_srv">
                                    <option value=""></option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Ativação:</td>
                            <td>
                                <select id=ativacao_srv name="ativacao_srv">
                                    <option value=""></option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>Observações:</td>
                            <td><textarea name="obs_srv" rows="5" cols="40" maxlength="100"></textarea></td>
                        </tr>

                        <tr>
                            <td>
                            </td>
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