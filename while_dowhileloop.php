<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - While/Do-While Loops</title>
</head>
<body>
    <h1>While Loop</h1>
    <?php
    //Pre-condition Loop
        $grade = 0;
        while($grade < 10){
            echo '<p>I am less than 10!</p>';
            $grade++;
        }
        echo 'Exit Loop!';
    ?>
 
    <h1>DO-While Loop</h1>
    <?php
    //post-condition loop
        do{
            echo "<p>I am Do While Loop</p>";
            $grade++;
        }while($grade<20);
    ?>
</body>
</html>