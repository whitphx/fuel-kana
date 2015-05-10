<?php

Autoloader::add_core_namespace('Kana');

Autoloader::add_classes(array(
	'Kana\\Kana'  => __DIR__.'/classes/kana.php',
));

if ( ! function_exists('k'))
{
	function k($string)
	{
		return \Kana\Kana::ruby($string);
	}
}
