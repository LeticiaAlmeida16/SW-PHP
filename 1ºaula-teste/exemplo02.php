<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXEMPLO DE HTML COM PHP</title>
</head>
<body>
    <h1>Teste de PHP</h1>

    <?php
        //aspas duplas para tags html dentro do php
        echo "<li>Hello world!</li>";
        echo "Vamos começar <br></br>";

        //variavel no php usa $
        $nome = "Lelê";
        echo $nome;
        echo "<br>";
        echo "Seu nome é : $nome <br>";
        echo "Seu nome é : " . $nome ;

        //outra opção de mostrar
        //echo "$nome";

        //mostra nome nao O NOME
        //echo '$nome';

    ?>
</body>
</html>