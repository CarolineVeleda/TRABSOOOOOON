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

    require_once('classeDados.php');

        $arquivo = fopen ('produtos.txt', 'r');
        $tudo = array();
        echo 'LISTA COMPLETA: '.'<br><br><br>';

        while(!feof($arquivo)){
            $linha = fgets($arquivo);
            $vet = explode(";",$linha);
            $prod = new Produto($vet[0],$vet[1],$vet[2],$vet[3]);
            array_push($tudo, $prod);

            echo 'CÓDIGO : '.$vet[0].'<br>';
            echo 'NOME: : '.$vet[1].'<br>';
            echo 'QUANTIDADE : '.$vet[2].'<br>';
            echo 'PREÇO : '.$vet[3].'<br><br><br><br>';
               
        }
        fclose($arquivo);
       
        echo   '------------------------'.'<br><br><br>';

        $pos = 0;
        $maior = 0;
        for ($i = 0; $i<count($tudo); $i++){
            if ($maior < $tudo[$i]->getpreco()){
                $maior = $tudo[$i]->getpreco();
                $pos = $i;
            }
        }
        echo 'O produto de maior preço é : '.$tudo[$pos]->getnome().'<br>';
        echo " Valor: R$ ".$tudo[$pos]->getpreco().'<br>';
        echo "Código: ".$tudo[$pos]->getcod().'<br>';
        echo "Quantidade: ".$tudo[$pos]->getquant().'<br><br><br>';
       

        $pos1 = 0;
        $maior = 0;
        for ($i = 0; $i<count($tudo); $i++){
            if ($maior < $tudo[$i]->getquant()){
                $maior = $tudo[$i]->getquant();
                $pos1 = $i;
            }
        }

        echo 'O produto de maior quantidade é : '.$tudo[$pos1]->getnome().'<br>';
        echo " Valor: R$ ".$tudo[$pos1]->getpreco().'<br>';
        echo "Código: ".$tudo[$pos1]->getcod().'<br>';
        echo "Quantidade: ".$tudo[$pos1]->getquant().'<br><br><br>';
        
        
        $pos2 = 0;
        $maior = 0;

        
        for ($i = 0; $i<count($tudo); $i++){
            if ($maior < ($tudo[$i]->getquant() * $tudo[$i]->getpreco())){
                $maior = ($tudo[$i]->getquant() * $tudo[$i]->getpreco());
                $pos2 = $i;
            }
        }
        
        echo "O produto que possui o maior valor bruto é R$".$tudo[$pos2]->getnome().'<br>'; 
        echo "Valor Bruto: R$ ".$maior.'<br>';
        echo "Código: ".$tudo[$pos2]->getcod().'<br>';
        echo "Quantidade: ".$tudo[$pos2]->getquant();


        '<br><br><br><br>'


    ?>

</body>
</html>