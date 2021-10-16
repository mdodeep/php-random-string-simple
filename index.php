	<?php
$randomchar = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz"; //Here Your Random Char
$randomstring = substr(str_shuffle($randomchar), 0,21); // Here Your Random String, 0 is beginning of word and 21 is word length.
 echo $randomstring; // Print Your Random String.
	?>
