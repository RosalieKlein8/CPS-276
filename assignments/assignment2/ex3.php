<?php
    
    $rows = 15;
    $cells = 5;

    $table= "<table border= '1'>";

    for($i = 1; $i <= $rows; $i++) {
        $table = $table."<tr>";

        for($j = 1; $j <= $cells; $j++) {
            $table=$table."<td> Row ".$i." Cell ".$j."</td>";
        }
    }

    $table = $table."</tr>";
    $table = $table."</table>";


?>

<!doctype html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2 Exercise 3</title>

</head>

<body>

    <?php echo $table ?>

</body>

</html>
