<?php

/*
 * html.inc.php
 *
 * HTML出力プラグイン
 *
 * @author		オヤジ戦隊ダジャレンジャー <red@dajya-ranger.com>
 * @copyright	Copyright © 2019, dajya-ranger.com
 * @link		https://dajya-ranger.com/pukiwiki/embed-facebook-page/
 * @example		#html(<HTML Code>)
 * @example		&html(<HTML Code>);
 * @license		Apache License 2.0
 * @version		0.1.1
 * @since 		0.1.1 2019/10/25 引数チェック追加
 * @since 		0.1.0 2019/08/20 暫定初公開
 *
 */

function plugin_html_convert() {
	// ブロック型プラグイン #html(<出力するHTML内容>)
	$num = func_num_args();
	if ($num < 1) {
		// 引数が存在しない場合
		return '#html(HTML Code)';
	}
	$args = func_get_args();
	$args = array_pop($args);
	return $args;
}

function plugin_html_inline() {
	// インライン型プラグイン &html(<出力するHTML内容>);
	$num = func_num_args();
	if ($num < 1) {
		// 引数が存在しない場合
		return '&html(HTML Code);';
	}
	$args = func_get_args();
	array_pop($args);
	return join(',', $args);
}

?>
