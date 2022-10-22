<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>
<body>

<div class="quadro">
    <h1>Formulario</h1>

    <?php
    if(!isset($_POST['submit'])){
    ?>
 <form action="back.php" method="post">
    <p>Informe seu nome:</p>
    <input type="text" name="nome" id="nome">

    <br> <hr>

    <p>Informe seu gênero:</p>
    <input type="radio" name="genero" id="genero" value="masculino">
    <label for="genero">Masculino</label>
    <br>

    <input type="radio" name="genero" id="genero" value="feminino">
    <label for="genero">Feminino</label>
    <br>

    <input type="radio" name="genero" id="genero" value="info">
    <label for="genero">Prefiro não informar</label>
    <br>

    <p>Informe sua data de nascimento:</p>
    <input type="date" name="data" id="data" max="9999-12-31">
    <br> <hr>

    <p>Informe seu número de telefone:</p>
    <input type="tel" name="telefone" id="telefone" required placeholder="(99) 99999-9999" maxlength="14">
    <br> <hr>

    <p>Informe seu email:</p>
    <input type="text " name="email" id="email" required placeholder="abcdefgh@gmail.com">
    <br>

    <input type="submit" value="Enviar" id="botao">
    
 
    </form>

    </div>
    
    <?php 
    }
    ?>
</body>
</html>