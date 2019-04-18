<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drinks</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<?php
    $checkedDrinks = $_POST['checked'];
    $drinkQty = $_POST['qty'];
    $submit = $_POST['submit'];

    $price = array(['COCACOLA' => 100, 'PEPSI' => 100, 'BIGI APPLE' => 150, 'BIGI COLA' => 150,
        'SPRITE' => 120, 'CWAY NUTRI MILK' => 150, 'SMOOVE' => 100, 'NUTRI YO' => 200,
        'LACASERA' => 100, 'MIRINDA' => 100, ]);

    function getItems($item, $qty, $priceArr)
    {
        function priceByKey($array, $key)
        {
            foreach ($array as $iPrice) {
                return $iPrice[$key];
            }
        }

        $result = '';
        for ($i = 0; $i < count($item); ++$i) {
            $result .= '<div class="output">You have requested '.$qty[$i].' '.$item[$i].' and it costs  N'
            .(priceByKey($priceArr, $item[$i]) * $qty[$i]).'</div>';
        }

        return $result;
    }

       function totalPrice($item, $qty, $priceArr)
       {
           function priceByKey2($array, $key)
           {
               foreach ($array as $iPrice) {
                   return $iPrice[$key];
               }
           }
           $result = 0;
           for ($i = 0; $i < count($item); ++$i) {
               $result += priceByKey2($priceArr, $item[$i]) * $qty[$i];
           }

           return $result;
       }
    ?>
    
<div class="container">
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
                    <form action="drinks.php" method="post">
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
                                    <td class="checkbox"><input type="checkbox" name="checked[]" value="COCACOLA" class="checkBox">    </td>
                                    <td class="price"> 100 </td>   
                                    <td class="quantity"><input type="number" min ="1" max= "20" value="1" name="qty[]" id=""></td>
                            </tr>
                            <tr class="t-row">
                                    <td class="item">PEPSI</td>
                                    <td class="checkbox"><input type="checkbox" name="checked[]" value="PEPSI" class="checkBox">    </td>
                                    <td class="price"> 100 </td>   
                                    <td class="quantity"><input type="number" min ="1" max= "20" value="1"  name="qty[]" id=""></td>
                            </tr>
                            <tr class="t-row">
                                    <td class="item">MIRINDA</td>
                                    <td class="checkbox"><input type="checkbox" name="checked[]" value="MIRINDA" class="checkBox">    </td>
                                    <td class="price"> 100 </td>   
                                    <td class="quantity"><input type="number" min ="1" max= "20" value="1" name="qty[]" id=""></td>
                            </tr>
                            <tr class="t-row">
                                    <td class="item">BIGI APPLE</td>
                                    <td class="checkbox"><input type="checkbox" name="checked[]" value="BIGI APPLE" class="checkBox">    </td>
                                    <td class="price"> 150 </td>   
                                    <td class="quantity"><input type="number" min ="1" max= "20" value="1" name="qty[]" id=""></td>
                            </tr>
                            <tr class="t-row">
                                    <td class="item">BIGI COLA</td>
                                    <td class="checkbox"><input type="checkbox" name="checked[]" value="BIGI COLA" class="checkBox">    </td>
                                    <td class="price"> 150 </td>   
                                    <td class="quantity"><input type="number" min ="1" max= "20" value="1" name="qty[]" id=""></td>
                            </tr>
                            <tr class="t-row">
                                    <td class="item">SPRITE</td>
                                    <td class="checkbox"><input type="checkbox" name="checked[]" value="SPRITE" class="checkBox">    </td>
                                    <td class="price"> 120 </td>   
                                    <td class="quantity"><input type="number" min ="1" max= "20" value="1" name="qty[]" id=""></td>
                            </tr>
                            <tr class="t-row">
                                    <td class="item">CWAY NUTRI MILK</td>
                                    <td class="checkbox"><input type="checkbox" name="checked[]" value="CWAY NUTRI MILK" class="checkBox">    </td>
                                    <td class="price"> 150 </td>   
                                    <td class="quantity"><input type="number" min ="1" max= "20" value="1" name="qty[]" id=""></td>
                            </tr>
                            <tr class="t-row">
                                    <td class="item">SMOOVE</td>
                                    <td class="checkbox"><input type="checkbox" name="checked[]" value="SMOOVE" class="checkBox">    </td>
                                    <td class="price"> 100 </td>   
                                    <td class="quantity"><input type="number" min ="1" max= "20" value="1" name="qty[]" id=""></td>
                            </tr>
                            <tr class="t-row">
                                    <td class="item">NUTRI YO</td>
                                    <td class="checkbox"><input type="checkbox" name="checked[]" value="NUTRI YO" class="checkBox">    </td>
                                    <td class="price"> 200 </td>   
                                    <td class="quantity"><input type="number" min ="1" max= "20" value="1" name="qty[]" id=""></td>
                            </tr>
                            <tr class="t-row">
                                    <td class="item">LACASERA</td>
                                    <td class="checkbox"><input type="checkbox" name="checked[]" value="LACASERA" class="checkBox">    </td>
                                    <td class="price"> 100 </td>   
                                    <td class="quantity"><input type="number" min ="1" max= "20" value="1" name="qty[]" id=""></td>
                            </tr>

                        </table>
                       <button type="submit" name="submit">Submit</button>
                    </form>
                </div>
                <div class="cart-column">
                    <div class="cart">
                        <?php
                            if (!isset($checkedDrinks)) {
                                echo '<h3> Cart is Empty </h3>';
                            } else {
                                echo '<h3>Items requested for</h3>';
                            }
                                if (isset($submit)) {
                                    echo getItems($checkedDrinks, $drinkQty, $price);
                                    echo '<div class="totalPrice">The total price is N'.totalPrice($checkedDrinks, $drinkQty, $price).'</div>';
                                }

                            ?>
                    </div>
                    <div class="pay">
                        <form action="drinks.php" method="post">
                            <button type="submit" name="pay">Click to Pay</button>
                                <?php $pay = $_POST['pay'];
                                if (isset($pay)) {
                                    ?>
                                        <script>
                                        alert("Thanks for your patronage, Your order would be delivered shortly")
                                        </script>   
                                    <?php
                                }
                                    ?>
                        </form> 
                    </div>
                </div>
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