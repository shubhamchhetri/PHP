<!DOCTYPE html>
<html lang="en">
<head>

    <title>Logical Expression </title>
</head>
<body>
 
    
       
   <?php
    $a= 6;
    $b= 4;
    if($a > $b){
    echo "a is greater than b";
    }
    elseif($a==$b) {
        echo "a is less than b";
    }
    else{
        echo "a is less than b";
    }

    ?>
<br/>
   
<?php
    $c= 12;
    $d=11;
    if(($c > $d) && ($c > $a)) {
    echo "c is greater than d and c ";
    }
    else{
        echo "c is less than d and c";
    }

    ?>
  
  
</body>
</html>