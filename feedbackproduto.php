<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        isset($_POST["nameClient"])
        && isset($_POST["product"])
        && isset($_POST["radioProduct"])
        && isset($_POST["comentProduct"])
    ) {
        $nameClient = $_POST["nameClient"];
        $product = $_POST["product"];
        $radioProduct = $_POST["radioProduct"];
        $comentProduct = $_POST["comentProduct"];
        echo "Nome do cliente: ".$nameClient. "<br>";
        echo "Produto: ".$product. "<br>";
        echo "Avaliação: ".$radioProduct. "<br>";
        echo "Comentário: ".$comentProduct;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback do Produto</title>
</head>

<body>
    <form method="POST">
        <label for="nameClient">
            <p>Nome do Cliente</p>
            <input name="nameClient" type="text" id="nameClient" placeholder="Nome do cliente">
        </label>
        <label for="product">
            <p>Produto</p>
            <select name="product" id="product" placeholder="Produto">

                <option value="">Selecione um produto</option>
                <option value="Creatina">Creatina</option>
                <option value="Whey Protein">Whey Protein</option>
                <option value="Trembolona">Trembolona</option>
                <option value="Testo Black">Testo Black</option>

            </select>

        </label>
        <label for="radioProduct">
            <p>Avaliação</p>
            <input type="radio" name="radioProduct" value="1">
            <label for="estrela1">1 estrela</label>
            <input type="radio" id="estrela2" name="radioProduct" value="2">
            <label for="estrela2">2 estrelas</label>
            <input type="radio" id="estrela3" name="radioProduct" value="3">
            <label for="estrela3">3 estrelas</label>
            <input type="radio" id="estrela4" name="radioProduct" value="4">
            <label for="estrela4">4 estrelas</label>
            <input type="radio" id="estrela5" name="radioProduct" value="5">
            <label for="estrela5">5 estrelas</label>
        </label>
        <label for="comentProduct">
            <p>Comentário</p>
            <textarea id="comentProduct" name="comentProduct" rows="4" cols="40"></textarea>
        </label>
        <button type="submit">Enviar</button>
    </form>

</body>

</html>