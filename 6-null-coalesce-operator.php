<?php

/*
* null coalesce operator

*/

$array = ['foo' => ''bar];

//PHP5 Style
$message = isset(array['foo'])? $array['foo']: 'not set';
echo " $message";


//PHP7 Style
$message = $array['foo'] ?? 'not set';
echo $message.PHP_EOL;

