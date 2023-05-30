<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php basic</title>
</head>
<body>
    <?php
    
    $myName = "hello I am dhanush";
    echo strtolower($myName);
    echo "<br>";
    echo strtoupper($myName);
    echo "<br>";
    echo strlen($myName);
    echo "<br>";
    echo $myName[1];
    echo "<br>";
    echo str_replace("welcome","hello",$myName);
    echo "<br>";
    echo substr($myName,0,5);
    echo "<br>";

    ?>
</body>
</html>