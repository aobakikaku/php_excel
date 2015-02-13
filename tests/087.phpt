--TEST--
test Book::setLocale()
--SKIPIF--
<?php if (!extension_loaded("excel")) die("skip - Excel extension not found"); ?>
--FILE--
<?php

$book = new ExcelBook();
$book->setLocale('UTF-8');

$sheet = $book->addSheet('Sheet1');

echo 'OK';

?>
--EXPECT--
OK
