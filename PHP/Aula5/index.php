<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tabuada do 7 utilizando for</h2>
    <?php
    $num= 7;
    for ($i = 0; $i <= 10; $i++)
    {
        echo "$num x $i = ".$num * $i. "<br>";
    }
    ?>
    <h2>Foreach</h2>
    <?php
        $carro = array("fusca", "Brasilia","kombi", "Uno com escada", "Fiat 147");

        foreach ($carro as $x) {
            echo "$x <br>";
        }
    ?>
    <h2>Forech com array associativo</h2>
    <?php
        $alunos = array (
            "joão" => 8.5,
            "Maria" => 9.0,
            "Pedro" => 7.5,
            "Ana" => 10.0,
            "Carlos" => 6.0,
        );
        foreach ($alunos as $nome => $nota) {
            echo "$nome tirou nota:
            $nota<br>";
        }
        var_dump($alunos);
    ?>
    <br><br><a href="formulario.html">Formulario</a>
</body>
</html>