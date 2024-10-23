<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        *{
            font-size: 25px;
        }
    </style>

</head>
<body>
    <div class="container">
    <h1>Exercício dos salarios.</h1>
    <hr>
   <?php
   $salario = 170000;
   /*$salario15 =  $salario * 1.15;
   $salario10 = $salario * 1.10;
   $salario5 = $salario * 1.05; */ 
   

   if($salario < 500){
    $novoSalario = $salario * 1.15;
   /* echo "<p>Salario antigo: R$$salario<br>Salario reajustado: R$$salario15.</p>";*/
   } elseif($salario <= 1000){
    $novoSalario = $salario * 1.10;
   /* echo "<p>Salario antigo: R$$salario<br>Salario reajustado: R$$salario10.</p>";*/
   } else{
    $novoSalario = $salario * 1.05;
   /* echo "<p>Salario antigo : R$$salario<br>Salario reajustado : $salario5</p>";*/
   }
?> 

   <p>Salário antigo: <strong>R$<?=number_format($salario, 2, ",", ".")?></strong></p>
   <hr>
   <p>Salário reajustado: <strong>R$<?=number_format($novoSalario, 2, ",", ".")?></strong></p>
    </div>
</body>
</html>


