<?php
function waktu()
{
    $time = new DateTime();
    $now = $time->format("H:i:s");
    $nama = "Gie";
    $jk = "laki-laki";
    $string = "Pak";
    if (str_contains($jk, "laki-laki")) {
        $string = "Pak";
    } else if (str_contains($jk, "perempuan")) {
        $string = "Bu";
    } else {
        $string = "tidak diketahui";
    }

    switch ($now) {
        case $now < 12:
            echo "Selamat Pagi $string $nama";
            break;
        case $now < 15:
            echo "Selamat Siang $string $nama";
            break;
        case $now < 18:
            echo "Selamat Sore $string $nama";
            break;
        default:
            echo "Selamat Malam $string $nama";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Waktu</title>
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <div class="clock">

        <div class="hour">
            <div class="hr" id="hr"></div>
        </div>

        <div class="min">
            <div class="mn" id="mn"></div>
        </div>

        <div class="sec">
            <div class="sc" id="sc"></div>
        </div>

    </div>
    <h2>
        <?= waktu() ?>
    </h2>
    <script src="./script.js"></script>

</body>

</html>