<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChocoGui</title>
</head>
<body>
    <?php 
    require_once 'includes/lojas.php';
    $nn = $_POST['nome'];
    $ee = $_POST['especificacoes'];
    $p = $_POST['preco'];
    $i = $_POST['imagem'];
    $n = $l->real_escape_string($nn);
    $e = $l->real_escape_string($ee);
    if ($l->query("INSERT INTO `chocolate` (`id`, `nome`, `especificações`, `preço`, `imagem`) VALUES (DEFAULT, '$n', '$e', '$p', '$i')")){
        echo 'chocolate adcionado com sucesso';
    } else {
        echo 'erro ao inserir dados';
    }
    ?>
</body>
</html>