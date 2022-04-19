<?php
    //variables //Java int x = 3;
        $x = 5;
        $a = 10;
        
    //print String
    echo "how to print a string, use (echo)"; echo "<br>";
    echo "variable a equals: ".$a ; echo "<br>";
    //loops

    for($i = 0; $i <= 10; $i++){
            echo $i; echo "<br>";
    }

    // while loop
    while($x < $a){
        echo $x++."<br>";
    }


    //Arrays
    $arr = ['a', 2, 'c'];
    echo $arr[1]; echo"<br>";

    //keyvaluepair array (maps) key => value
    $associative_array = ["pencil" => 4, "Jonathan" => 3];
    echo $associative_array["pencil"]; echo "<br>";


        //for each loop
        foreach($associative_array as $ar){
            echo $ar."<br>";
        }
    
    


    //conditional statements
    if ($a > $x){
        echo $a." is greater than ".$x ;

    } else {
        echo $x." is greater than ".$a;
    }

    //Operations
    // $t = $x + $a;
    // echo $t
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "practice.php" method = "GET">
        <label>practice for php </label>
        <input type = "text" name = "username" id = "username">
        <button type = "submit"> Submit 

</form>
    
</body>
</html>