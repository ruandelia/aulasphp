<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 (formulário)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <style> 
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1{
            text-align: center;
            padding: 30px;
        }
        form{
            width: 70vw;
            background-color: lightblue;
            text-align: center;
            padding: 30px;
            border-radius: 20px 20px;
        }
        .formu{
            display: flex;
            justify-content: center;
            
        }
        form p{
            margin-top: 20px;
            font-size: 30px;
        }
        form input{
            padding: 10px;
            border-radius: 10px 10px;
            border: 2px solid black;
        }
        #descricao{
            font-size: 24px;
        }

        #fabricante{
            background-color: lightblue;
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <h1>Exercício 04 (formulário)</h1>
    <hr>

    <div class="formu">

    <!-- LEMBRAR DE TIRAR O TARGET= BLANK -->
    <form autocomplete="off" action="exercicio04-processamento.php" method="post" target="_blank">
        <p>
            <label for="produto">Produto:</label>
            <input required type="text" name="produto" id="produto">
        </p>

        <p>
            <label for="fabricante">Fabricante:</label>
            <select name="fabricante" id="fabricante">
                <option value=""></option>
                <!-- não apague este <option> vazio -->
                <?php
                $fabricantes = [
                    "HP",
                    "Microsoft",
                    "Samsung",
                    "LG"
                ];
                foreach ($fabricantes as $fabricante) {
                ?>
                    <option value="<?= $fabricante ?>"><?= $fabricante ?></option>
                <?php
                }
                ?>
                <!-- Faça aqui a programação necessária para obter os dados de um array (criado por você) e colocá-los (cada um) dentro de uma tag <option>. -->

            </select>
        </p>

        <p>
            <label for="preco">Preço:</label>
            <input required type="number" name="preco" id="preco" min="100" max="10000" step="0.01">
        </p>

        <p>
            <label for="descricao">Descrição:</label><br>
            <textarea name="descricao" id="descricao" cols="30" rows="6"></textarea>
        </p>

        <button type="submit" name="enviar">Enviar dados</button>
    </form>
    </div>
</body>

</html>