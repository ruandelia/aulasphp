<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 30px;

        }

        li:nth-child(even) {
            color: red;
        }

        li:nth-child(odd) {
            color: blue;
        }
    </style>
</head>

<body>



    <ol>

        <?php
        $meses = [
            "janeiro",
            "fevereiro", 
            "março", 
            "abril", 
            "maio", 
            "junho", 
            "julho", 
            "agosto", 
            "setembro", 
            "outubro", 
            "novembro", 
            "dezembro"
        ];

        foreach ($meses as $mes) {
        ?>
            <li> Mês: <?= $mes ?></li>
        <?php
        }
        ?>
    </ol>


</body>

</html>