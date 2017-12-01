<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
	<style>
		table * {
			border: 1px solid black;
			width: 50px;
			height: 50px;
		}
    </style>
</head>
<body>
<table>
    <tr>
        <td>
            Red
        </td>
        <td>
            Green
        </td>
        <td>
            Blue
        </td>
    </tr>
<!--Write your PHP Script here-->
    <?php
        for ($i = 1; $i <= 5; $i++) {
            $paint = 51 * $i;
            echo "<tr>";
            echo "<td style='background-color: RGB($paint, 0, 0)'></td>";
            echo "<td style='background-color: RGB(0, $paint, 0)'></td>";
            echo "<td style='background-color: RGB(0, 0, $paint)'></td>";
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>