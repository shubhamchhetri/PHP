<!DOCTYPE html>
<html lang="en">
<head>

    <title>string function</title>
</head>
<body>
    <?php 
    $string1="hello world again";
    $string2=" hum hai";
    ?>
    <br/> 
   <?php
    $string3=$string1;
    $string3 .=$string2;
    echo $string3;
    ?>
    lowercase: <?php echo strtolower($string3);  ?><br/> 
    uppercase: <?php echo strtoupper($string3); ?><br/> 
    uppercase first-letter: <?php echo ucfirst($string3); ?><br/> 
    uppercase words: <?php echo ucwords($string3); ?><br/> 

    length: <?php echo strlen($string3);  ?><br/> 
    trim: <?php echo  $string4= $string2 . trim($string2); ?><br/> 
    find: <?php echo strstr($string3,"hum"); ?><br/> 
    replace: <?php echo str_replace("hello","zindagi",$string1); ?><br/> 
</body>
</html>