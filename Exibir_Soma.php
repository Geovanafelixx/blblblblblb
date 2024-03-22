<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somas de Números</title>
</head>
<body>
    <h3> COMPRAS</h3>
    <form name="soma" method="post" action="exibir_soma.php">
    <label>Codigo:</label>
    <input type="text" name="codigo"><br>
    <label>Descrição:</label>
    <input type="text" name="descricao"><br>
    <label>Marca:</label>
    <input type="text" name="marca"><br>
    <label>Preço Unit:</label>
    <input type="text" name="preco"><br>
    <label>Quantidade:</label>
    <input type="text" name="quantidade"><br>
    <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if(isset($_POST['calcular'])) {
        // Verifica se todos os campos foram preenchidos
        if(!empty($_POST['codigo']) && !empty($_POST['descricao']) && !empty($_POST['marca']) && !empty($_POST['preco']) && !empty($_POST['quantidade'])) {
            // Obtém os valores dos campos
            $preco_unit = $_POST['preco'];
            $quantidade = $_POST['quantidade'];
            // Calcula o preço total
            $preco_total = $preco_unit * $quantidade;
            // Exibe o resultado
            echo "<p>O preço total é: R$ " . number_format($preco_total, 2, ',', '.') . "</p>";
        } else {
            echo "<p>Todos os campos devem ser preenchidos!</p>";
        }
    }
    ?>
</body>
</html>