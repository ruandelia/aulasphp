<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com processamento</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
        .nome{
            text-transform: capitalize;
        }
    </style>
</head>
<body>
    <h1>Formulário e processamento juntos</h1>
    <hr>

<?php

use function PHPSTORM_META\type;

if( isset($_POST["continuar"])){ 
    $nome = $_POST['nome']
?>    
    <h2>Bem-vindo(a), <span class="nome"><?=$nome?></span>! 😁</h2>
<?php
} else{
?>

    <!-- LEMBRAR DE TIRAR O TARGET=BLANK -->
<!-- action vazio poruque o php vai no mesmo arquivo -->
    <form action="" method="post" autocomplete="on" target="_blank">
        <label for="nome">Nome:</label>
        <input required type="text" name="nome" id="nome" placeholder="Didite seu nome completo...">
        <button name="continuar" id="continuar" type="submit">Continuar</button>
    </form>
<?php
}
?>
</body>
</html>