<!DOCTYPE html>
<html lang="en">
<head>

    <title>second page </title>
</head>
<body>
 
    
    <?php

    print_r($_GET);
    $name=$_GET['name'];
    $id=$_GET['id'];
    echo "<br/> name" . $name . "<br/>";
    echo "<br/> id" . $id . "<br/>";
    ?>

</body>
</html>