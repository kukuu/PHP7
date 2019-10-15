<?php

/*
* Anonymous classes
*/

$foo = new class {
	public finction foo(){
		return "bar";
	}
};

var_dump($foo, $foo->foo());