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
	$content = file_get_contents("pages/$current_page.html");
	$content = str_replace('%_TODAY_%', date('d/m/Y'), $content);
	$content = str_replace('%_HOUR_%', date('H:i'), $content);
	echo $content;
?>
<?php include 'include/footer.html'; ?>