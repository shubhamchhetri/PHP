<!DOCTYPE html>
<html lang="en">
<head>

    <title>continue loop </title>
</head>
<body>
 
    
       
   <?php
   
   for($count=0;$count <= 10;$count++) {
                if($count==5){
            continue;
         }
   echo "count :{$count}" . ",";

   }

    ?>

  
  
</body>
</html>