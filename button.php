<?php
include_once('inc.php');

$url = $_SERVER['HTTP_REFERER'];
$count = 0;

//DB操作
if($db = sqlite_open('iine.db',0705,$errmsg)){

	//テーブル作成
	$sql = "CREATE TABLE iine (title text, url text, count integer, rdate integer, udate integer)";
	@sqlite_query($db, $sql);
	
	//サニタイズ
	$url_sqlite = sqlite_escape_string($url);
	
	//現在のカウントを取得
	$sql = "SELECT count FROM iine WHERE url='$url'";
	$result = sqlite_query($db, $sql);
	if ($array = sqlite_fetch_array($result)) {
		$count = $array['count'];
	}
	
	sqlite_close($db);
} else {
	//print_r($errmsg);
}

?>
<html>
<head>
<meta name="viewport" content="width=500px;" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="言い値,いいね">
<meta name="description" content="これは言い値ボタンです。">
<title><?= $SITE_TITLE ?></title>
<style type="text/css">
<!--
* {
	font-family:'ヒラギノ角ゴ Pro W3','Hiragino Kaku Gothic Pro','メイリオ',Meiryo,'ＭＳ Ｐゴシック',sans-serif;
	margin:0px; padding:0px;
}
//-->
</style>
</head>
<body>

<form name="form1" action="click.php" method="POST"><input type="hidden" name="title"><input type="hidden" name="url" value="<?= $url ?>"><input type="submit" value="<?= $BUTTON_CAPTION ?>" style="font-size:9px; width:45px; height:20px;"><span style="font-size:9px;"><?= $count ?>円</span></form>

<script type="text/javascript">
<!--
document.form1.title.value = parent.document.title;
//-->
</script>

</body>
</html>
