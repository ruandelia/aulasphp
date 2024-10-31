<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 (Dados)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h1>Exercício 04 (dados/processamento)</h1>
<hr>

<!-- Faça a partir daqui a programação
necessária para obter os dados vindos do formulário
e mostrá-los usando elementos HTML (da forma que você quiser). -->
<?php
$produto = $_POST["produto"];
$fabricante = $_POST["fabricante"];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
?>

<!-- // Solução do professor ::
// $campos = [
//     'produto' => $_POST['produto'] ?? '',
//     'fabricante' => $_POST['fabricante'] ?? '',
//     'preco' => $_POST['preco'] ?? '',
//     'descricao' => $_POST['descricao'] ?? ''
// ];


// // Verifica se algum campo está vazio
// if (count(array_filter($campos)) < count($campos)) {
//     // Mensagem de erro
//     die("Volte e preencha tudo");
// } else {
//     die("passsou");
// }

//  -->

<ul>
    <?php
    if(empty($produto)){
    ?>
        <p class="alert alert-danger">O espaço "produto" é obrigatório.</p>
    
    <?php
    } elseif ( empty($preco)){
    ?>
        
        <p class="alert alert-danger">O espaço "Preço" é obrigatório.</p>
    
    
    <?php
    } else {
    ?>
    <h2>Dados recebidos:</h2>
    <li><?=$produto?></li>
    <li><?=$fabricante?></li> 
    <li>R$<?=number_format($preco, 2,",", ".")?></li>
    <li><?=$descricao?></li> 
    <?php
    }
    ?>

</ul>
</body>
</html>