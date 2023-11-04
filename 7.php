<?php
// 回答後記
// もち食べたい

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n)=ints();
	for($i=0;$i<$n;++$i){
		list($d[])=ints();
	}

	// 重複分を無くす
	$unique_arr = array_unique($d);
	$ans = count($unique_arr);


	echo $ans.PHP_EOL;
}

main();
