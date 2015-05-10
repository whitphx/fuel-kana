<?php
namespace Kana;

class Kana
{
	public static function ruby($source)
	{
		return preg_replace('/"(.*?)"\((.*?)\)/u', '<ruby><rb>$1</rb><rp>(</rp><rt>$2</rt><rp>)</rp></ruby>', $source);
	}
}