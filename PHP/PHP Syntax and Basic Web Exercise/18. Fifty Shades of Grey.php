<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style> 
</head>
<body>
<!--Write your PHP Script here-->
    <?php
        $colorIndexStartRow = 0;
        for ($i = 1; $i <= 5; $i++) {

            $firstIndex = $colorIndexStartRow;
            $secondIndex = 0 + $colorIndexStartRow;
            $thirdIndex = 0 + $colorIndexStartRow;
            for ($j = 1; $j <= 10; $j++) {
                echo "<div style='background-color: RGB($firstIndex,$secondIndex,$thirdIndex)'></div>";
                $firstIndex += 5;
                $secondIndex += 5;
                $thirdIndex += 5;
            }
            $colorIndexStartRow += 51;
            echo "<br>";
        }
    ?>
</body>
</html>