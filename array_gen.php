<?php

$imgWidth = '';
$imgHeight = '';

$spriteCount = '';
$spriteWidth = '';
$spriteHeight = '';

$s = 0;

echo '[';

for ($i = 0; $i < $imgHeight; $i = $i+$spriteHeight) {
    for ($j = 0; $j < $imgWidth; $j = $i+$spriteWidth) {
    	while ($s <= $spriteCount){
    		echo '['.$i.','.$j.']';
    		if ($s != $spriteCount){
    			echo ',';
    		}
    	}
	}
}

echo ']';

?>