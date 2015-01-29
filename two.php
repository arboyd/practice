<?php

$name = ($_POST['name']);
$quest = ($_POST['quest']);
$color = ($_POST['color']);

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

 
//check if space in color or blank
if (!(preg_match("/\s/",$color)) && (!empty($color))) {
        //check if hex code
        if ((preg_match("/[a-f0-9]{3}/i", $color)) || (preg_match("/[a-f0-9]{6}/i", $color))) {            
           echo "<h1 style = \"background-color:$color\" >Hi, $name. Good luck on your quest, nerd!</h1>";
            
        } 
        //check if named color
        elseif (sizeOf((preg_grep("/$color/i", $csscolors))) > 0 ){
             echo "<h1 style = \"background-color:$color\" >Hi, $name. Good luck on your quest!</h1>";   
        }
        //maybe you can't spell?
        else {
            echo "<h1>Are you sure that's a real color, $name?</h1>";
        }
        
    }
    
 //asplode
else {
       echo "<img src =\"http://media.tumblr.com/tumblr_lb6rv7IJtR1qbqqbp.gif\">";
   }

?>


<!--


-->
