<meta charset="utf-8">
<?php
	$nome = $_POST['nome'];
	$nascimento = $_POST['nascimento'];
	$inscricao = $_POST['inscricao'];
	$altura = $_POST['altura'];
	$peso = $_POST['peso'];
	$cintura = $_POST['cintura'];
	$torax = $_POST['torax'];
	$bicepsd = $_POST['bicepsd'];
	$bicepse = $_POST['bicepse'];
	$antebracod = $_POST['antebracod'];
	$antebracoe = $_POST['antebracoe'];
	$coxad = $_POST['coxad'];
	$coxae = $_POST['coxae'];
	$panturrilhad = $_POST['panturrilhad'];
	$panturrilhae = $_POST['panturrilhae'];
	$quadril = $_POST['quadril'];
	
	/*
	CONEXÃO - ESSE CÓDIGO PODE PERMANECER AQUI OU MELHOR DEIXÁ-LO EM UM ARQUIVO PHP SEPARADO??
	$con = mysql_pconnect('localhost','root','aluno');
	mysql_select_db(academia,$con);
	$econ = mysql_close();
	*/
?>

<html>
	<head>
		<title>Cadastro concluído</title>
		<link rel="stylesheet" type="text/css" href="960.css">
		<link rel="stylesheet" type="text/css" href="estilocadastro.css">
	</head>
<body>
		<div id="cabecalho">
			<h1>
				<font color="white">
				<b>Cadastro confirmado</b>
				</font>
			</h1>
		</div>
		<div id="conteudo">
			<?php echo "O aluno ".$nome." foi inscrito no dia ".$inscricao."." ?>
			<br>
			<input type="button" onclick="window.print();" value="Imprimir">
	
			<input type="button" onclick="window.location.href='index.php'" value="Voltar">

			<input type="button" onclick="javascript:window.open('consulta.php','_parent');" value="Consulta">
		</div>
</body>
</html>