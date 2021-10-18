<?php

if(count($_POST) > 0){ 
    require_once 'addNameProc.php'; 
    $addName = new AddNamesProc(); 
  
    $output = $addName->addClearNames(); 
  } 

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Assignment 4</title>
</head>

<body>
    <div class="container">
        <h1>Add Names</h1>
        <form class="row g-3" method="post" action="#">
            <div class="row-md-2">
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Add Name</button>
                    <button type="submit" class="btn btn-primary">Clear Names</button>
                </div>
            </div>
            <div class="col-md-12">
                <label for="typedName" class="form-label">Enter Name</label>
                <input type="text" class="form-control" id="typedName">
            </div>
            <div class="col-md-12">
                <label for="listNames" class="form-label">List of Names</label>
                <textarea style="height: 500px;" class="form-control" id="namelist" name="namelist"> 
                    <?php echo $output ?>
                </textarea> 
            </div>
        </form>
    </div>
</body>

</html>
