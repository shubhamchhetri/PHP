<!DOCTYPE html>
<html lang="en">
<head>

    <title>Type Casting </title>
</head>
<body>
 
    
       
   <?php
    $var1= "3 cat";
    $var2= 2;
    echo $var2;echo "<br/>";
    ?>

     <?php 
     echo gettype($var1); echo "<br/>";
     echo gettype($var2); echo "<br/>";
     settype($var1,"string");
     echo gettype($var1); echo "<br/>";
     $var3=(int) $var1;
     echo gettype($var3); echo "<br/>";
     ?><br/> 
  
</body>
</html>