<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello, Person!</title>

</head>
<body>
<form>
    Name: <input type="text" name="person" />
    <input type="submit" />
</form>
<!--Write your PHP Script here-->
<?php
    if (isset($_GET['person'])) {
        $person = $_GET['person'];

        echo "Hello, $person!";
    }
?>
</body>
</html>