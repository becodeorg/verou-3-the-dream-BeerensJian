<?php
//var_dump($_GET);
//var_dump($_POST);
$rateJapan = 131;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currency Converter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Currency Converter</h1>
    </header>
    <main>
        <div class="box">
            <form action="" method="get">
                <label for="exchange">Enter your amount in euro</label>
                <input type="text" name="amountEuro" id="exchange">

                <input type="submit">
            </form>
            <p>you will get <?= $_GET['amountEuro'] * $rateJapan ?> </p>
        </div>
    </main>

</body>
</html>

