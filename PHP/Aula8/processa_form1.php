<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta - Select</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php include "menu.php";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $cidade = $_POST['cidade'];
            echo "<h2>Voce escolheu a cidade ?</h2>";

            switch ($cidade) {
                case 'sp':
                    echo"<stong>São Paulo</strong>";
                    break;
                case 'rj':
                    echo"<stong>Rio de janeiro</strong>";
                    break;
                case 'bh':
                    echo"<stong>Belo horizonte</strong>";
                    break;
                case 'poa':
                    echo"<stong>Porto alegre</strong>";
                    break;
                case 'par':
                    echo"<stong>pardinho</strong>";
                    break;
                case 'ita':
                    echo"<stong>itatinga</strong>";
                    break;
                case 'bof':
                    echo"<stong>Bofete</strong>";
                    break;

                    default:
                        echo "<strong>Cidade nao encontrada</strong>";
                        break;
                
            }
        } else {
            echo "<div classe=\"alert alert-warning\"><p>O formulario nao foi enviado.</p></div>";
        }
        ?>
        
    </div>
        

    





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>