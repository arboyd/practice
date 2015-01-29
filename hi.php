<?php

//Solution to blank name 
if (!empty(($_GET['name']))){
    $name = ($_GET['name']);
} else {
    $name = "good Sir Knight";
}    

//not currently using quest for anything
$quest = ($_GET['quest']);

//u kno
$color = ($_GET['color']);


//no whitespacespace color
$colorNS = preg_replace('/\s+/', '', $color);


//array of css colors 
$csscolors = array("AliceBlue", "AntiqueWhite", "Aqua", "Aquamarine", "Azure", "Beige", "Bisque", "Black", "BlanchedAlmond", 
"Blue", "BlueViolet", "Brown", "BurlyWood", "CadetBlue", "Chartreuse", "Chocolate", "Coral", "CornflowerBlue", 
"Cornsilk", "Crimson", "Cyan", "DarkBlue", "DarkCyan", "DarkGoldenRod", "DarkGray", "DarkGreen", "DarkKhaki", 
"DarkMagenta", "DarkOliveGreen", "DarkOrange", "DarkOrchid", "DarkRed", "DarkSalmon", "DarkSeaGreen", "DarkSlateBlue", 
"DarkSlateGray", "DarkTurquoise", "DarkViolet", "DeepPink", "DeepSkyBlue", "DimGray", "DodgerBlue", "FireBrick", 
"FloralWhite", "ForestGreen", "Fuchsia", "Gainsboro", "GhostWhite", "Gold", "GoldenRod", "Gray", "Green", "GreenYellow", 
"HoneyDew", "HotPink", "IndianRedIndigoIvory", "Khaki", "Lavender", "LavenderBlush", "LawnGreen", "LemonChiffon", "LightBlue",
 "LightCoral", "LightCyan", "LightGoldenRodYellow", "LightGray", "LightGreen", "LightPink", "LightSalmon", "LightSeaGreen", 
 "LightSkyBlue", "LightSlateGray", "LightSteelBlue", "LightYellow", "Lime", "LimeGreen", "Linen", "Magenta", "Maroon", 
 "MediumAquaMarine", "MediumBlue", "MediumOrchid", "MediumPurple", "MediumSeaGreen", "MediumSlateBlue", "MediumSpringGreen", 
 "MediumTurquoise", "MediumVioletRed", "MidnightBlue", "MintCream", "MistyRose", "Moccasin", "NavajoWhite", "Navy", 
 "OldLace", "Olive", "OliveDrab", "Orange", "OrangeRed", "Orchid", "PaleGoldenRod", "PaleGreen", "PaleTurquoise", "PaleVioletRed", 
 "PapayaWhip", "PeachPuff", "Peru", "Pink", "Plum", "PowderBlue", "Purple", "RebeccaPurple", "Red", "RosyBrown", "RoyalBlue", 
 "SaddleBrown", "Salmon", "SandyBrown", "SeaGreen", "SeaShell", "Sienna", "Silver", "SkyBlue", "SlateBlue", "SlateGray", "Snow", 
 "SpringGreen", "SteelBlue", "Tan", "Teal", "Thistle", "Tomato", "Turquoise", "Violet", "Wheat", "White", "WhiteSmoke", "Yellow", "YellowGreen"); 

 

//check if hex code, does not account for possible # but whatever
// oh wait now it does
if (((preg_match("/^[a-f0-9]{3}$/i", $colorNS)) || (preg_match("/^[a-f0-9]{6}$/i", $colorNS))) ||
    ((preg_match("/^#[a-f0-9]{3}$/i", $colorNS)) || (preg_match("/^#[a-f0-9]{6}$/i", $colorNS)))) {            
           
           echo "<h1 style = \"background-color:$colorNS\" >Good luck on your quest, nerd!</h1>";
            
} 
//check if named color in CSS using space-stripped color name (case insensitive)
elseif (sizeOf((preg_grep("/^$colorNS$/i", $csscolors))) > 0 ){
            
        echo "<h1 style = \"background-color:$colorNS\" >Halloo, $name. Good luck on your quest!</h1>";   
}
//checks if you have nothing/whitespace -- if so, you asplode
elseif ((preg_match("/\s/",$color)) || (empty($color))) {

        echo "<img src =\"http://media.tumblr.com/tumblr_lb6rv7IJtR1qbqqbp.gif\">";
 
}
//maybe you can't spell? -- if there is something typed but neither hex nor css color nor whitespacey
else {
   
   echo "<h1>Are you sure that's a real color, $name?</h1>";
}


?>

