--TEST--
EUC-JP to SJIS
--SKIPIF--
<?php include('skipif.inc'); ?>
--INI--
error_reporting=2039
--FILE--
<?php
/* include('test.inc'); */
/* charset=EUC-JP */

$str = "
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
日本語テキストとEnglish Text
";

$str = iconv("EUC-JP", "SJIS", $str);
$str = base64_encode($str);
echo $str."\n";

?>
--EXPECT--
CpP6lnuM6oNlg0yDWINngsZFbmdsaXNoIFRleHQKk/qWe4zqg2WDTINYg2eCxkVuZ2xpc2ggVGV4dAqT+pZ7jOqDZYNMg1iDZ4LGRW5nbGlzaCBUZXh0CpP6lnuM6oNlg0yDWINngsZFbmdsaXNoIFRleHQKk/qWe4zqg2WDTINYg2eCxkVuZ2xpc2ggVGV4dAqT+pZ7jOqDZYNMg1iDZ4LGRW5nbGlzaCBUZXh0CpP6lnuM6oNlg0yDWINngsZFbmdsaXNoIFRleHQKk/qWe4zqg2WDTINYg2eCxkVuZ2xpc2ggVGV4dAqT+pZ7jOqDZYNMg1iDZ4LGRW5nbGlzaCBUZXh0CpP6lnuM6oNlg0yDWINngsZFbmdsaXNoIFRleHQKk/qWe4zqg2WDTINYg2eCxkVuZ2xpc2ggVGV4dAqT+pZ7jOqDZYNMg1iDZ4LGRW5nbGlzaCBUZXh0CpP6lnuM6oNlg0yDWINngsZFbmdsaXNoIFRleHQKk/qWe4zqg2WDTINYg2eCxkVuZ2xpc2ggVGV4dAqT+pZ7jOqDZYNMg1iDZ4LGRW5nbGlzaCBUZXh0CpP6lnuM6oNlg0yDWINngsZFbmdsaXNoIFRleHQKk/qWe4zqg2WDTINYg2eCxkVuZ2xpc2ggVGV4dAqT+pZ7jOqDZYNMg1iDZ4LGRW5nbGlzaCBUZXh0CpP6lnuM6oNlg0yDWINngsZFbmdsaXNoIFRleHQKk/qWe4zqg2WDTINYg2eCxkVuZ2xpc2ggVGV4dAqT+pZ7jOqDZYNMg1iDZ4LGRW5nbGlzaCBUZXh0CpP6lnuM6oNlg0yDWINngsZFbmdsaXNoIFRleHQKk/qWe4zqg2WDTINYg2eCxkVuZ2xpc2ggVGV4dAqT+pZ7jOqDZYNMg1iDZ4LGRW5nbGlzaCBUZXh0CpP6lnuM6oNlg0yDWINngsZFbmdsaXNoIFRleHQKk/qWe4zqg2WDTINYg2eCxkVuZ2xpc2ggVGV4dAqT+pZ7jOqDZYNMg1iDZ4LGRW5nbGlzaCBUZXh0CpP6lnuM6oNlg0yDWINngsZFbmdsaXNoIFRleHQKk/qWe4zqg2WDTINYg2eCxkVuZ2xpc2ggVGV4dAqT+pZ7jOqDZYNMg1iDZ4LGRW5nbGlzaCBUZXh0CpP6lnuM6oNlg0yDWINngsZFbmdsaXNoIFRleHQKk/qWe4zqg2WDTINYg2eCxkVuZ2xpc2ggVGV4dAqT+pZ7jOqDZYNMg1iDZ4LGRW5nbGlzaCBUZXh0CpP6lnuM6oNlg0yDWINngsZFbmdsaXNoIFRleHQKk/qWe4zqg2WDTINYg2eCxkVuZ2xpc2ggVGV4dAqT+pZ7jOqDZYNMg1iDZ4LGRW5nbGlzaCBUZXh0Cg==

