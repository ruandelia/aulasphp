<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concionais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Aprendendo Concionais No PHP</h1>
        <p><i>(Versão refatorada)</i></p>
        <hr>

        <h2>Condicional Simples :</h2>


        <?php
        $numero = 500;

        if ($numero >= 100) {
            echo  '<p>o valor da variavel é $numero</p>';
        }
        ?>
        <hr>

        <h2>condicional composta</h2>
        <hr>

        <?php
        // controle de estoque
        $produto = 'tv';
        $qtdEmEstoque = 5; //o que temos no momento
        $qtdCritica = 2; // minímo necessário
        ?>

        <h3>Produto: <?= $produto ?></h3>
        <p><strong>Estoque:</strong> <?= $qtdEmEstoque ?></p>

        <?php
        /* Se a quantidade em estoque for abaixo da quantidade Critica, o sistema deve avisar e pedir pra repor. */
        if ($qtdEmEstoque < $qtdCritica) {
        ?>
            echo '<p class="alert alert-danger">Repor esta merda</p>';
        <?php
        } else {
        ?>
            <!-- Caso contrário, simplesmente avisar que o estoque está normal.*/ -->
            <p class="alert alert-success">Estoque Normal</p>
        <?php }
        ?>

        <hr>

        <h2>Condicional ENCADEADA</h2>
        <?php
        /* Verificando o produto e determinando diferentes períodos de garantia (em anos).*/

        if ($produto == 'ultrabook') {
            $garantia = 5;
        } elseif ($produto == 'geladeira') {
            $garantia = 3;
        } elseif ($produto == 'tv') {
            $garantia = 2;
        } else {
            $garantia = 1;
        }
        ?>

        <p><?= $produto ?> tem garantia de <strong><?= $garantia ?> anos</strong></p>
        <hr>
        <h2>Condicional encadeada usando switch/case</h2>
        <?php
        switch ($produto) {
            case "utrabook":
                $garantiab = 4;
                break;
            case "geladeira":
                $garantiab = 2;
                break;
            case "tv":
                $garantiab = 1;
                break;
            default:
                $garantiab = 0;
                break;
        }
        ?>
        <p><?= $produto ?> tem garantia de <strong><?= $garantiab ?> anos</strong></p>

    </div>
</body>

</html>