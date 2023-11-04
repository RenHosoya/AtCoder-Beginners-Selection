<?php
// 回答後記
// 一瞬考えたけど流石に余裕

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($a,$b) = ints();

	if (($a*$b)%2===0) {
		echo 'Even'.PHP_EOL;
	} else if(($a*$b)%2===1) {
		echo 'Odd'.PHP_EOL;
	}
}

main();
