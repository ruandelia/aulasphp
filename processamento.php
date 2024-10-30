<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>processamento dos dados vindos do formulário HTML</h1>
    <hr>

<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$nascimento = $_POST['nascimento'];
$mensagem = $_POST['mensagem'];

// se um dos campos obrigatórios estiver vazio
if( empty($nome) || empty($email) ){
?>
    <p class="alert alert-danger">Você  DEVE preencher <b>NOME</b> e <b>E-MAIL</b></p>
<?php
} else{
?>

<h2>Dados recebidos</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
    
        <li>Email: <?=$email?></li>
        <!-- Verficando se $nascimento NÃO esta vazio -->
        <?php
        if( !empty($nascimento) ){
        ?>
        <li>Nascimento: <?=$nascimento?></li>
        <?php }?>
        
        <?php 
        if( !empty($mensagem) ){
        ?>
        <li>Mensagem: <?=$mensagem?></li>
        <?php }?>
    
    </ul>

<?php
}
?>
</body>
</html>