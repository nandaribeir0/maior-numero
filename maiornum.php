<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado:</title>
</head>

<body>
    <header>
        <h1>maior número</h1>
    </header>
    <main>
        <?php
        $Valor1 = $_GET["Valor1"];
        $Valor2 = $_GET["Valor2"];
        $Valor3 = $_GET["Valor3"];
        if ($Valor1 > $Valor2 && $Valor1 > $Valor3) 
        {
            echo "<p>O maior valor é $Valor1";
        } 
        else if ($Valor2 > $Valor1 && $Valor2 > $Valor3)
        {
            echo "<p>O maior valor é $Valor2";
        } 
        else if ($Valor3 >= $Valor1 && $Valor3 >= $Valor2)
            echo "<p>O maior valor é $Valor3"
        else
        {
            echo "<p>Os valores são iguais!!";
        }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>

</html>