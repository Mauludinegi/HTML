<?php
//Global Variabel
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
$money = 0;
$cashback = 0;
$cashbackWater = 0;
$cashbackPizza = 0;
$cashbackLasagna = 0;
$cashbackBurger = 0;
$cashbackChicken = 0;
$cashbackCoffie = 0;

//untuk mengecek apakah method post sudah ada(di set) atau belum
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //mengambil data dari method post lalu dimasukkan ke dalam varibel;
    $jmlWater = $_POST['first'];
    $jmlPizza = $_POST['second'];
    $jmlLasagna = $_POST['third'];
    $jmlBurger = $_POST['fourth'];
    $jmlChicken = $_POST['fifth'];
    $jmlCoffie = $_POST['sixth'];
    $money = $_POST['changeOver'];
    
    //membuat harga sesuai dengan yang di pesan
    $subWater = $priceWater * $jmlWater;
    $subPizza = $pricePizza * $jmlPizza;
    $subLasagna = $priceLasagna * $jmlLasagna;
    $subBurger = $priceBurger * $jmlBurger;
    $subChicken = $priceChicken * $jmlChicken;
    $subCoffie = $priceCoffee * $jmlCoffie;

    //harga barang awal
    $subTotal = $subWater + $subPizza + $subLasagna + $subBurger + $subCoffie + $subChicken;
    $total = $subTotal;

    //mengecek barang, apakah sudah sesuai dengan kelipatan 5 untuk promo
    if ($jmlWater >= 5) {
        $cashbackCount = floor($jmlWater / 5);
        $cashbackWater = $cashbackCount * $priceWater;
    }
    if ($jmlPizza >= 5) {
        $cashbackCount = floor($jmlPizza / 5);
        $cashbackPizza = $cashbackCount * $pricePizza;
    }
    if ($jmlLasagna >= 5) {
        $cashbackCount = floor($jmlLasagna / 5);
        $cashbackLasagna = $cashbackCount * $priceLasagna;
    }
    if ($jmlBurger >= 5) {
        $cashbackCount = floor($jmlBurger / 5);
        $cashbackBurger = $cashbackCount * $priceBurger;
    }
    if ($jmlChicken >= 5) {
        $cashbackCount = floor($jmlChicken / 5);
        $cashbackChicken = $cashbackCount * $priceChicken;
    }
    if ($jmlCoffie >= 5) {
        $cashbackCount = floor($jmlCoffie / 5);
        $cashbackCoffie = $cashbackCount * $priceCoffee;
    }

    //harga barang setelah cashback
    $cashback = $cashbackWater + $cashbackPizza + $cashbackLasagna + $cashbackBurger + $cashbackChicken + $cashbackCoffie;
    $total -= $cashback;

    //mengecek jika harga barang lebih dari 50.000 maka mendapat diskon 10%
    if ($subTotal > 50000) {
        $discount = 0.1 * $subTotal;
        $total -= $discount;
    }

    //mengecek uang, cukup atau tidak
    if ($money >= $total) {
        $changeOver = $money - $total;
    } else {
        echo "<script type='text/javascript'>
        alert('Uang tidak cukup');
        location.replace('Egi Purnama M.php');
        </script>";
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
                    <input type="number" name="first" id="first" max="90" class="form-control" placeholder="jumlah" min="0" value="0"> 
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
                    <input type="number" name="second" id="second" max="90" class="form-control" placeholder="jumlah" min="0"
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
                    <input type="number" name="third" id="third" max="90" class="form-control" placeholder="jumlah" min="0"
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
                    <input type="number" name="fourth" id="fourth" max="90" class="form-control" placeholder="jumlah" min="0"
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
                    <input type="number" name="fifth" id="fifth" max="90" class="form-control" placeholder="jumlah" min="0"
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
                    <input type="number" name="sixth" id="sixth" max="90" class="form-control" placeholder="jumlah" min="0"
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
        <h3>Promo beli kelipatan 5 dapat cashback sesuai kelipatan</h3><br>
        <div class="container">
            <p class="p-right">SubTotal : Rp.
                <?= $subTotal ?>
            </p>
            <p class="p-right">Cashback : Rp.
                <?= $cashback ?>
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
            <p class="p-right">Changeover: Rp.
                <?= $changeOver ?>
            </p>
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