<?php include "recursos-externos.php";?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão HTML e PHP</title>
    <!-- adicionando o bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        .nomeC{
           color: lightblue;
        }

        .idadeC{
            background-color: red;
        }

    </style>
</head>
<body>
    
    <h1>Revisando tudo que foi passado nas ultimas aulas. </h1>
    <hr>

    <hr>
    <ul>
        <?php foreach($tecnologias as $tecnologia){?>
            <li><?=$tecnologia?></li>
        <?php
    }?>
    </ul>
    <?php
    // criando variáveis e/ou constantes
    const NOME = "Chapolin Colorado";
    $idadeChapolin = 17;
    $idadeChapolin = $anofiscal
    
    /*exibir no HTML uma frase da seguinte forma */
    //olá! meu é Chapolin Colorado e tenho 25 anos.
    /* */
    ?>

   

    <h2>olá! meu <span class="text-danger bg-danger-subtle">nome</span> é <span class="nomeC"><i><?=NOME?></i></span> <span style='color:ligrey'>e</span> tenho <span class="idadeC"><?=$idadeChapolin?></span> anos.</h2>

        <p class="qualquer" style="color: pink;">Qualquer coisa</p>

    
        
   
</body>
</html>