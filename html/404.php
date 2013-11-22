<?
$title="SchnitMyDadSays";
$error="Page not found (404)";
?>
<!-- Website design and development by Brendan Murty - brendanmurty.com -->
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<meta name="google-site-verification" content="c_GZamtpqx8T9vZ0REBwjhg9C-nW1EAfLZ5dD_3ztOw" />
<title><?=$title?> - <?=$error?></title>
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
			<h2 class="first"><?=$error?></h2>
			<p>Can't find the page you're looking for.</p>
			<p><a href="/">Go to the home page</a></p>
		</div>
	</div>
</body>
</html>