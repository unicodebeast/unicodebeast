<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KWASU EATERY</title>
    </head>
<body>
  <?php

$fullName = $_POST['fullName'];
 ?>    <div class="container">
       <?php
       require_once 'header.php';
       ?>
        <section class="section">
        <?php if (isset($fullName)) {
           echo "<div class='dashboard'> <h3> Welcome $fullName </h3>
           </div>";
       } ?>
          
            <div class="background">
                <img width="407px" height="154px" src="Other Files/logo1.png" alt="" class="compname">
                <img class="image" src="IMAGES/top.png" alt="FoodImg">
                <h3>Kindly Pick from the list of categories bellow what you would love to purchase</h3>
                <div class="Varieties">
                        <a href="foods.php"><img src="IMAGES/i6.png" alt="food" class="images"></a>
                        <a href="barbique.php"><img src="IMAGES/i3.png" alt="food" class="images"></a>
                        <a href="drinks.php"><img src="IMAGES/i9.png" alt="food" class="images"></a>
                        <a href="pasteries.php"><img src="IMAGES/i12.png" alt="food" class="images"></a>
                </div>
                </div>
            </div>            
        </section>
      <?php
      require_once 'footer.php';
      ?>
    </div>
</body>
</html>
