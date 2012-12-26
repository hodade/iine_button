<?php
include_once('inc.php');

//DB操作
if($db = sqlite_open('iine.db',0705,$errmsg)){
	
	//現在のカウントを取得
	$sql = "SELECT * FROM iine WHERE url <> '' ORDER BY udate DESC LIMIT 0,100";
	$result = sqlite_query($db, $sql);
	$sites = sqlite_fetch_all($result);
	sqlite_close($db);
} else {
	//print_r($errmsg);
}

//埋め込みHTMLを作成
$umekomi = '<iframe src="'.$SITE_URL.'button.php" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowTransparency="true"></iframe>';

?>
<html>
<head>
<meta name="viewport" content="width=600px;" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?= $SITE_TITLE ?></title>
<style type="text/css">
<!--
* {
	font-family:'ヒラギノ角ゴ Pro W3','Hiragino Kaku Gothic Pro','メイリオ',Meiryo,'ＭＳ Ｐゴシック',sans-serif;
}
//-->
</style>
</head>
<body bgcolor="#f0f0f0">

<div style="width:600px; border:1px solid #1D4088; background:#627AAD; padding:5px;">
	<span style="color:white; font-weight:bold;"><?= $SITE_TITLE ?></span>
</div>

<div style="width:600px; border:1px solid #DDDDDD; background:white; padding:5px;">

	<div>
		The <?=$BUTTON_CAPTION?> button lets a user share your content with friends on <?=$BUTTON_CAPTION?>Site. When the user clicks the <?=$BUTTON_CAPTION?> button on your site, a story appears in the user's friends' News Feed with a link back to your website.
	</div>

	<div style="height:20px; overflow:hidden;"></div>

	<div style="margin-left:250px;">
		<?=$umekomi?>
	</div>

	<div style="height:20px; overflow:hidden;"></div>

	<h3><?=$BUTTON_CAPTION?>ボタン設置コード</h3>
	<textarea style="height:150px; width:500px;"><?= htmlspecialchars($umekomi); ?></textarea>

	<br>
	<br>

	<h3><?=$BUTTON_CAPTION?>ランキング</h3>

	<? foreach ($sites as $site) { ?>
		<a href="<?= $site['url'] ?>"><?= $site['title'] != '' ? $site['title'] : $site['url'] ?></a>
		&nbsp;
		<?= $site['count'] ?><?=$BUTTON_CAPTION?>
		<br>
	<? } ?>

	<br>

</div>

<div style="height:20px; overflow:hidden;"></div>

<div style="width:600px; text-align:center; font-size:10px; color:gray;">
	2012 HODADE SYSTEMS
</div>

</body>
</html>
