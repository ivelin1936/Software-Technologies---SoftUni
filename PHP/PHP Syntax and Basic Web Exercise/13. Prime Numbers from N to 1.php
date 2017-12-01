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

            for ($i = $num; $i >= 2; $i--) {
                $isPrime = true;

                if ($i % 2 == 0 && $i != 2) {
                    $isPrime = false;
                }
                else {
                    for ($n = 2; $n <= sqrt($i); $n++) {
                        if ($i % $n == 0) {
                            $isPrime = false;
                            break;
                        }
                    }
                }

                if ($isPrime) {
                    echo $i . ' ';
                }
            }
        }
    ?>
</body>
</html>