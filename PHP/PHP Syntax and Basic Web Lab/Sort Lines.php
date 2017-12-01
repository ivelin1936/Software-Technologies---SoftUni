<!DOCTYPE html>
<html lang="en", style="background-color: lightgray">
<head>
    <meta charset="UTF-8">
    <title>Sort Lines</title>
</head>

<body>
    <?php
        $sortedLines = "";
        if (isset($_GET['lines'])) {
            $lines = explode("\n", $_GET['lines']);
            $lines = array_map('trim', $lines);
            sort($lines, SORT_STRING);
            $sortedLines = implode("\n", $lines);
        }
    ?>

    <form>
        <textarea rows="10" name="lines"> <?= $sortedLines ?> </textarea></br>
        <input type="submit" value="Sort">
    </form>
</body>

<footer>
    </br>
    <div><span style="text-align: center; color: #5e8949">All Rights Reserve: Ivelin Dimitrov Training</span>  </div>
</footer>
