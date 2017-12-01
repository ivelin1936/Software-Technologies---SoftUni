<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
	<!--Write your PHP Script here-->
    <?php
        if (isset($_GET['num'])) {
            $num = $_GET['num'];

            $firstNum = 1;
            $secondNum = 1;

            if ($num < 2) {
                echo $firstNum;
            } else {
                $thirdNum = 0 + $firstNum + $secondNum;
                echo $firstNum . ' ';
                echo $secondNum . ' ';
                echo $thirdNum . ' ';

                for ($i = 3; $i < $num; $i++) {
                    $fourthNum = $firstNum + $secondNum + $thirdNum;
                    echo $fourthNum . ' ';

                    $firstNum = $secondNum;
                    $secondNum = $thirdNum;
                    $thirdNum = $fourthNum;
                }

            }
        }
    ?>
</body>
</html>