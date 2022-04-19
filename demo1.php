<?php


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
    <div>
    <form action = "demo1.php" method = "POST">
        <div>
            <label for = "fname">firstName: </label>
            <input type ="text" id="fname" name = "fname">
            </div>  <br>

            <div>
            <label for = "lname">lastName: </label>
            <input type ="text" id="lname" name = "lname"> 
            </div> <br>

            <div>
            <label for = "email">Email: </label>
             </div>
    <div> 
        <label fpr = "pass"> Password: </label>
        <input type = "password" id = "pass" name = "pass"> 
    </div>
            <div>
            <input type ="text" id="email" name = "email"> 
            </div>
            
            <div> <label for ="tittle "> Select your tittle:
                <label for ="Mr."> Mr. </label> <input type = "radio" id = "Mr." name = "tittle">
                <label for ="Mrs."> Mrs. </label> <input type = "radio" id = "Mrs." name = "tittle">
                <label for = "PhD"> PhD. </label> <input type = "radio" id = "PhD" name = "tittle">
                </label>
            </div>

            <div> 
                <label for = "yes"> has your liscence ever been revoked?  </label>
                <text> yes </text>
                <input type = "checkbox" id = "yes" name = "yes">  
                <text> no </text>
                <label for = "no"> <input type = "checkbox" id="no" name = "no"> 
            <div>

            <!-- <button type = "submit"> Submit -->
                <input type = "submit">
        </form>
</div>
</body>
</html>