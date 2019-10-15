<?php

/*
* Closure call()
*/

class Foo
{
	private $foo = 'bar';
}

$getFooCallBack = function() {
	return $this -> foo;
};

//PHP5 Style
$binding = $getFooCallBack -> bind(new Foo, 'Foo');
 echo $binding().PHP_EOL; 

 //PHP7 Style
 echo $getFooCallBack -> call(new Foo).PHP_EOL;