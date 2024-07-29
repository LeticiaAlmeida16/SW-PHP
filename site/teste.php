<?php
    $nome = "LeTiCiA";
    // deixa a variavel tudo em minusculo
    $nome = strtolower($nome);

    if($nome == 'LETICIA' || 'Leticia' || 'leticia'){
        echo "Bom dia, $nome.";
    }
    else{
        echo "Usuário não encontrado :(";
    }

    echo"<hr>";

    $num;
    //enquanto a variavel do meio estiver sendo verdadeira, irá rodar
    for($num = 1; $num <= 10; $num++){
        //se o numero for dividido por 2 e o resto for 0, aparece so os pares
        if($num % 2 == 0){
        echo "O Valor do número é $num <br>";
        }else{
            echo "Impar <br>";
        }
    }
    echo"<hr>";

    $a = 1;
    while($a <=10){
        echo $a . "<br>";
        $a = $a + 1;
    }


?>