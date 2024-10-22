<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercio 01</title>
    <style>
        ol{
            font-size: 44px;
        }
        li{font-size: 22px;}
    </style>
</head>
<body>
    <h1>exercicio 01</h1>
<?php
$dados = [
    'nome' => 'ruan',
    'senha' => '123teste',
    'idade' => 17,
    'cidade' => 'são paulo',
   'telefones' => ['11 123456789','11 123487289']
]


?>    






 <ol> dados :
    <li>nomes : <?=$dados['nome']?></li>
    <li>senha : <?=$dados['senha']?></li>
    <li>idade : <?=$dados['idade']?></li>
    <li>cidade : <?=$dados['cidade']?></li>
    <li>telefone 1 : <?=$dados['telefones'][0]?></li>
    <li>telefone 2 : <?=$dados['telefones'][1]?></li>


<!-- - Nome de usuário (exemplo: chapolin.colorado)
- Senha (exemplo: 123teste)
- Idade (exemplo: 30)
- Cidade (exemplo: São Paulo)
- Telefones (exemplo: 11-2135-0300 e 11-91234-5678)
 
Obs.: no caso dos telefones, use um Array para guardar os dois valores. -->
</body>
</html>