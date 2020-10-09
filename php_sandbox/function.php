<!DOCTYPE html>
<html lang="en">
<head>

    <title>Functions </title>
</head>
<body>
 
    
       
   <?php

    function say_hello() {
        echo "hello world <br/>";
    }
    say_hello();

    function say_hello2($word) {
        echo "hello {$word} <br/>";
    }
    
    say_hello2("everyone");
    say_hello2("alexa");

    ?>
    <br/>

    <?php

    function add_subt($val1,$val2) {
        $add = $val1 + $val2;
        $sub = $val1 - $val2;
        $result=array($add,$sub);
        return $result;
    }

    $res = add_subt(10,5);
    echo "add:" . $res[0] . "<br/>";
    echo "sub:" . $res[1] . "<br/>";

    ?>

  
</body>
</html>