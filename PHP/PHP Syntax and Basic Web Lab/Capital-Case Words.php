<!DOCTYPE html>
<html lang="en", style="background-color: lightgray">
<head>
    <meta charset="UTF-8">
    <title>Capital-Case Words</title>
</head>

<body>

<form>
    <div>Input:</div>
    <textarea rows="10" name="text"></textarea></br>
    <input type="submit" value="Extract">
</form>

<?php
    if (isset($_GET['text'])) {
        $text = $_GET['text'];

        preg_match_all('/\w+/', $text, $words);
        $words = $words[0];

        $upperWords = array_filter($words, function($word) {
           return strtoupper($word) == $word;
        });

        echo "</br> <div style='background-color: #00fafa; text-align: left'> <b>Answer:</b> ";
        echo implode(', ', $upperWords);
        echo "</div>";
    }
?>

</body>

<footer>
    </br>
    <div><span style="text-align: center; color: #5e8949">All Rights Reserve: Ivelin Dimitrov Training</span>  </div>
</footer>
