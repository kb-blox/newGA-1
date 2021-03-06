<?php

include './includeDB.php';

$sql = "SELECT * FROM products";
$stmt = $dbm->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->bindParam(":name", $name);
$stmt->bindParam(":price", $price);
$stmt->bindParam(":color", $color);
$stmt->bindParam(":size", $size);
$stmt->bindParam(":quantity", $quantity);
$stmt->execute();
$products = $stmt->fetchAll();

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$price = filter_input(INPUT_GET, 'price', FILTER_SANITIZE_SPECIAL_CHARS);
$color = filter_input(INPUT_GET, 'color', FILTER_SANITIZE_SPECIAL_CHARS);
$size = filter_input(INPUT_GET, 'size', FILTER_SANITIZE_SPECIAL_CHARS);
$quantity = filter_input(INPUT_GET, 'quantity', FILTER_SANITIZE_SPECIAL_CHARS);

foreach ($products as $product) {
    echo "<form method='GET' action='product.php'";
    echo "<a href='product.php'>"
    . "<div class='col-sm-3 produkter'>"
    . "<img class='img-responsive' src='http://placehold.it/400x400'>";
    echo "<p>" . $product["name"] . " " . $product["price"] . "£" . "</p>";
    echo "<td>";
    echo "<input type='hidden' name='id' value='" . $product['id'] . "'";
    echo "</td>";
    echo "<td>";
    echo "<input type='hidden' name='name' value='" . $product["name"] . "'";
    echo "</td>";
    echo "<td>";
    echo "<input type='hidden' name='price' value='" . $product['price'] . "'";
    echo "</td>";
    echo "<td>";
    echo "<input type='hidden' name='color' value='" . $product['color'] . "'";
    echo "</td>";
    echo "<td>";
    echo "<input type='hidden' name='size' value='" . $product['size'] . "'";
    echo "</td>";
    echo "<td>";
    echo "<input type='hidden' name='amount' value='1'>";
    echo "<td>";
    echo "<button>BUY</button>";
    echo "</div>"
    . "</a>";
    echo "</form>";
}
