<html>
    <head>
        <meta charset="utf-8">
        <title>Consulta Body Muscles</title>
        <link rel="stylesheet" type="text/css" href="960.css">
        <link rel="stylesheet" type="text/css" href="estiloconsulta.css">
    </head>
<body onload="slide1()">
    <div id="total" class="container_16">
        <script type="text/javascript">
        function formatar(src, mask){
                var i = src.value.length;

                var saida = mask.substring(0, 1);

                var texto = mask.substring(i);

                if (texto.substring(0, 1) != saida) {
                    src.value += texto.substring(0, 1);
                }
            }
        </script>
    <div id="banner" class="grid_14 push_2">
        <img src="image/novalogo.png">
    </div>
    <div id="form" class="grid_10 push_2 prefix_2">
            <form name="consultaUsuario" method="POST" action=".php">
            <table id="tab" cellspacing='0' cellpadding='3'>
                 <tr>
                    <td colspan=4>
                        <h2>
                        Consulta de alunos
                        </h2>
                    </td>
                </tr>
                <tr>
                    <td><b>Nome:</td>
                    <td colspan=3><input type="text" name="nome" size="40"></td>
                </tr>
                <tr>
                    <td><b>Data do nascimento:</td>
                    <td colspan=3><input type="text" name="nascimento" onkeypress="formatar(this, '##/##/####')" placeholder="___/___/___" maxlength="10"></td>
                </tr>
                <tr>
                    <td><b>Data da inscrição:</td>
                    <td colspan=3><input type="text" name="inscricao" onkeypress="formatar(this, '##/##/####')" placeholder="___/___/___" maxlength="10"></td>
                </tr>
                
            </table>
            <div id="processos" class="grid_5 prefix_2">
                <br>
                <input type="submit" value="Pesquisar">
                <input type="reset" value="Limpar">                
                <input type="button" onclick="javascript:window.open('index.php','_parent');" value="Voltar">
            </div>
            </form>
    </div>
    <div id="resultadoconsulta" class="grid_10 push_2 prefix_2">
        <?php 
            aqui entrará o código para imprimir toda a tabela com os resultados da consulta do aluno
            esta tabela permanecerá oculta, somente será vizualizada após consulta do aluno
            ver com RANDELL pois deverá aparecer PRIMEIRAMENTE uma LISTA com NOMES dos ALUNOS consultados para depois ao clicar no nome do aluno
            ai então seus dados serem vizualizados no formulário para modificação/atualização dos dados
        ?>
        <form name="cadastroUsuario" method="POST" action="cadastro.php">
            <table id="tab" cellspacing='0' cellpadding='3'>
                 <tr>
                    <td colspan=4>
                        <h2>
                        Resultado da busca
                        </h2>
                    </td>
                </tr>
                <tr>
                    <td><b>Nome:</td>
                    <td colspan=3><input type="text" name="nome" size="40"></td>
                </tr>
                <tr>
                    <td><b>Data do nascimento:</td>
                    <td colspan=3><input type="text" name="nascimento" onkeypress="formatar(this, '##/##/####')" placeholder="___/___/___" maxlength="10"></td>
                </tr>
                <tr>
                    <td><b>Data da inscrição:</td>
                    <td colspan=3><input type="text" name="inscricao" onkeypress="formatar(this, '##/##/####')" placeholder="___/___/___" maxlength="10"></td>
                </tr>
                <tr>
                    <td colspan=4>
                        <h2>
                        <br>Medidas
                        </h2>
                    </td>
                </tr>
                <tr>
                    <td><b>Altura:</td>
                    <td><input type="text" name="altura" size="5" placeholder="m/cm" maxlength="4" onkeypress="formatar(this, '#.##')"></td>
                    <td><b>Peso:</td>
                    <td><input type="text" name="peso"size="5"placeholder="kg" maxlength="5" onkeypress="formatar(this, '##.##')"></td>
                </tr>
                <tr>
                    <td><b>Cintura:</td>
                    <td><input type="text" name="cintura" size="5" placeholder="m/cm" maxlength="4" onkeypress="formatar(this, '#.##')"></td>
                    <td><b>Torax:</td>
                    <td><input type="text" name="torax"size="5" placeholder="m/cm" maxlength="4" onkeypress="formatar(this, '#.##')"></td>
                </tr>
                <tr>
                    <td><b>Biceps direito:</td>
                    <td><input type="text" name="bicepsd"size="5" placeholder="cm" maxlength="5" onkeypress="formatar(this, '#.##')"></td>
                    <td><b>Biceps esquerdo:</td>
                    <td><input type="text" name="bicepse"size="5" placeholder="cm" maxlength="5" onkeypress="formatar(this, '#.##')"></td>
                </tr>
                <tr>
                    <td><b>Antebraço direito:</td>
                    <td><input type="text" name="antebracod"size="5" placeholder="cm" maxlength="5" onkeypress="formatar(this, '#.##')"></td>
                    <td><b>Antebraço esquerdo:</td>
                    <td><input type="text" name="antebracoe"size="5" placeholder="cm" maxlength="5" onkeypress="formatar(this, '#.##')"></td>
                </tr>
                <tr>
                    <td><b>Coxa direita:</td>
                    <td><input type="text" name="coxad"size="5" placeholder="cm" maxlength="5" onkeypress="formatar(this, '#.##')"></td>
                    <td><b>Coxa esquerda:</td>
                    <td><input type="text" name="coxae"size="5" placeholder="cm" maxlength="5" onkeypress="formatar(this, '#.##')"></td>
                </tr>
                <tr>
                    <td><b>Panturrilha direita:</td>
                    <td><input type="text" name="panturrilhad"size="5" placeholder="cm" maxlength="5" onkeypress="formatar(this, '#.##')"></td>
                    <td><b>Panturrilha esquerda:</td>
                    <td><input type="text" name="panturrilhae"size="5" placeholder="cm" maxlength="5" onkeypress="formatar(this, '#.##')"></td>
                </tr>
                <tr>
                    <td><b>Quadril:</td>
                    <td><input type="text" name="quadril" size="5" placeholder="m/cm" maxlength="5" onkeypress="formatar(this, '#.##')"></td>
                </tr>

                <tr><td></td></tr>
                <tr><td></td></tr>
            </table>
            <div id="processos" class="grid_4 prefix_3">
                <input type="submit" value="Atualizar dados">
            </div>
            </form>
        <?php
        aqui termina o código php para imprimir o formulário com os dados da consulta do aluno
        ?>
    </div>
    <div id="rodape" class="grid_16">
        <b>
            Rua Alagoas, 1224, Demócrito Rocha
            <br>
            (85) 3021-1968 / (85) 8682-5124
            <br>
            Ximenes - Personal Trainer
        </b>
        <br>
        <font color="lightgray" size="2">
        Copyright © 2015 BodyMuscless. Todos os direitos reservados.
        </font>
    </div>

</div>
</body>
</html>