<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css"/>
    <title>Palindrome</title>
</head>

<body>
    <div id="wrapper">
        <?php
        if(isset($_POST['submit'])){
            //gets form input
            $varc = $_POST['check'];
            //converts form input to a string & uppercase
            $var = strtoupper("$varc");
            //reverses the form input
            $varcheck =strrev($var);
            //checks if the input and its reverse are equal
            if($var === $varcheck){
                echo "<br><br><h2 class='msg'>$var is a Palindrome!</h2><br>";
            }else{
               echo "<br><br><h2 class='msg2'>$var is not a Palindrome!</h2><br>";
            }
        }
        ?>
        
        
        
        
    <h1>Palindrome Check</h1>
    <form method="post" action="index.php">
        <input type="text" name="check" placeholder="Enter Value to Check" required><br>
        <input type="submit" name="submit" value="Check">
    </form>
        
        <h3 id="link"> Created by: <a href="https://twitter.com/iambobbiekings">| Bobbie Kings</a></h3>
        
    </div>
</body>
</html>
