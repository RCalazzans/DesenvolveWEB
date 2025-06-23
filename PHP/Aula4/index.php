<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4</title>
</head>
<body>
    <?php
    $traco = 
    "<br>=====================================================<br>";
    echo "<h2>Operadores de Comparação</h2>";
    //operadores de comparação
    /* ==Igual,
    != Diferente,
    === Identico,
    !== Não Identico,
    >Maior que,
    <Menor que,
    >= Maior ou Igual,
    <= Menor ou Igual*/
    $x = 5;
    $y = 0;
    echo "<strong>== Igual </strong><br>";
    var_dump($x == $y);
    echo "<br> != Diferente<br>";
    var_dump($x != $y);
    echo "<br><strong> == Identico</strong><br>";
    var_dump($x === $y);
    echo "<br><strong> !== Não Identico</strong><br>";
    var_dump($x !== $y);
    echo "<br><strong> > Maior que </strong><br>";
    var_dump($x > $y);
    echo "<br><strong> < Menor que </strong><br>";
    var_dump($x < $y);
    echo "<br><strong> >= Maior ou igual </strong><br>";
    var_dump($x >= $y);
    echo "<br><strong> <= Menor ou igual </strong><br>";
    var_dump($x <= $y);
    echo $traco;
    echo "<h2>Inserir Caracteres Unicode</h2>";

    echo "\u{1F47E}";
    echo "<br>";
    echo '\u{1F47E}';
    echo $traco;
    echo "<h2>Operadores Logicos </h2>";
    echo "<p><strong>&& (E) </strong></p><br>";
    $a = true;
    $b = false;
    var_dump($a && $b);
    echo "<p><strong>|| (OU) </strong></p><br>";
    $a = true;
    $b = false;
    var_dump($a || $b);
    //Exemplo
    $numero1 = 5;
    $numero2 = 10;
    if (($numero1) > 5 && ($numero2 < 11))
    {
        echo " ";
    } else {
        echo "<br><br> Uma das duas condiçoes é falsa";
    }
    echo $traco;
    echo "<h2>Operadores de Atribuição</h2>";
    echo "<strong> +=, -=, *=, /=, %=</strong>";
    echo "<br>".$numero1 += $numero2; // $numero1 = $numero 1 + numero2
    $numero1 = 5;
    $numero = 10;
    echo "<br>".$numero1 -= $numero2; // $numero1 = $numero 1 - numero2
    $numero1 = 5;
    $numero = 10;
    echo "<br>".$numero1 *= $numero2; // $numero1 = $numero 1 * numero2
    $numero1 = 5;
    $numero = 10;
    echo "<br>".$numero1 /= $numero2; // $numero1 = $numero 1 / numero2
    $numero1 = 5;
    $numero = 10;
    echo "<br>".$numero1 %= $numero2; // $numero1 = $numero 1 % numero2
    echo $traco;
    echo "<h2>Função para gerar Numeros Aleatorios<h2>";
    echo "<br>".rand(1,6);
    echo "<br>".rand();
    echo$traco;
    echo "<h2> Outras funçoes em PHP</h2>";
    echo "<p><strong>abs()</strong> - Valor absoluto</p>";
    $numero1 = 5;
    $numero = 10;
    echo abs ($numero1 -= $numero2); //$numero1 = $numero2 - $numero2
    echo "<p><strong>base_convert()</strong> - Conversor de base entre numeros</p>";
    $binario = "1010";
    echo $decimal = base_convert($binario, 2, 10);
    echo "<p><strong>ceil()</strong> - Arredondar para cima</p>";
    $arrendodarCima = 3.2;
    echo ceil ($arrendodarCima);
    echo "<p><strong>floor()</strong> - Arrendondar para baixo</p>";
    $arrendodarBaixo = 3.9;
    echo floor ($arrendodarBaixo);
    echo "<p><strong>round()</strong> - Arrendondar</p>";
    $arredondar = 3.14159;
    echo round($arredondar). "<br>";
    echo round($arredondar,2);
    echo "<p><strong>hypot()</sotrong> - Achar a hipotenusa entre dois catetos</p>";
    echo hypot(6, 8);
    echo "<p><strong>intdiv()</sotrong> - Divisão de inteiros</p>";
    echo intdiv(10, 5);
    echo "<p><strong>sqrt()</sotrong> - Raiz quadrada</p>";
    $raizquadrada = 256;
    echo sqrt($raizquadrada);

    


    

    ?>
</body>
</html>