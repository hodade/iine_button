<?php
include_once('inc.php');

//擬似アクセス集中機能
srand(intval(time() / 30));
if (rand(1,20) == 1) {
    echo "<h1>";
	echo "Service Temporarily Unavailable";
    echo "</h1>";
    exit;
}

?>
<html>
<head>
<meta name="viewport" content="width=600px;" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="いいね,言い値">
<meta name="description" content="これは言い値ボタンです。">
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
	<span style="color:white; font-weight:bold;">fakebook</span>
</div>

<div style="width:600px; border:1px solid #DDDDDD; background:white; padding:5px;">

	<div>
		<div style="float:right;">
		&nbsp;
		<a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-lang="ja">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
		</div>

		<div style="float:right;">
		&nbsp;
		<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fhodade.adam.ne.jp%2Fiine%2F&amp;layout=button_count&amp;show_faces=true&amp;width=100&amp;action=like&amp;font&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
		</div>

		<div style="clear:both;"></div>
	</div>

	<h3>言い値 Button</h3>
	<div>
		The 言い値 button lets a user share your content with friends on 言い値Site. When the user clicks the 言い値 button on your site, a story appears in the user's friends' News Feed with a link back to your website.
	</div>

	<div style="height:20px; overflow:hidden;"></div>

	<iframe src="./button.php" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowTransparency="true"></iframe>

	<div style="height:20px; overflow:hidden;"></div>

	<h3>Get Code</h3>
	<textarea style="height:150px; width:500px;"><?= htmlspecialchars('<iframe src="http://hodade.adam.ne.jp/iine/button.php" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowTransparency="true"></iframe>'); ?></textarea>

	<br>
	<br>

	<h3>Wall</h3>
	→<a href="list.php">言い値Sites</a><br>
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
