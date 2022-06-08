	<?php
		session_start();
		session_destroy();


$url = 'http://skilltree';
header("Location: " . $url);
die;
	?>