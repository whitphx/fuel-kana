# fuel-kana

日本語のフリガナをHTMLで表現するための`<ruby>`タグを出力するヘルパーを提供します．
一応FuelPHPのパッケージですが，それ以外でも`classes/kana.php`をインポートすれば使えるはずです．
というか，実体は一行の`preg_replace`なので正規表現をコピペするだけOKです．

一応，FuelPHPのためのブートストラップファイルである`bookstrap.php`にエイリアスが定義してあったりします．

## Kana\Kana::ruby($source)
`$source`に所定の書式でフリガナを振りたい文字列を入力すると，`<ruby>`タグを付与して出力します．

  例
  ```php
  $input = '"吾輩"(わがはい)は"猫"(ねこ)である。"名前"(なまえ)はまだ"無"(な)い。';
  $output = \Kana\Kana::ruby($input);
  echo $output; //<ruby><rb>吾輩</rb><rp>(</rp><rt>わがはい</rt><rp>)</rp></ruby>は<ruby><rb>猫</rb><rp>(</rp><rt>ねこ</rt><rp>)</rp></ruby>である。<ruby><rb>名前</rb><rp>(</rp><rt>なまえ</rt><rp>)</rp></ruby>はまだ<ruby><rb>無</rb><rp>(</rp><rt>な</rt><rp>)</rp></ruby>い。
  ```
  
例のとおり，`$source`の書式は，

```
"対象のテキスト"(ふりがな)
```

です．
これが

```
ruby><rb>対象のテキスト</rb><rp>(</rp><rt>ふりがな</rt><rp>)</rp></ruby>
```

に変換されます．

## k($source)
`Kana\Kana::ruby($source)`のエイリアスです．
