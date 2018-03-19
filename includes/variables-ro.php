<?php
	
	$language = 'gb';
	$heroTitle = 'Bun venit pe blog-ul meu!';
	$heroButton = 'Citeste mai mult';
	$videosLink = [
		'text' => 'Restul videoclipurilor', 
		'url' => 'videos.php'
	];
	$livesLink = [
		'text' => 'Restul live-urilor', 
		'url' => 'lives.php'
	];
	$aboutTitle = 'Despre Mine';
	$aboutText = 'Numele meu este Sabin si am 11 ani. Am un canal de YouTube in care fac videoclipuri cu gaming, si tutoriale (mai rar). Imi place sa joc multe jocuri si sa incerc unele noi. Acest site este un proiect ca sa imi testez "skill-urile" de programat si sa am un blog pentru canalul meu de YouTube.';
	$lastVideo = 'Ultimul videoclip';
	$lastLive = 'Ultimul live';
	$formName = 'Nume:';
	$formMessage = 'Mesaj:';
	$formSubmit = 'Trimite';
	$announcementsTitle = 'Anunturi';
	$announcements =  array_reverse([
		0 => [
			'date' => '19 ian. 2018',
			'title' => 'Blog',
			'content' => 'Am facut un nou blog pe care o sa postez noile videoclipuri si anunturile! Dati subscribe la canalul meu de YouTube daca nu ati facut-o inca (desigur nu sunteti obligati).'
		],
		1 => [
			'date' => '8 mar. 2018',
			'title' => 'Domeniu',
			'content' => 'Acest site este oficial pe internet de acum, primind acest domeniu cadou de ziua mea, astazi. Am implinit 11 ani.'
		]
	]);
	$menu = [
		0 => [
			'text' => 'Despre',
			'url' => 'index.php#about',
			'target' => false
		],
		1 => [
			'text' => 'Videoclipuri',
			'url' => 'index.php#videos',
			'target' => false
		],
		2 => [
			'text' => 'Live-uri',
			'url' => 'index.php#lives',
			'target' => false
		],
		3 => [
			'text' => 'Anunturi',
			'url' => 'index.php#ann',
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