<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Functions</title>
</head>
<body>
    <h1>Functions</h1>
    <?php
        // defining a function 
        function writeMessage(){
            echo "You are really a nice person ,Have a nice day!! <br>";
        }
        //calling a function 
        writeMessage();
        echo "<hr>";
        writeMessage();
        echo "<hr>";
        writeMessage();
        
        /* Functions with parameters*/
        function addfunction($num1,$num2){
            $sum = $num1+$num2;
            echo "The sum of $num1 and $num2 is $sum <br>";
        }
        $num = 500;
        function changeNum(&$num){
            $num +=1;
            echo "$num" . "<br>";
        }

        function returnProduct($num1,$num2){
            $prod = $num1*$num2;
            return $prod;
        }

        echo "<hr>";
        addfunction(5,20);
        addfunction("10","5");
        addfunction(10,"35");

        changeNum($num);
        echo $num . "<br>";

        $return_value =returnProduct(10,200);
        echo $return_value . "<br>";
    ?>
</body>
</html>