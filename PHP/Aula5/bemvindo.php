<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo</title>
</head>
<body>
    <a href="javascript: history.go(-1)">Voltar</a> | <a href="index.php">Home</a>
    <?php
    var_dump($_GET);


    echo "Seja bem-vindo! <strong>".$_GET
    ["nome"]."</strong><br>0 e-mail digitado foi: ".$GET["email"];
    ?>
</body>
</html>