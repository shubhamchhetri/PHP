<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Session </title>
</head>
<body>
    <?php
    $_SESSION['first_name']="shubham";
    $_SESSION['last_name']="chhetri";

    ?>


<?php
    
    $name=$_SESSION['first_name'] . " ". $_SESSION['last_name'];
    echo $name;
    ?>



</form>


</body>
</html>