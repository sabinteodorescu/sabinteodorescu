<!doctype html>

<html>

<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-58486815-3"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

 		 gtag('config', 'UA-58486815-3');
	</script>

	<title>Sabin Teodorescu</title>
	<meta name="google-site-verification" content="9L9zJjOaB_tndilB2ldpsWl6UGYGzYcpxPR49BxLpJU" />
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<meta name="description" content="Acesta este blogul lui Sabin" />
	<meta name="keywords" content="test, saby, blog, saby blog, sabinteodorescu.com" />
	<meta http-equiv="author" content="Sabin Teodorescu" />
	<meta http-equiv="content-language" content="ro-ro" />
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

	<nav class="nav">	
		<ul class="navlinks">	
			<li><a href="index.php#top"><i class="fa fa-home"></i></a></li>
			<?php
				foreach($menu as $key => $value) { ?>
					<li><a href="<?php echo $value['url']; ?>" <?php if($value['target'] == true) echo 'target="_blank"'; ?>><?php echo $value['text']; ?></a></li>
			<?php } ?>
		</ul>
		<ul class="settings">
			<li><a href="#" class="lmbutton"><i class="fa fa-lightbulb-o"></i></a></li>
			<li><a href="#" class="enbutton"><img src="assets/img/<?php echo $language; ?>.svg" alt="Ro"></a></li>	
		</ul>
	</nav>

	<div name="top"></div>