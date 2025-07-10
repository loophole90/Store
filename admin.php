<?php
include 'connect.php';

// Додавання товару
if (isset($_POST['product']) && isset($_POST['price']) && isset($_POST['description']) && isset($_POST['image'])) {

    $product = $_POST['product'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    $stmt = mysqli_prepare($link, "INSERT INTO catalog (product, price, description, image) VALUES (?,?,?,?)");
    mysqli_stmt_bind_param($stmt, "sdss", $product, $price, $description, $image);

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
    Photo(name on catalog: example 1.jpg): <input type="text" name="image"><br>

    <button type="submit">Save</button>
</form>

<a href="/index.php">HOME</a>

<?php
include 'connect.php';

$result = mysqli_query($link,'SELECT * FROM catalog');

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='product'>";
    echo "<img src='catalog/{$row['image']}'>";
    echo "<p class='p_title'>{$row['product']}</p>";
    echo "<p class='p_description'>{$row['description']}</p>";
    echo "<div class='sell'>";
    echo "<p class='p_description'>{$row['price']}</p>";
    echo "</div>";
    echo "<form method='POST'>";
    echo "ID: <input type='text' name='ID' value='{$row['id']}'>";
    echo "<button type='submit'  style='border: none; color:red; cursor: pointer; font-size: 2rem; margin-top: 10px;'>delete</button>";
    echo "</form>";
    echo "</div>";
}

if (isset($_POST['ID'])) {
    $id = $_POST['ID'];

    $stmt = mysqli_prepare($link, "DELETE FROM catalog WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);

    if (mysqli_stmt_execute($stmt)) {
        echo "Товар видалено!";
    } else {
        echo "Помилка при видаленні: " . mysqli_error($link);
    }


    mysqli_stmt_close($stmt);



}
?>


<style>

    .product{
    padding: 15px 15px 0px 15px;
    margin-top: 35px;
    border-radius: 20px;
    border: 5px solid black;
    height: 540px;
    width: 300px;
    }

    .product > img{ height: 300px; border-radius: 10px 10px 0px 0px;}
    .product > p:nth-child(2){color: black; font-size: 1.5rem; margin-top: 5px;}
    .product > p:nth-child(3){color: rgb(0, 0, 0); font-size: 1.5rem; margin-top: 5px;}
    .product > .sell{display: flex; justify-content: space-between; align-items: center; margin-top: 10px;}
    .product > .sell >p{color: rgb(0, 0, 0); font-size: 1.5rem; margin-top: 5px; width: 100%; text-align: right;}

</style>