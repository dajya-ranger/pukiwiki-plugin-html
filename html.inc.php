<?php

/*
 * html.inc.php
 *
 * HTML出力プラグイン
 *
 * 作成者：オヤジ戦隊ダジャレンジャー(Twitter:@dajya_ranger_)
 * サイト：SEの良心（https://dajya-ranger.com/）
 *
 * 修正歴：
 *
 * Version 0.1.0
 * Date    2019/08/20
 * Update  
 * License The same as PukiWiki
 *
 */

function plugin_html_convert() {
	// ブロック型プラグイン #html(<出力するHTML内容>)
	$args = func_get_args();
	$args = array_pop($args);
	return $args;
}

function plugin_html_inline() {
	// インライン型プラグイン &html(<出力するHTML内容>);
	$args = func_get_args();
	array_pop($args);
	return join(',', $args);
}

?>
