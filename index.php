<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Store</title>
</head>
<header>
    <div><a href="">
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
        <a href="catalog.php">Каталог</a>
        <a href="http://tg.me/">TG</a>
        <a href="sing.php">Sign in</a>
        <a href="/admin.php">Розробник</a>
        <button class="basket" style="cursor: pointer;"><img src="svg/basket.svg"></button>
    </div>

</header>
<body>
    <div class="adb">
        <button onclick="Left()"><img src="image/LEFT.png"></button>
        <img id="ADB" src="image/one.png">
        <button onclick="Rigth()"><img src="image/RIGHT.png"></button>
    </div>



    <div class="page">
        <div class="title">

            <p>Catalog</p>

        </div>

        
        <div class="catalog">
            
        </div>
        
        
    </div>



































    <div style="height: 10000px;"></div>

</body>


<script src="scripts.js"></script>
</html>