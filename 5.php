<?php
// 回答後記
// PHPの便利な関数をちょっと覚えてきたかも

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n,$a,$b)=ints();
	$sum=0;

	$sum=array_sum(str_split($n));

	for($i=1;$i<=$n;++$i){
		$sum=(int)array_sum(str_split($i));
		if ($sum >= $a && $sum <= $b) $ans_arr[] = $i;
	}

	$ans=array_sum($ans_arr);
	echo $ans.PHP_EOL;
}

main();
