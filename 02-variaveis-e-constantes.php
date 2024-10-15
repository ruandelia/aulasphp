<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>
</head>
<body>
    <h1>aprendendo variáveis constantes com PHP</h1>
    <hr>
    <h2>Declaração e saída usando echo</h2>

<!-- abrindo -->
    <?php

//variáveis
$curso = "Programador Web";
$ano = 2024;
$area = "back-end";

//objetivo :
// Estamos no Programador Web em 2024 area  de back-end

echo "<p>Estamos no $curso em $ano na area de $area </p>";

//constantes 

define("AUTOR", "tiago"); // tradicional, antiga
const EMPRESA = "ABC tecnologia"; //nova, modern

echo  "<p>"."o ".AUTOR." trabalha na ".EMPRESA."</p>"
?>
 <!-- fechando -->
</body>
</html>