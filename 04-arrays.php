<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>arrays no PHP</h1>
        <hr>

        <?php
        // array númerico/tradicional
        $alunos = ['ruan', "rafa", 'couto', 'rocha'];
        $cores = array('rosa', 'roxo', 'verde', 'azul', 'preto');
        ?>

        <h2>acessando os dados da array</h2>
        <p>alunos : <?= $alunos[2] ?> </p>
        <p>a cor que eu escolho é : <?= $cores[2] ?></p>
        <hr>

<?php
//array associativo
$filme = [
    "nome" => "ruan",
    "idade"  => 17,
    "bairro" => "itaquera",
    "genero" => "masculino"
 
];
?>
    <h2>acessando os dados associativo</h2>
    <hr> 
    <p><br>nome do cliente : <?=$filme['nome']?><br> idade : <?= $filme['idade']?><br>gênero : <?= $filme['genero']?><br>bairro : <?=$filme['bairro']?></p> 
    

    <ul>Comandos úteis para análise de arrays
    <li>print_r</li>
  <pre> <code> <?= print_r($alunos)?></code></pre>
    <li>var_dump(nomearray)</li>
    
    <pre><code><?= var_dump($alunos)?></code></pre>
    </ul>


    </div>





</body>

</html>