<!DOCTYPE html>
<html lang="en">
<head>

    <title>Loop : Pointers </title>
</head>
<body>
 
    
       
   <?php
    $ages= array(2,8,7,65);
    echo "1:" . current($ages) . "<br/>";
    next($ages);
    echo "2:" . current($ages) . "<br/>";
    reset($ages);
    echo "3:" . current($ages) . "<br/>";
    

    ?>

  
</body>
</html>