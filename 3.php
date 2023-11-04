<?php
// 回答後記
// めちゃくちゃ通らなかった。結局通ったけどなんで通ったかはわからぬ

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n)=ints();
	$a=ints();
	$flg=[];
	$ans=0;

	for(;;) {
		// 偶数かを判定する
		for($i=0;$i<$n;$i++) {
			if($a[$i]%2===0) {
				// 偶数の場合
				$flg[$i]=1;
			} else {
				// 奇数の場合
				$flg[$i]=0;
			}
		}
		// flgが全て偶数かを調査する
		$flg1=0;
		for($i=0;$i<$n;$i++) {
			if($flg[$i]===1) {
				$flg1++;
			} else {
				break;
			}
		}

		if ($flg1===$n) {
			// 全て偶数だった場合
			for($j=0;$j<$n;$j++) {
				$a[$j] = (int)($a[$j]/2);
			}
			$ans++;
		} else {
			// 奇数も混じっていた場合
			break;
		}
	}
	echo $ans.PHP_EOL;
}

main();
