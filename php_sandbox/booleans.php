<!DOCTYPE html>
<html lang="en">
<head>

    <title>Booleans and NULL </title>
</head>
<body>
   
   <?php
    $bool1= true;
    $bool2= false;
    ?>


    Bool1: <?php echo $bool1;  ?><br/> 
    Bool2: <?php echo $bool2; ?><br/> 
    
       
   <?php
    $var1= 3;
    $var2= "cat";
    ?>

    var1 is set: <?php echo isset($var1);  ?><br/> 
    var2 is set: <?php echo isset($var2); ?><br/> 
    var3 is set: <?php echo isset($var3); ?><br/>
    var4 is empty: <?php echo empty($var4); ?><br/>
</body>
</html>