<?php
    //verificar se está logado
    session_start();

    $existe = isset($_SESSION['esta_logado']);

    if($existe == false){
        //redirecionar
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

	<div class="social">

		<a href="verifica_usuario.php?acao=sair" class="sair">sair</a>

		<img src="https://19818-presscdn-pagely.netdna-ssl.com/wp-content/uploads/58b/95/b98f09c1026f0163228e70098bc72518.jpg" alt="" width="200" height="200">
		<h3>Bem vindo!</h3>
	</div>

</body>
</html>