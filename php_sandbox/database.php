<?php
    //1.Create a database connection
    $connection =mysqli_connect('localhost','root','****');
    if(!$connection) {
        die("database connection failed:". mysqli_error());
    }


      //2.Selecting  a database connection
      $db_select =mysqli_select_db($connection, "widget_corp");
      if(!$db_select) {
          die("database connection failed:". mysqli_error());
      }
      
    
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Database </title>
</head>
<body>
   
<?php

    //3.Perform a query
    $result = mysqli_query($connection, "SELECT * FROM subjects"); 
        if(!$result) {
            die("database query failed:". mysqli_error());
        }
              
    //4.Use returned data
    while($row = mysqli_fetch_row($result)){
    echo $row[1] . " ". $row[2] ."<br/>"; 
    }

?>




</body>
</html>

<?php


    //5. Close connection
    mysqli_close($connection);



?>