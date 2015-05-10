<?php

namespace Kana;

/**
 * @group Package
 * @group Kana
 */

class Test_Kana extends \TestCase
{
	public function test_add_ruby_tag()
	{
		$input = '"吾輩"(わがはい)は"猫"(ねこ)である。"名前"(なまえ)はまだ"無"(な)い。';
		$expect = '<ruby><rb>吾輩</rb><rp>(</rp><rt>わがはい</rt><rp>)</rp></ruby>は<ruby><rb>猫</rb><rp>(</rp><rt>ねこ</rt><rp>)</rp></ruby>である。<ruby><rb>名前</rb><rp>(</rp><rt>なまえ</rt><rp>)</rp></ruby>はまだ<ruby><rb>無</rb><rp>(</rp><rt>な</rt><rp>)</rp></ruby>い。';
		
		$this->assertEquals($expect, Kana::ruby($input));
	}
	
	public function test_alias()
	{
		$input = '"吾輩"(わがはい)は"猫"(ねこ)である。"名前"(なまえ)はまだ"無"(な)い。';
		$expect = '<ruby><rb>吾輩</rb><rp>(</rp><rt>わがはい</rt><rp>)</rp></ruby>は<ruby><rb>猫</rb><rp>(</rp><rt>ねこ</rt><rp>)</rp></ruby>である。<ruby><rb>名前</rb><rp>(</rp><rt>なまえ</rt><rp>)</rp></ruby>はまだ<ruby><rb>無</rb><rp>(</rp><rt>な</rt><rp>)</rp></ruby>い。';
		
		$this->assertEquals($expect, k($input));
	}
}

?>
