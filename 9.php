<?php
// 回答後記
// 1時間半かかった。。。
// dream「er」aseのパターンを考慮するのが大変だった
// 正直連想配列を作る必要はなかったかも(汗)
// でも解けたからOKです！

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($s) = strings();
	$match_str = ['dream'=>0,'dreamer'=>0,'erase'=>0,'eraser'=>0];
	$ans = '';

	for ($i=0;$i<strlen($s);++$i) {
		$ans .= $s[$i];
		if ($ans === 'dream') {
			if (isset($s[$i+2]) && $s[$i+1].$s[$i+2] === 'er') {
				// 「er」が後ろにある場合
				if (isset($s[$i+5]) && $s[$i+3].$s[$i+4].$s[$i+5] === 'ase') {
					// 集合論で言う「かつ」の領域
					// 「または」で条件を分岐できればスマートだったかも？
					// ただ「または」で記述した場合、ぱっと見で複雑になりそう
				} else {
					$i = $i + 2;
					$ans .= 'er';
				}
			}
			$match_str[$ans]++;
			$ans = '';
		} elseif ($ans === 'erase') {
			if (isset($s[$i+1]) && $s[$i+1] === 'r') {
				// 「r」が後ろにある場合
				$i = $i + 1;
				$ans .= 'r';
			}
			$match_str[$ans]++;
			$ans = '';
		}

	}
	echo $ans === '' ? 'YES'.PHP_EOL : 'NO'.PHP_EOL;
}

main();
