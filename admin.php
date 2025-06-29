<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$user = 'root';
$password = 'root';
$db = 'catalog';
$host = 'localhost';
$port = 3306;

$link = mysqli_connect($host, $user, $password, $db, $port);

if (!$link) {
    die('Помилка підключення: ' . mysqli_connect_error());
}

// Додавання товару
if (isset($_POST['product']) && isset($_POST['price']) && isset($_POST['description']) && isset($_POST['image'])) {

    $product = $_POST['product'];
    $price = $_POST['price'];
    $desription = $_POST['description'];
    $image = $_POST['image'];

    $stmt = mysqli_prepare($link, "INSERT INTO catalog (product, price, description, image) VALUES (?,?,?,?)");
    mysqli_stmt_bind_param($stmt, "sdss", $product, $price, $desription, $image);

    if (mysqli_stmt_execute($stmt)) {
        echo "Товар додано!";
    } else {
        echo "Помилка при додаванні: " . mysqli_error($link);
    }

    mysqli_stmt_close($stmt);
}
?>

<form method="POST">
    Product: <input type="text" name="product">
    Price: <input type="text" name="price">
    Description: <input type="text" name="description">
    Photo(name on catalog): <input type="text" name="image"><br>

    <button type="submit">Save</button>
</form>

<a href="/index.php">HOME</a>
