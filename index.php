<?php
var_dump($_GET);
//var_dump($_POST);
$rateJapan = 131;

$result = 0;
switch ([$_GET["myCurrency1"], $_GET["myCurrency"]]) {
    case ["EUR" , "USD"]:
        $result = $_GET["amountEuro"] * 1.14 ;
        break;
    case ["EUR" , "YEN"]:
        $result = $_GET["amountEuro"] * $rateJapan ;
        break;
    case ["USD" , "YEN"]:
        $result = $_GET["amountEuro"] * 115 ;
        break;
    case ["USD" , "EUR"]:
        $result = $_GET["amountEuro"] * 0.88 ;
        break;
    case ["YEN" , "EUR"]:
        $result = $_GET["amountEuro"] * 0.0076;
        break;
    case ["YEN" , "USD"]:
        $result = $_GET["amountEuro"] * 0.0087 ;
        break;
    default:
        $result = $_GET["amountEuro"] ;
}


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
                <label for="exchange">Enter your amount:</label>
                <input type="text" name="amountEuro" id="exchange"> <br>
                <label for="myCountry1"></label>
                <input list="countries" name="myCurrency1" id="myCountry"/>
                <datalist id="countries">
                    <option value="EUR">
                    <option value="USD">
                    <option value="YEN">
                </datalist>
                <label for="myCountry">To What currency?</label> <br>
                <input list="countries" name="myCurrency" id="myCountry"/>
                <datalist id="countries">
                    <option value="EUR">
                    <option value="USD">
                    <option value="YEN">
                </datalist>
                <input type="submit">
            </form>
            <p>you will get <?php echo $result ?> </p>
        </div>
    </main>

</body>
</html>

