<?php
	
	$language = 'ro';
	$heroTitle = 'Welcome to my blog!';
	$heroButton = 'Read more';
	$videosLink = [
		'text' => 'Other videos', 
		'url' => 'videos.php'
	];
	$livesLink = [
		'text' => 'Other lives', 
		'url' => 'lives.php'
	];
	$aboutTitle = 'About Me';
	$aboutText = 'My name is Sabin and i\'m 11 years old. I have a YouTube channel on which I record gaming videos, and tutorials (more rarely). I like playing a lot of games and trying new ones. This site is a project to test my programming skills and to have a YouTube channel blog of mine.';
	$lastVideo = 'Latest video';
	$lastLive = 'Latest live';
	$formName = 'Name:';
	$formMessage = 'Message:';
	$formSubmit = 'Send';
	$postTitle = 'Posts';
	$posts =  array_reverse([
		0 => [
			'date' => '19 jan. 2018',
			'title' => 'Blog',
			'content' => 'I\'ve made a new blog on which i will put my new videos and posts to keep you updated! Subscribe to my YouTube channel if you haven\'t yet. (you\'re not forced to do it, of course).'
		],
		1 => [
			'date' => '8 mar. 2018',
			'title' => 'Domain',
			'content' => 'This site is officially on the internet now, getting it as a gift for my birthday, today. I have turned 11 years old.'
		]
	]);
	$menu = [
		0 => [
			'text' => 'About',
			'url' => 'index.php#about',
			'target' => false
		],
		1 => [
			'text' => 'Videos',
			'url' => 'index.php#videos',
			'target' => false
		],
		2 => [
			'text' => 'Lives',
			'url' => 'index.php#lives',
			'target' => false
		],
		3 => [
			'text' => 'Posts',
			'url' => 'index.php#posts',
			'target' => false
		],
		4 => [
			'text' => 'Contact',
			'url' => 'index.php#footer',
			'target' => false
		],
		5 => [
			'text' => 'YouTube',
			'url' => 'https://www.youtube.com/Sabyoficial?sub_confirmation=1',
			'target' => true
		],
		6 => [
			'text' => 'Discord',
			'url' => 'https://discord.gg/y7DAEFZ',
			'target' => true
		]
	];

?>