<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        isset($_POST["nameProduto"])
        && isset($_POST["categoryProduto"])
        && isset($_POST["priceProduto"])
        && isset($_POST["qtdProduto"])
    ){
        $categoryProduct = $_POST["categoryProduto"];
        $nameProduct = $_POST["nameProduto"];
        $priceProduct = $_POST["priceProduto"];
        $qtdproduct = $_POST["qtdProduto"];
        echo 'Nome: '.$nameProduct ."<br>"."<hr>";
        echo 'Categoria: '.$categoryProduct."<br>"."<hr>";
        echo "Preço R$: ".$priceProduct."<br>"."<hr>";
        echo 'Quantidade: '.$qtdproduct;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produto</title>
</head>

<body>
    <form method="POST">
        <label for="nameProduto">
            <p>Nome do produto</p>
            <input type="text" name="nameProduto" id="nameProduto" placeholder="Nome do produto">
        </label>
        <label for="categoryProduto">
            <p>Categoria do produto</p>
            <input type="text" name="categoryProduto" id="categoryProduto" placeholder="Categoria do produto">
        </label>
        <label for="priceProduto">
            <p>Preço do produto</p>
            <input type="number" name="priceProduto" id="priceProduto" placeholder="Preço do produto">
        </label>
        <label for="qtdProduto">
            <p>Quantidade em estoque</p>
            <input type="number" name="qtdProduto" id="qtdProduto" placeholder="Quantidade do produto">
        </label>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>