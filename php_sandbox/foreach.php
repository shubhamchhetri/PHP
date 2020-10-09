<!DOCTYPE html>
<html lang="en">
<head>

    <title>foreach loop </title>
</head>
<body>
 
    
       
   <?php
    $ages=array(3,4,8,10);
    foreach($ages as $ages) {
        echo $ages . ",";
    }
    ?>
    <br/>
    
   <?php    
    $ages=array(3,4,8,10);
    foreach($ages as $x => $y) {
        echo "$x = $y" ;
    }
    ?>
  
</body>
</html>