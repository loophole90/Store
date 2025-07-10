<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/product.css">
    <title>Store</title>
</head>

<!-- HEADER -->
<header>
    <div><a href="index.php">
            <svg width="200" height="60" viewBox="0 0 200 60" xmlns="http://www.w3.org/2000/svg">
                <g class="btn">
                <rect class="border" x="1" y="1" width="198" height="58" rx="10" ry="10" fill="rgba(0,0,0,0)" stroke="white" stroke-width="2" />
                <text class="label" x="50%" y="50%" fill="white" font-family="Roboto, sans-serif" font-size="24" dominant-baseline="middle" text-anchor="middle">
                    STORE
                </text>
                </g>
            </svg>
        </a>
    </div>
    <div>
        <a href="catalog.php">Catalog</a>
        <a href="http://tg.me/">TG</a>
        <a href="sing.php">Sign in</a>
        <a href="/admin.php">Developer</a>
        <button class="basket" style="cursor: pointer;"><img src="svg/basket.svg"></button>
    </div>

</header>
<!-- HEADER -->

<body>
    <div class="adb">
        <button onclick="Left()"><img src="image/b1.png"></button>
        <img id="ADB" src="image/one.png">
        <button onclick="Rigth()"><img src="image/b2.png"></button>
    </div>



    <div class="page">
        <div class="title">
            <p>Catalog</p>
        </div>

        


        <div class="catalog">

        <?php
            include 'connect.php';
            $result = mysqli_query($link,'SELECT id FROM catalog');
    
            while ($row = mysqli_fetch_assoc($result))  $id[] = $row['id'];
            mysqli_free_result($result);
            unset($row);
            shuffle($id);

            $result = mysqli_query($link, "SELECT * FROM catalog WHERE id IN ($id[0], $id[1], $id[2]) ORDER BY FIELD(id, $id[0], $id[1], $id[2])");



            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='product'>";
                echo "<img src='catalog/{$row['image']}'>";
                echo "<p class='p_title'>{$row['product']}</p>";
                echo "<p class='p_description'>{$row['description']}</p>";
                echo "<div class='sell'>";
                echo "<a href='{$row['product']}.html'>Buy ></a>";
                echo "<p class='p_description'>{$row['price']} $</p>";
                echo "</div>";
                echo "</div>";
            }
        
        ?>

        </div>
        <div class="p_c"><a href="catalog.php">more ></a></div>
            
        
        
        
    </div>


<!-- FOORER -->
    <footer>
            <div class="contact">
                <p>Contact:</p><br>
                <p>Gmail: example@gmail.com</p>
                <p>Phone: +38 012 345 6789</p>
            </div>
            <p>STORE</p>
            <div class="language">
                <p>language:</p><br>
                <a href="">English</a><br>
                <a href="">Ukraine</a><br>
            </div>
    </footer>
<!-- FOORER -->

</body>


<script src="scripts.js"></script>
</html>
