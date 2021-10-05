<?php

$output = "";    

    for ($i = 1; $i < 5; $i++){
        $output .= "<ul><li>$i</li><ul>";
        
        for ($j = 1; $j < 6; $j++){
            $output .= "<li>$j</li>";
        }

        $output .= "</ul></ul>";
        
    }

?>

<!doctype html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2 Exercise 1</title>

</head>

<body>

      <?php echo $output ?>

</body>

</html>
