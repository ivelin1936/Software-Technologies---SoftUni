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
            $num = intval($_GET['num']);

            $firstNum = 1;
            $secondNum = 1;

            if ($num < 2) {
                echo $firstNum;
            } else {
                echo $firstNum . ' ';
                echo $secondNum . ' ';

                for ($i = 2; $i < $num; $i++) {
                    $thirdNum = $firstNum + $secondNum;

                    echo $thirdNum . ' ';

                    $firstNum = $secondNum;
                    $secondNum = $thirdNum;
                }
            }
        }
    ?>
</body>
</html>