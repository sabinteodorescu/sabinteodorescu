<?php	
	if(isset($_COOKIE['language']) && $_COOKIE['language'] == 'en') {
		include 'includes/variables-en.php';
	} else {
		include 'includes/variables-ro.php';
	}
	require 'includes/header.php';
?>
	<div class="hero" id="particles-js">
		<div class="welcome">
			<h1><?php echo $heroTitle; ?></h1>
			<a class="button" href="#about"><?php echo $heroButton; ?></a>
		</div>
	</div>

	<div class="wrapper">
		<div id="about" class="about section" name="about">
			<h2><?php echo $aboutTitle; ?></h2>
			<p><?php echo $aboutText; ?></p>
		</div>

		<div id="videos" name="videos" class="videos section">
			<h2><?php echo $lastVideo ?></h2>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/3FJsuHZ2Ffk?rel=0" frameborder="0" encrypted-media" allowfullscreen></iframe>
			<a href="<?php echo $videosLink['url']; ?>" class="button"><?php echo $videosLink['text']; ?></a>
		</div>

		<div id="lives" name="lives" class="videos section">
			<h2><?php echo $lastLive ?></h2>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/GUtO9UlVLSs?rel=0" frameborder="0" encrypted-media" allowfullscreen></iframe>
			<a href="<?php echo $livesLink['url']; ?>" class="button"><?php echo $livesLink['text']; ?></a>
		</div>

		<div class="postDivider section" name="posts" id="posts">
			<h2><?php echo $postTitle ?></h2>
			<?php
			foreach($posts as $key => $post) { ?>
				<div class="post">
					<p class="date"><?php echo $post['date']; ?></p>
					<h2 class="title"><?php echo $post['title']; ?></h2>
					<p class="content"><?php echo $post['content']; ?></p>
				</div>
			<?php } ?>
		</div>

	</div>

<?php require 'includes/footer.php'; ?> 