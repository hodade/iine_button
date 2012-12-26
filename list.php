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

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
<!--
//-->
</script>

</head>
<body bgcolor="#f0f0f0">

<div style="width:600px; border:1px solid #1D4088; background:#627AAD; padding:5px;">
	<span style="color:white; font-weight:bold;"><a href="./" style="color:white; text-decoration:none;">fakebook</a></span>
</div>

<div style="width:600px; border:1px solid #DDDDDD; background:white; padding:5px;">

<div style="text-align:right;">
<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fhodade.adam.ne.jp%2Fiine%2F&amp;layout=button_count&amp;show_faces=true&amp;width=100&amp;action=like&amp;font&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
</div>

<div>
言い値Sites
</div>

<? foreach ($sites as $site) { ?>
	<a href="<?= $site['url'] ?>"><?= $site['title'] != '' ? $site['title'] : $site['url'] ?></a>
	&nbsp;
	<?= $site['count'] ?>円
	<br>
<? } ?>

<br>

</div>

<div style="height:20px; overflow:hidden;"></div>

<div style="width:600px; text-align:center; font-size:10px; color:gray;">
	<a href="../">2012 HODADE SYSTEMS</a>
</div>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6357211-16']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>
