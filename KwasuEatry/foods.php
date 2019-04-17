<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foods</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <?php
        require_once 'header.php';
        ?>
        <section class="section">
            <div class="titles">
                    <h1 font-face="simplicity">KwasuDelight Foods</h1>
                    <h3>What would you like to eat</h3>
            </div>
            <div class="background">
                <img class="main-drink" width="50%" src="IMAGES/r2.png" alt="drink">
            </div>
            <div class="items">
            </div>
                
            <div class="background">
            <h3>Kindly Pick from the list of categories bellow what you would love to purchase</h3>
                <div class="Varieties">
                    <a href="foods.php"><img src="IMAGES/i6.png" alt="food" class="images"></a>
                    <a href="barbique.php"><img src="IMAGES/i3.png" alt="food" class="images"></a>
                    <a href="drinks.php"><img src="IMAGES/i9.png" alt="food" class="images"></a>
                    <a href="pasteries.php"><img src="IMAGES/i12.png" alt="food" class="images"></a>
                </div>
            </div>            
        </section>
        <?php
        require_once 'footer.php';
        ?>
    </div>
</body>
</html>