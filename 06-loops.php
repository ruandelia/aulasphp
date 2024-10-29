<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops no PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        h3, p, h4, h2{
            margin-bottom: 40px;
        }
    </style>

</head>
<body>
    <div class="container">
        <h1>Loops (ou laços de repetição)</h1>
        <hr>

        <h2>Tradicionais: while, for, do/while</h2>
        <hr>

        <h3>While</h3>
<?php
   $i = 1;
    while($i <= 3){
   ?>
    <p>Senac penha - <?=$i?></p>
<?php
//atualizando/incrementando a variável
        $i++;
   }
?>
    <hr>
        <h3>For</h3>
        <hr>

<?php
for($i = 1; $i <= 2; $i++){
?>
    <div>
        <h4>Cachorro <?=$i?></h4>
        <img src="https://fastly.picsum.photos/id/237/200/300.jpg?hmac=TmmQSbShHz9CdQm0NkEjx1Dyh_Y984R9LpNrpvH2D_U">
    </div>
<?php
}
?>
        <hr>
        <h3>Loop tradicional para acessar Arrays</h3>
        
<?php
$alunos = ["roney", "adriano", "maria", "silas"];
for( $i = 0; $i < count($alunos); $i++ ){
?>
    <p class="alert alert-success">
        <?=$alunos[$i]?>
    </p>
<?php
}
?>

        <hr>
        <h2>Específico: foreach</h2>
        
<?php
foreach( $alunos as $aluno){
?>
    <p class="alert alert-danger"> 
        <?=$aluno?>
    </p>
<?php
}
?>
    </div>
</body>
</html>