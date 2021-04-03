<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - If Statments</title>
</head>
<body>
    <?php

    //An If Sataemnt that will carry out an action based on the value of the variable.
    echo "<h2> If Statement </h2>";
    $grade = 50;
    // ==
    if($grade >= 50){
        echo "<h3 style='color:green'>YOU HAVE PASSED</h3>";
    }
    else{
        echo "<h3 style='color:red'>YOU HAVE FAILED</h3>";
    }

    $grade = 'B';
    if($grade == 'A'){
        echo '<h3 style = "color:Blue">You Got Excellent Grade</h3>';
    }
    elseif($grade == 'B'){
        echo '<h3 style = "color:Purple">You Got Good Grade</h3>';
    }
    else{
        echo '<h3>You have FAILED </h3>';
    }
?>
</body>
</html>