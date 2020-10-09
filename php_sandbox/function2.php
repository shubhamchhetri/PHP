<!DOCTYPE html>
<html lang="en">
<head>

    <title>Functions </title>
</head>
<body>
 
    
    <?php

    $bar= "outside";
    function foo() {
        global $bar;
        $bar ="inside";
        return $bar;
    }

    $res = foo();
    echo "global:" . $res . "<br/>";
    
    ?>
    <br/>

        
    <?php
    //default value

    function paint($color= "red"){
        echo "paint the house  {$color}";
    } 
    paint();
    ?>
  
</body>
</html>