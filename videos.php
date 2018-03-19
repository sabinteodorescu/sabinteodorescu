<?php	
	if(isset($_COOKIE['language']) && $_COOKIE['language'] == 'en') {
		include 'includes/variables-en.php';
	} else {
		include 'includes/variables-ro.php';
	}
	require 'includes/header.php';
	require 'includes/ivideos.php';
?>

	<div class="section">
	    <?php foreach($videos as $key => $url): ?>
			<iframe width="560" height="315" src="<?php echo $url; ?>" frameborder="0" encrypted-media" allowfullscreen></iframe>
		<?php endforeach; ?>
	</div>

<?php require 'includes/footer.php'; ?>