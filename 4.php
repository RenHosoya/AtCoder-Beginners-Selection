<?php
// 回答後記
// 大学の時僕は多重ループかけませんでした

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($a)=ints();
	list($b)=ints();
	list($c)=ints();
	list($x)=ints();
	$ans=0;

	// 3重ループで解く
	for($i=0;$i<=$a;$i++){
		for($j=0;$j<=$b;$j++){
			for($k=0;$k<=$c;$k++){
				$sum=($i*500)+($j*100)+($k*50);
				if ($sum===$x) {
					$ans++;
					break;
				} else if ($sum > $x) {
					// 計算する回数を減らす作戦
					// これって全体的に考えればあまり意味ない？
					break;
				}
			}
		}
	}
	echo $ans.PHP_EOL;
}

main();
