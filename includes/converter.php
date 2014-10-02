<?php
	$txt = file_get_contents('books2/' . $type . 's/' . $story . '.' . $type, FILE_USE_INCLUDE_PATH);

    if ($type == 'htm'){
	    $pos1 = strpos($txt, '<body>');
		$pos2 = strpos($txt, '</body>');
		$txt = substr($txt, $pos1, $pos2);

		$txt = preg_replace('/<\/html>/','',$txt);

		$txt = preg_replace('/<\/body>/','</div>',$txt);
		$txt = preg_replace('/<body>/','<div>',$txt);
	} else if($type == 'txt'){
		$txt = htmlspecialchars($txt);
		$paragraphs = preg_split('/\n\n/', $txt);

		$html = '<div>';
		$count = 0;

		foreach ($paragraphs as $paragraph){
			$html = $html . '<p>' . $paragraphs[$count] . '</p>';

			$count++;
		}
		
		print_r($html);
	}


	echo $txt;
?>