<?php header("Content-type: text/html; charset=utf-8"); ?>
<html>
<head>
<title>Informações do usuário</title>
</head>
<body>
	<h1>Obrigado pelo Cadastro!</h1>
	<img src="images/form.png" alt="some text" width=600 height=400>
	<p>Confira seus dados abaixo -</p>
	<?php
	echo "Nome: ".$_POST['Nome']."<br> país: ".$_POST['País']. "    Nº: ".$_POST['Numero']."<br> Email: ".$_POST['Email']."<br> RG: ".$_POST['RG']."<br> CPF: ".$_POST['CPF'];
	?>
	</body>

</html>