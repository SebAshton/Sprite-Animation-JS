<?php

/* START edit */

$imgWidth = 159;
$imgHeight = 149;

$spriteCount = 148;
$spriteWidth = 1908;
$spriteHeight = 1937;

/* END edit */


$s = 0;
$spriteItt = $spriteCount - 1;

echo '[';

for ($i = 0; $i < $spriteHeight; $i=$i+$imgHeight) {
    for ($j = 0; $j < $spriteWidth; $j=$j+$imgWidth) {
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