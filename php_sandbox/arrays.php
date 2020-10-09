<!DOCTYPE html>
<html lang="en">
<head>

    <title>arrays</title>
</head>
<body>
   
   <?php
    $array1=array(1,2,3.14,8,9);
    ?>

    <?php  echo $array1[2]; ?><br/> 
    <?php $array2=array(3,"dog","cat",array(3,5,6)); ?><br/>
    <?php echo $array2[3][2]; ?><br/>
    <?php $array3=array("first_name" => "shubham","last_name" => "chhetri",); ?><br/>
    <?php echo $array3["first_name"]; ?><br/>
    <pre><?php print_r ($array2); ?></pre>
</body>
</html>