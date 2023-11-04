<?php
// 回答後記
// アリスといえば緑黄色社会っていうバンドのAliceっていう曲が好きです

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n)=ints();
	$a=ints();
	$sum_arice=0;
	$sum_bob=0;
	$ans=0;

	// 降順にソート
	rsort($a);

	for($i=0;$i<$n;++$i) {
		if($i%2===0) {
			$sum_arice += $a[$i];
		} else {
			$sum_bob += $a[$i];
		}
	}

	$ans = $sum_arice - $sum_bob;
	echo $ans.PHP_EOL;
}

main();
