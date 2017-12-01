<!DOCTYPE html>
<html lang="en", style="background-color: lightgray">
<head>
    <meta charset="UTF-8">
    <title>Dump a HTTP GET Request</title>
</head>

<body>

<?php
    if (isset($_GET['num1'], $_GET['num2'])) {
        $num1 = intval($_GET['num1']);
        $num2 = intval($_GET['num2']);
        $sum = $num1 + $num2;

        echo "$num1 + $num2 = $sum";
    }
?>

<form>
    <div>First Number:</div>
    <input type="number" name="num1"/>
    <div>Second Number:</div>
    <input type="number" name="num2"/>
    <div></br></div>
    <div><input type="submit"/></div>
</form>

</body>

<footer>
    </br>
    <div><span style="text-align: center; color: #5e8949">All Rights Reserve: Ivelin Dimitrov Training</span>  </div>
</footer>
</html>