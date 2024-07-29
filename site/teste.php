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
?>