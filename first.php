<?php
// 回答後記
// 寝ててもいける

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($a) = ints();
	list($b,$c) = ints();
	list($s) = strings();

	echo $a+$b+$c.' '.$s.PHP_EOL;
}

main();
