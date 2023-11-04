<?php
// 回答後記
// コードが終わるまでint型を貫き通したかったんだ

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($s) = ints();
	$n = strlen($s);
	$ans = 0;

	// int型で各桁を配列に格納する
	for($i=0;$i<$n;$i++) {
		$s_arr[$i] = $s%10;
		$s = (int)($s/10);
	}

	for ($i=0;$i<$n;$i++) {
		if ($s_arr[$i] === 1) {
			$ans++;
		}
	}

	echo $ans.PHP_EOL;
}

main();
