
<?php

/*
* Scala type declaration
*/

//declare(strict_types=1)
function add(int $a, int $b) {
	return  $a + $b;
}

var_dump(add(1,2));
var_dump(add("1", "2"));

//if we uncomment the comment above the second evaluation will generate an error.