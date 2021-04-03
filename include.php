<?php include 'headers.php' ?>
<!-- Basic html -->
    <h1>Hello World - PHP Primer</h1>
    <br>
    <?php 
        // printing to HTML using echo
        echo "Hello PHP!";
        echo "<br>";
        echo "Second Line";
    ?>

    <?php 
        $name = "Harsh Saini";
        $age = 20;
        echo "<br>";
        //echo variable
        echo $name;
        echo "<br>";
        echo $age;
        echo "<h1>My Name Is : ".$name."</h1>";
        echo "<h1>My Age Is : ".$age."</h1>";
        // another way..
        echo "<h1>My Name Is : $name </h1>";
</body>
</html>