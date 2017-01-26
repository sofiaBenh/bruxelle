<?php
	$current_page = 'index';
	$pages = array('index' => 'active', 'services' => '', 'reservation' => '', 'contact' => '');
?>
<?php
	$header = file_get_contents("include/header.html");
	foreach($pages as $page => $class){
		$header = str_replace('%_'.strtoupper($page).'_ACTIVE_%', $class, $header);
	}
	echo $header;
?>
<?php
	include "pages/$current_page.html";
?>
<?php include 'include/footer.html'; ?>