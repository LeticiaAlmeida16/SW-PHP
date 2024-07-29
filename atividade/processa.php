<?php
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if($login == "leticia2008" && $senha == 12345678){
        echo "Seja bem-vindo, $nome";
    }
    else{
        echo "Usuário não encontrado :(";
    }

?>