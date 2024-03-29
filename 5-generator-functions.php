<?php

/*
* Generator delegation and iterating over functions
*/
fuunction gen()
{
	
	yield 1;
	yield 2;
	yield from gen2();
}

function gen2()
{
	
	yield 3;
	yield 4;
}

foreach(gen() as val){

	echo $val, PHP_EOL;
}

/*
* Output:

1
2
3
4
*/