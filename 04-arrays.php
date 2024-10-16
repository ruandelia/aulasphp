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
        $cores = ['rosa','roxo','verde','azul','preto'];
        ?>

        <h2>acessando os dados da array</h2>
        <p>alunos : <?=$alunos[2]?> </p>
        <p>a cor que eu escolho é : <?=$cores[2]?></p>

    </div>






</body>

</html>