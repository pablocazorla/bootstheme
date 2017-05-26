<?php
	$list = [
		'index'
	];

	for($i = 0;$i < count($list);$i++){
		copy('http://boot.dev/'.$list[$i].'.php?q=1', '../'.$list[$i].'.html');
		echo 'Rendered '.$list[$i].'.html';
		echo '<br>------------------------------<br>';
	}
?>
