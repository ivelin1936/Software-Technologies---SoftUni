<!DOCTYPE html>
<html lang="en", style="background-color: lightgray">
<head>
    <meta charset="UTF-8">
    <title>Celsius - Fahrenheit</title>
</head>

<body>

<?php
$msgAfterCelsius = "";
if (isset($_GET['cel'])) {
    $cel = floatval($_GET['cel']);
    $fah = celsiusToFahrenheit($cel);
    $msgAfterCelsius = "$cel &deg;C = $fah &deg;F";
}
$msgAfterFahrenheit = "";
if (isset($_GET['fah'])) {
    $fah = floatval($_GET['fah']);
    $cel = fahrenheitToCelsius($fah);
    $msgAfterFahrenheit = "$fah &deg;F = $cel &deg;C";
}

function celsiusToFahrenheit (float $celsius) : float
{
    return $celsius * 1.8 + 32;
}
function fahrenheitToCelsius (float $fahrenheit) : float
{
    return ($fahrenheit - 32) / 1.8;
}
?>

<form>
    Celsius: <input type="text" name="cel" />
    <input type="submit" value="Convert">
    <?= $msgAfterCelsius ?>
</form>
<form>
    Fahrenheit: <input type="text" name="fah" />
    <input type="submit" value="Convert">
    <?= $msgAfterFahrenheit ?>
</form>

</body>

<footer>
    </br>
    <div><span style="text-align: center; color: #5e8949">All Rights Reserve: Ivelin Dimitrov Training</span>  </div>
</footer>
</html>