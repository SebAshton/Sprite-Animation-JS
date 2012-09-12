<?php

/* START edit */

$imgWidth = 16;
$imgHeight = 42;

$spriteCount = 55;
$spriteWidth = 881;
$spriteHeight = 42;

/* END edit */


$s = 0;
$spriteItt = $spriteCount - 1;

echo '[';

for ($i = 0; $i < $spriteHeight; $i=$i+$imgHeight) {
	for ($j = 0; $j < $spriteWidth; $j=$j+$imgWidth) {
    #for ($j = $spriteWidth-$imgWidth; $j >= 0; $j=$j-$imgWidth) {
    	if ($s < $spriteCount){
     		echo '[-'.$j.',-'.$i.']';
    		if ( $s < $spriteItt ){
    			echo ',';    			
     		} 
			$s++;
    	}
	}
}

echo ']';

?>