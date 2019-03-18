<?php
//iniciar a session
session_start();

//imprimir conteudo da session
echo "Conteudo da session";
echo "<br>";
print_r($_SESSION);
echo "</br>";

$_SESSION['qualquer'] = "x";

?>
<html>
	<body>
		<a href="teste3.php">Sair</a>
	</body>
</html>