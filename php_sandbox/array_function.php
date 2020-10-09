<!DOCTYPE html>
<html lang="en">
<head>

    <title>array functions</title>
</head>
<body>
   
   <?php
    $array1=array(1,2,3.14,8,9,42);
    ?>


    Count: <?php echo count($array1);  ?><br/> 
    Max value: <?php echo max($array1); ?><br/> 
    Min value: <?php echo min($array1); ?><br/> 
    sort : <?php sort($array1);print_r($array1); ?><br/> 
    reverse sort : <?php rsort($array1);print_r($array1); ?><br/> 
    implode : <?php echo $string1= implode("*",$array1); ?><br/> 
    explode  : <?php print_r(explode("*",$string1)); ?><br/> 
    In array  : <?php echo in_array(8,$array1); ?><br/> 

</body>
</html>