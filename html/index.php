<?php
$css_updated = "20140113d";
$title = "SchnitMyDadSays";
?>
<!-- Website design and development by Brendan Murty - brendanmurty.com -->
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<meta name="google-site-verification" content="c_GZamtpqx8T9vZ0REBwjhg9C-nW1EAfLZ5dD_3ztOw" />
<title><?= $title ?></title>
<link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css">
<link href="/style/main.css?v=<?= $css_updated ?>" rel="stylesheet" type="text/css">
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-710527-8']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
<body>
	<div id="contain">
		<header>
			<h1><a href="/"><?= $title ?></a></h1>
		</header>
		<div id="main">
			<img class="avatar" src="/images/schnitzel.jpg" style="height:400px;width:400px" alt="Veal Schnitzel">
			<p class="description">Schnitzel reviews, comments and general chatter. Based out of Sydney, Australia, but good schnit knows no borders. Get into a schnitty!</p>
			<ul class="links">
				<li><a href="http://twitter.com/schnitmydadsays">Twitter</a></li>
				<li><a href="http://facebook.com/schnitmydadsays">Facebook</a></li>
				<li><a href="https://market.android.com/details?id=com.schnitzel">Android</a></li>
			</ul>
		</div>
	</div>
</body>
</html>