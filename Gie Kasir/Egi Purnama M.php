<?php
$priceWater = 5000;
$pricePizza = 60_000;
$priceLasagna = 70_000;
$priceBurger = 40_000;
$priceChicken = 20_000;
$priceCoffee = 15_000;
$subTotal = 0;
$discount = 0;
$total = 0;
$changeOver = 0;
$money =0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmlWater = $_POST['first'];
    $jmlPizza = $_POST['second'];
    $jmlLasagna = $_POST['third'];
    $jmlBurger = $_POST['fourth'];
    $jmlChicken = $_POST['fifth'];
    $jmlCoffie = $_POST['sixth'];
    $money = $_POST['changeOver'];
    $subWater = $priceWater * $jmlWater;
    $subPizza = $pricePizza * $jmlPizza;
    $subLasagna = $priceLasagna * $jmlLasagna;
    $subBurger = $priceBurger * $jmlBurger;
    $subChicken = $priceChicken * $jmlChicken;
    $subCoffie = $priceCoffee * $jmlCoffie;
    $subTotal = $subWater + $subPizza + $subLasagna + $subBurger + $subCoffie + $subChicken;
    $total = $subTotal;
    if ($subTotal > 50000) {
        $discount = 0.1 * $subTotal;
        $total = $subTotal - $discount;
    }

    if ($money >= $total) {
        $changeOver = $money - $total;
    } else {
        $changeOver = "Uang anda tidak cukup";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Resto By Gie</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <section class="products" id="products">
        <form method="post">
            <h1>Menu:</h1>
            <div class="products-container">
                <div class="box">
                    <input type="checkbox" name="prefer" onclick="displayFirst()">
                    <img src="assets\img\food1.jpeg" alt="">
                    <span>Fresh Items</span>
                    <h2>Air Mineral</h2>
                    <h3 class="price">Rp.
                        <?= $priceWater ?>
                    </h3>
                    <i class="bx bx-heart"></i>
                    <br>
                    <input type="number" name="first" id="first" class="form-control" placeholder="jumlah" value="0">
                </div>

                <div class="box">
                    <input type="checkbox" name="prefer" onclick="displaySecond()">
                    <img src="assets\img\food-3.png" alt="">
                    <span>Fresh Items</span>
                    <h2>Pizza Mozarela</h2>
                    <h3 class="price">Rp.
                        <?= $pricePizza ?>
                    </h3>
                    <i class="bx bx-heart"></i>
                    <br>
                    <input type="number" name="second" id="second" max="90" class="form-control" placeholder="jumlah"
                        value="0">
                </div>

                <div class="box">
                    <input type="checkbox" name="prefer" onclick="displayThird()">
                    <img src="assets\img\food.png" alt="">
                    <span>Fresh Items</span>
                    <h2>Lasagna</h2>
                    <h3 class="price">Rp.
                        <?= $priceLasagna ?>
                    </h3>
                    <i class="bx bx-heart"></i>
                    <br>
                    <input type="number" name="third" id="third" max="90" class="form-control" placeholder="jumlah"
                        value="0">
                </div>

                <div class="box">
                    <input type="checkbox" name="prefer" onclick="displayFourth()">
                    <img src="assets\img\food-2.png" alt="">
                    <span>Fresh Items</span>
                    <h2>Burger Giant</h2>
                    <h3 class="price">Rp.
                        <?= $priceBurger ?>
                    </h3>
                    <i class="bx bx-heart"></i>
                    <br>
                    <input type="number" name="fourth" id="fourth" max="90" class="form-control" placeholder="jumlah"
                        value="0">
                </div>

                <div class="box">
                    <input type="checkbox" name="prefer" onclick="displayFifth()">
                    <img src="assets\img\food-6.jpg" alt="">
                    <span>Fresh Items</span>
                    <h2>Fried Chicken</h2>
                    <h3 class="price">Rp.
                        <?= $priceChicken ?>
                    </h3>
                    <i class="bx bx-heart"></i>
                    <br>
                    <input type="number" name="fifth" id="fifth" max="90" class="form-control" placeholder="jumlah"
                        value="0">
                </div>

                <div class="box">
                    <input type="checkbox" name="prefer" onclick="displaySixth()">
                    <img src="assets\img\drink-2.png" alt="">
                    <span>Fresh Items</span>
                    <h2>Coffee Java</h2>
                    <h3 class="price">Rp.
                        <?= $priceCoffee ?>
                    </h3>
                    <i class="bx bx-heart"></i>
                    <br>
                    <input type="number" name="sixth" id="sixth" max="90" class="form-control" placeholder="jumlah"
                        value="0">
                </div>
            </div>
            <br>
            <label class="label-input">Input money
                <input type="number" name="changeOver" min="0" placeholder="input money here" required>
            </label>
            <br>
            <a href="#pay"><button type="submit" class="btn">Order<i class='bx bx-right-arrow-alt'></i></button></a>
        </form>
    </section>

    <section id="pay" class="pay">
        <h1>Paying</h1><br>
        <div class="container">
            <p class="p-right">SubTotal : Rp.
                <?= $subTotal ?>
            </p>
            <p class="p-right">Discount : Rp.
                <?= $discount ?>
            </p>
            <p class="p-right">FinalTotal : Rp.
                <?= $total ?>
            </p>
            <p class="p-right">Money : Rp.
                <?= $money ?>
            </p>
            <p class="p-right">Changeover: Rp. <?= $changeOver?></p>
        </div>
        <br>
        <div class="confirm">
            <button type="button" class="btn btn-left" value="Pay" id="payment">OKE Now</button>
            <button type="button" class="btn btn-right" onclick="display1()" value="Cancel">Cancel</button>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets\js\main.js"></script>
</body>

</html>