<?php

//サイトURL(スラッシュ付きで)
$SITE_URL = 'http://localhost/testphp/iine/';

//サイトタイトル
$SITE_TITLE = 'うんこボタン';

//ボタン表記
$BUTTON_CAPTION = 'うんこ!';



//タイムゾーン設定
ini_set('date.timezone',"Asia/Tokyo");
mb_internal_encoding("UTF-8");

//キャッシュ無効ヘッダ出力
header('Pragma: no-cache');
header('Cache-Control: private,no-store,no-cache,must-revalidate');
header('Expires: "Thu, 01 Dec 1994 16:00:00 GMT"');


