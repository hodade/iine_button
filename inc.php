<?php

//サイトタイトル
$SITE_TITLE = '言い値ボタン';

//ボタン表記
$BUTTON_CAPTION = '言い値!';


ini_set('date.timezone',"Asia/Tokyo");
mb_internal_encoding("UTF-8");

/*
//proxy
$sc_opts = array(
	'http' =>array(
	'proxy' => 'tcp://proxy.css.fujitsu.com:8080',
	'request_fulluri' => true
));
$sc = stream_context_create($sc_opts);
*/

//キャッシュ無効ヘッダ出力
header('Pragma: no-cache');
header('Cache-Control: private,no-store,no-cache,must-revalidate');
header('Expires: "Thu, 01 Dec 1994 16:00:00 GMT"');


?>