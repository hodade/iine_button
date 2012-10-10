<?php
include_once('inc.php');

$title = $_POST['title'];
$url = $_POST['url'];
$count = 0;

//DB操作
if($db = sqlite_open('iine.db',0705,$errmsg)){

	//サニタイズ
	$title_sqlite = sqlite_escape_string($title);
	$url_sqlite = sqlite_escape_string($url);
	$now = sqlite_escape_string(time());

	//現在のカウントを取得
	$sql = "SELECT count FROM iine WHERE url = '$url_sqlite'";
	$result = sqlite_query($db, $sql);
	if ($array = sqlite_fetch_array($result)) {
		$add = rand(1,2);
		$count = $array['count'] + $add;
		//カウントを増やす
		$sql = "UPDATE iine SET count = $count, udate = $now, title = '$title_sqlite' WHERE url = '$url_sqlite'";
		sqlite_query($db, $sql);
	} else {
		//新規
		$count = 1;
		$sql = "INSERT INTO iine (title,url,count,rdate,udate) VALUES ('$title','$url',$count,$now,$now)";
		sqlite_query($db, $sql);
	}

	sqlite_close($db);
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
