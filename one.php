<!DOCTYPE html>
<html lang="en">
<head>

</head>

<body>

<?php 

$address = "1612 Center Avenue"; 
echo "<p>$address</p>" ;


 $authorDeaths = array(
    "Charles Dickens" => "1870",
    "William Thackeray" => "1863",
    "Anthony Trollope" => "1882",
    "Gerard Manley Hopkins" => "1889"    
     ); 

 
 foreach($authorDeaths as $author => $deathYear) {
     echo "<p>$author died in $deathYear</p>" ;
 }
 
?>

<!-- input any name and quest. if your color does not have whitespace in it, it will be used as the bg color. Otherwise, you blow up. (used whitespace as a really hacky indicator of hesitancy) -->

<form method = "post" action="two.php">
    <p>What is your name?
    <input type="text" name="name" value="">
    </p>
    
    <p>What is your quest?
    <input type="text" name="quest" value="">
    </p>
    
    <p>What is your favorite color?
    <input type="text" name="color" value="">
    </p>
    
    <p>
    <input type="submit">
    </p>

 </form>
 
</body>

</html>