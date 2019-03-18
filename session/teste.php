<?php

require_once('classeDados.php');

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
    
    

    $arquivo = fopen ('dados.txt', 'r');
        $tudo = array();

        while(!feof($arquivo)){
            $linha = fgets($arquivo);
            $vet = explode(";",$linha);
            $prod = new Dados($vet[0],$vet[1]);
            array_push($tudo, $prod);

            if ($vet[0]==$usuario and $vet[1]==$email){
                echo "graças a deus funcionou";
            }
            else{
                echo "opora";
            }
        }
        fclose($arquivo);




// Define o limite de tempo do cache em 30 minutos
session_cache_expire(5);
$cache_expire = session_cache_expire();

//  Inicia a sessao
session_start();

//Verifica se existe a variavel usuario na session
if(isset($_SESSION['usuario'])){
    echo "Ja esta registado como $_SESSION[usuario].";
    echo "</br>";
    echo "<a href=teste2.php>link para teste2</a>";
}

//se nao existir a variavel usuario na session
else if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $trimusuario = trim($_POST['usuario']);
    $trimemail = trim($_POST['email']);
    if(!empty($trimusuario)
    && !empty($trimemail)){
        $uname = $_POST['usuario'];
        $email = $_POST['email'];
 		
//criar variaveis na session
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['email'] = $email;
 
        echo "Obrigado por se registar! <br />",
            "Usuario: $uname <br />",
            "Email: $email <br />";
        
        echo "<a href=teste2.php>link para teste2</a>";        
	}
    else {
        echo "Por favor preencha ambos os campos! <br />";
    }
 
}else{
 
?>
<form action="teste.php" method="post">
    <label for="usuario">usuario: </label>
    <input type="text" name="usuario" />
    <label for="email">Email: </label>
    <input type="text" name="email" />
    <input type="submit" value="Registar" />
</form>
 
<?php } ?>