<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Nomes: <input type="text" name="nome" id=""><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php
    $nome = $_POST["nome"];

    $nomes = explode(",", $nome);
    for($i = 0;$i<count($nomes);$i++){
        echo $nomes[$i]."<br>";
    }
?>
