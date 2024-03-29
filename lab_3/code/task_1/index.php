<?php

// a.
$str = 'ahb acb aeb aeeb adcb axeb acccb';
$regexp = '/a..b/';
$result = preg_filter($regexp, '*$0*', $str);

echo $result, "\n";

// b.
$str = 'a1b2c3';
$regexp = '/[0-9]/';
$result = preg_replace_callback($regexp, function($matches) { return $matches[0] ** 3; }, $str);

echo $result, "\n";