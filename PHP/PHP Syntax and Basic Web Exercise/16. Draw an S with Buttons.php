<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<!--Write your PHP Script here-->
    <?php
        for ($row = 1; $row <= 9; $row++) {
            echo "</br>";
            for ($col = 1; $col <= 5; $col++) {
                if ($row == 1 || $row == 9 || $row == 5) {
                    echo "<button style='background-color: blue'>1</button>";
                }
                else if ($col == 1 && ($row == 2 || $row == 3 || $row == 4)) {
                    echo "<button style='background-color: blue'>1</button>";
                }
                else if ($col == 5 && ($row == 6 || $row == 7 || $row == 8)) {
                    echo "<button style='background-color: blue'>1</button>";
                }
                else {
                    echo "<button>0</button>";
                }
            }
        }
    ?>
</body>
</html>