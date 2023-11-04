<?php
// 回答後記
// 関数内でreturnをすると多重ループを抜けるということを初めて知った
// a,bが定まればcが定まり計算量削減できる発想はなかった
// $k>=0 が出てこないでいくつかミスってしまった

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function a($n,$y) {
	for($i=0;$i<=$n;++$i) {
		for($j=0;$j<=$n;++$j) {
			$k=$n-($i+$j);
			$sum = ($i*10000)+($j*5000)+($k*1000);
			if ($sum===$y && $n===($i+$j+$k) && $k >= 0) {
				return [$i,$j,$k];
			}
		}
	}
	return [0,0,0];
}

function main() {
	list($n,$y)=ints();
	list($i,$j,$k) = a($n,$y);
	echo ($i===0 && $j===0 && $k === 0) ? '-1 -1 -1'.PHP_EOL : $i.' '.$j.' '.$k.PHP_EOL;

}

main();
