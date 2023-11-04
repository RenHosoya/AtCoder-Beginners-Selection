<?php
// 回答後記
// めちゃくちゃ難しい
// 一番手も足も出なかった(泣)
// 答えを記載したのは「10_ans.php」

function strings() { return explode(' ', trim(fgets(STDIN))); }
function ints() { return array_map('intval', strings()); }
function doubles() { return array_map('doubleval', strings()); }
function output(...$args) { echo implode(' ', $args), "\n"; }

function main() {
	list($n) = ints();
	for ($i=0;$i<$n;++$i) {
		list($t[],$x[],$y[]) = strings();
	}

	var_dump($n,$t,$x,$y);exit;
}

main();
