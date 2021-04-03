<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Date and Time Manipulation</title>
</head>
<body>
    <h1>Date and Time Manipulation</h1>
    <?php
        $datenow = getdate(); 
        echo "Today's Date : " . $datenow['mday'] . "/" . $datenow['mon'] . "/" . $datenow['year'] . "<br>";
        // echo $datenow['mday'] . "/";
        // echo $datenow['mon'] . "/"; 
        // echo $datenow['year'] . "<br>";
        echo "Today's Date : " . date("d-m-Y") . "<br>"; 

        echo time();
        echo "<br>";
        print date("m/d/y H:i:sa<br>",time()) . "<br>";
        print "Today is ";
        print date("j of F Y,\a\\t h:i:sa", time());

    ?>
</body>
</html>