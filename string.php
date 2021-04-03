<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - String Manipulation</title>
</head>
<body>
    <h1>PHP String Manipulation</h1>
    <?php
    //Concatenation of student
    $phrase1 = "Student who come late";
    $phrase2 = "In class, stand with Rock";
    $name = "harsh saini";
    echo $phrase1 .". Named Tiffany, ". $phrase2;
    echo"<br>";
    echo"<hr>";
    //String Transformation
    echo 'Uppercase first letter: ' . ucfirst($name).'<br>';
    echo 'Uppercase first letter of each word: ' . ucwords($name).'<br>';
    echo 'upper case: '.strtoupper($name)."<br/>";
    echo 'Lower case: '.strtolower("THIS WAS ALL UPPER CASE")."<br/>";
    echo"<hr>";
    echo "Repeat string : " . strtolower(str_repeat('A',10)) . "<br>";
    echo "Repeat string : " . strtoupper(str_repeat('a',10)) . "<br>";
    echo "Get a Substring : " . strtoupper(substr($name,5,10)) ."<br>";
    echo "Get position of string : " . strpos($name,'s') . "<br>";
    echo  "Find Character 'h' : " . strchr($name,'h') . "<br>";
    
    echo  "Find length of string : " . strlen($name) . "<br>";
    
    echo 'Without Trim : '. "A" . " B C D " . "E" . '<br>';
    echo 'Trim Space on both sides : '."A" . trim(" B C D ") . "E" . "<br>";
    echo 'Trim Space on both sides : '."A" . ltrim(" B C D ") . "E" . "<br>";
    echo 'Trim Space on both sides : '."A" . rtrim(" B C D ") . "E" . "<br>";

    echo 'Replace string with another : ' . str_replace("stand","sit",$phrase2) . "<br>";




    ?>
</body>
</html>