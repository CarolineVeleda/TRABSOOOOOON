

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<?php

$usuario = $_POST["usuario"];
$email = $_POST["email"];

$filepath = "/home/aluno/Área de Trabalho/session";
	$filename = $filepath."/dados.txt";
    $mode = "a+";
    
    $arquivo = fopen($filename,$mode);
	$quebra="\n";


	if ($arquivo) {
		if (fwrite($arquivo, ($usuario.';'.$email.';'.$quebra))) {
			//echo "<br />escrita realizada com sucesso<br />";
			fclose($arquivo);				
		}
    }
    

    if (file_exists($arquivo)) {
		//echo "arquivo existente";
	} else {
		//echo "arquivo não existente";
	}


?>
	
</body>
</html>