<?
$code_path=dirname(dirname(dirname(__FILE__))).'/brendanmurty.com/html/common';
include_once($code_path.'/functions.php');

$title="SchnitMyDadSays";
?>
<!-- Website design and development by Brendan Murty - brendanmurty.com -->
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<meta name="google-site-verification" content="c_GZamtpqx8T9vZ0REBwjhg9C-nW1EAfLZ5dD_3ztOw" />
<title><?=$title?></title>
<link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css">
<link href="/style/main.css?v=2" rel="stylesheet" type="text/css">
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
			<h1><?=$title?></h1>
		</header>
		<div id="main">
			<h2 class="first">About Us</h2>
			<img class="twitter_avatar" src="/images/avatar.jpg" style="height:73px;width:73px" alt="schnitmydadsays's Twitter Avatar">
			<p class="twitter_description">Schnitzel reviews, comments and general chatter. Based out of Sydney, Australia, but good schnit knows no borders. Get into a schnitty!</p>
			<h2>Find Us</h2>
			<ul class="links">
				<li><a href="http://twitter.com/schnitmydadsays">Twitter</a></li>
				<li><a href="http://facebook.com/schnitmydadsays">Facebook</a></li>
				<li><a href="https://market.android.com/details?id=com.schnitzel">Android App</a></li>
			</ul>
		</div>
		<footer>
			<p class="credit"><?=$credit?></p>
		</footer>
	</div>
</body>
</html>