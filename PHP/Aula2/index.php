<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

$traco = "<br>===============================<br>";
$primeiroNome = "Maria";
$segundoNome = "do bairro";

$nomeCompleto = $primeiroNome . "&nbsp;" . $segundoNome;

echo "Nome completo: $nomeCompleto";
echo $traco;

/* ============VARIAVEIS DE ATRIBUIÇÃO===========*/
$num1 = 7252;
$num2 = 98;
echo "A soma entre eles é: ". $num1 += $num2;
echo "<br>";
$num1 = 7252;
echo "A subtração entre os numeros é;".$num1 -= $num2;
echo "<br>";
$num1 = 7252;
echo "A multiplicação entre os numeros é:" .$num1 *= $num2;
echo "<br>";
$num1 = 7252;
echo "A divisão entre os numeros é:" .$num1 /= $num2;


echo $traco;

echo "Exemplos de incrementos e decrementos<br>";
$numero = 10;

echo "valor da varavel: $numero<br>";
$numero++;

echo "valor da variavel apos o incremento: $numero<br>";
$numero--;

echo "valor da variavel apos o decremento: $numero<br>";
echo $traco;
echo "Exemplo de troca de valores com variaveis<br>";

?>

</body>
</html>