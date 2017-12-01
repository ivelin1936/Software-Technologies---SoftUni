<!DOCTYPE html>
<html lang="en", style="background-color: lightgray">
<head>
    <meta charset="UTF-8">
    <title>Dump a HTTP GET Request</title>
</head>

<body>
    <form>
        <div>Name:</div>
        <input type="text" name="personName"/>
        <div>Age:</div>
        <input type="number" name="age"/>
        <div>Town:</div>
        <select name="townId">
            <option value="10">Sofia</option>
            <option value="20">Varna</option>
            <option value="30">Plodvid</option>
        </select>
        <div><input type="submit"/></div>
    </form>

<?php var_dump($_GET); ?>

</body>

<footer>
    </br>
    <div><span style="text-align: center; color: #5e8949">All Rights Reserve: Ivelin Dimitrov Training</span>  </div>
</footer>
</html>