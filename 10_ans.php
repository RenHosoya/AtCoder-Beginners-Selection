<?php

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	// 標準入力
	list($n) = ints();
	for ($i=0;$i<$n;++$i) {
		list($t[],$x[],$y[]) = strings();
	}

	// 初期化
	$flg = 0;
	$pt = 0;
	$px = 0;
	$py = 0;

	for ($i=0;$i<$n;++$i) {
		// 相対距離
		$d = abs($px - $x[$i]) + abs($py - $y[$i]);
		// 相対時間
		$dt = $t[$i] - $pt;

		// 時間より距離が大きい場合
		if ($dt < $d) {
			$flg = 1;
		}

		// 時間と距離の差が奇数の場合
		if (($dt - $d) % 2 == 1) {
			$flg = 1;
		}

		// 更新
		$pt = $t[$i];
		$px = $x[$i];
		$py = $y[$i];
	}
	
	echo $flg === 1 ? 'No'.PHP_EOL : 'Yes'.PHP_EOL;

}

main();
