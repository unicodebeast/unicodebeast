<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drinks</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="container">
<?php

if (isset($_POST['checked'])) {
    foreach ($_POST['checked'] as $drink => $key) {
        echo $_POST[$key].'<br>';
    }
}
$checkedDrinks = $_POST['checked'];
$drinkQty = $_POST['qty'];

function getItems($item, $qty)
{
    $result;
    for ($i = 0; $i < count($checkedDrinks); ++$i) {
        $result.'<h3> you requested '.$qty[$i].' Plastics of '.$item[$i].'</h3> <br>';
    }

    return $result;
}
// if (isset($checkedDrinks) && isset($drinkQty)) {
//     foreach ($checkedDrinks as $n) {
//         echo $n;
//     }
// }
?>
        <?php
        require_once 'header.php';
        ?>
        <section class="section">
            <div class="titles">
                <h1 font-face="simplicity">KwasuDelight Drinks</h1>
                <h3>Choose your prefered Drinks</h3>
            </div>
            <div class="background">
                <img class="main-drink" width="50%" src="IMAGES/in4.png" alt="drink">
            </div>            
            <div class="shelf">
                <div class="column-1">
                    <form action="" method="post">
                        <table>
                        <div class="items">
                        <table class="table">
                            <thead class="t-head">
                                <tr class="t-row">
                                    <th class="t-data" colspan="2">ITEM</td>
                                    <th class="t-data">PRICE </td>
                                    <th class="t-data">QUANTITY</td>
                                </tr>
                            </thead>

                            <tr class="t-row">
                                    <td class="item">COCACOLA</td>
                                    <td class="checkbox"><input type="checkbox" name="checked[cocacola]" value="COCACOLA" class="checkBox">    </td>
                                    <td class="price"> 100 </td>   
                                    <td class="quantity"><input type="number" name="qty['cocacola']" id=""></td>
                            </tr>
                            <tr class="t-row">
                                    <td class="item">PEPSI</td>
                                    <td class="checkbox"><input type="checkbox" name="checked[pepsi]" value="PEPSI" class="checkBox">    </td>
                                    <td class="price"> 100 </td>   
                                    <td class="quantity"><input type="number" name="qty['pepsi']" id=""></td>
                            </tr>
                            <tr class="t-row">
                                    <td class="item">MIRINDA</td>
                                    <td class="checkbox"><input type="checkbox" name="checked['mirinda']" value="MIRINDA" class="checkBox">    </td>
                                    <td class="price"> 100 </td>   
                                    <td class="quantity"><input type="number" name="qty['mirinda']" id=""></td>
                            </tr>
                            <tr class="t-row">
                                    <td class="item">BIGI APPLE</td>
                                    <td class="checkbox"><input type="checkbox" name="checked['big_apple']" value="BIGI APPLE" class="checkBox">    </td>
                                    <td class="price"> 150 </td>   
                                    <td class="quantity"><input type="number" name="qty['big_apple']" id=""></td>
                            </tr>
                            <tr class="t-row">
                                    <td class="item">BIGI COLA</td>
                                    <td class="checkbox"><input type="checkbox" name="checked['bigi_cola']" value="BIGI COLA" class="checkBox">    </td>
                                    <td class="price"> 150 </td>   
                                    <td class="quantity"><input type="number" name="qty['bigi_cola']" id=""></td>
                            </tr>
                            <tr class="t-row">
                                    <td class="item">SPRITE</td>
                                    <td class="checkbox"><input type="checkbox" name="checked['sprite']" value="SPRITE" class="checkBox">    </td>
                                    <td class="price"> 120 </td>   
                                    <td class="quantity"><input type="number" name="qty['sprite']" id=""></td>
                            </tr>
                            <tr class="t-row">
                                    <td class="item">CWAY NUTRI MILK</td>
                                    <td class="checkbox"><input type="checkbox" name="checked['cway']" value="CWAY NUTRI MILK" class="checkBox">    </td>
                                    <td class="price"> 150 </td>   
                                    <td class="quantity"><input type="number" name="qty['cway']" id=""></td>
                            </tr>
                            <tr class="t-row">
                                    <td class="item">SMOOVE</td>
                                    <td class="checkbox"><input type="checkbox" name="checked['smoove']" value="SMOOVE" class="checkBox">    </td>
                                    <td class="price"> 100 </td>   
                                    <td class="quantity"><input type="number" name="qty['smoove']" id=""></td>
                            </tr>
                            <tr class="t-row">
                                    <td class="item">NUTRI YO</td>
                                    <td class="checkbox"><input type="checkbox" name="checked['nutri_yo']" value="NUTRI YO" class="checkBox">    </td>
                                    <td class="price"> 200 </td>   
                                    <td class="quantity"><input type="number" name="qty['nutri_yo']" id=""></td>
                            </tr>
                            <tr class="t-row">
                                    <td class="item">LACASERA</td>
                                    <td class="checkbox"><input type="checkbox" name="checked['lacasera']" value="LACASERA" class="checkBox">    </td>
                                    <td class="price"> 100 </td>   
                                    <td class="quantity"><input type="number" name="qty['lacasera']" id=""></td>
                            </tr>

                        </table>
                        <input type="submit" value="submit">
                    </form>
                </div>
                <div class="column-2">
                    <div class="cart">
                        <h3>Items requested for</h3>
                       <?php echo '<h3>'.$purchedItem.'</h3>'; ?>
                    </div>
                </div>
            </div>
               
            
            <div class="background">
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