<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Color Palette</title>
    <style>
        div {
            display: inline-block;
            width: 150px;
            padding: 2px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php
        for ($i = 0; $i <= 255; $i += 51) {
            for ($j = 0; $j <= 255; $j += 51) {
                for ($k = 0; $k <= 255; $k +=51) {
                    echo "<div style='background: rgb($i,$j,$k)'>rgb($i,$j,$k)</div>";
                }
            }
        }
    ?>
</body>
</html>