<?php

/*
* Return type declaration
*/

//declare(strict_types=1)
function add(int $a, int $b): int {
	return(string) ($a + $b);
}

var_dump(add(1,2));


