<?php 

    $celsious;

    if(isset($_POST['submit_button'])) {

        $fahrenheit = $_POST["fahrenheit"]; 
        global $celsious;

        $celsious = ($fahrenheit - 32) * (5/9);
            
    } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Advanced Ex</title>
</head>
<body>
    <div class="container">

        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="fahrenheit">Fahrenheit</label>
                <input type="number" class="form-control" id="fahrenheit" name="fahrenheit">
            </div>
            <button type="submit" class="btn btn-primary" name="submit_button">Submit</button>
            
        </form>
    </div>
    <div class="result">
        <?php
        if (isset($celsious)) {
            echo $celsious;
        }
        ?>
    </div>
    
</body>
</html>
