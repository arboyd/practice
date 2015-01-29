<!DOCTYPE html>
<html lang="en">
<head>

<title>PHP practice woo</title> 
</head>

<body>

<?php 

$address = "1612 Center Avenue"; 
echo "<p>Hey look it's my address: $address</p>" ;


 $authorDeaths = array(
    "Charles Dickens" => "1870",
    "William Thackeray" => "1863",
    "Anthony Trollope" => "1882",
    "Gerard Manley Hopkins" => "1889"    
     ); 

 
 echo "<br><h3>look at all these dead Victorians</h3><p>";
 
 foreach($authorDeaths as $author => $deathYear) {
     echo "$author died in $deathYear<br>" ;
 };
 
 echo "</p>";
 
?>

<!-- input any name and quest. if your color does not have whitespace in it (used whitespace as a really hacky indicator of hesitancy),
check to see if it is a hex code or CSS-recognized color. Then it will be used as the bg color. Otherwise, you blow up. 
Currently does not  use "quest" for anything so sue me. -->

<form method = "get" action="hi.php">
    <p><h2>What is your name?</h2>
    <input type="text" name="name" value="">
    </p>
    
    <p><h2>What is your quest?</h2>
    <input type="text" name="quest" value="">
    </p>
    
    <p><h2>What is your favorite color?</h2>
    <input type="text" name="color" value="">
    </p>
    
    <p>
    <input type="submit">
    </p>

 </form>
 
</body>

</html>