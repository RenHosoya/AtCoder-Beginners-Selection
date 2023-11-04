<?php
// 回答後記
// スマートに解くためstring型で解いた

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($s) = strings();
	$s_arr = str_split($s);
	$ans = 0;

	for ($i=0;$i<strlen($s);$i++) {
		if ($s_arr[$i] === '1') {
			$ans++;
		}
	}

	echo $ans.PHP_EOL;
}

main();
