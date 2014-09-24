<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/universal.css"/>
	</head>
	<body>
		<div class="themeHolder">
		<h1>Pick a book:</h1>
			<?php
				$dir = opendir('books/');

				while ($read = readdir($dir)){
					if ($read!='.' && $read!='..')
					{
						$read2 = str_replace("_", " ", $read);
						$dir2 = opendir('books/' . $read . '/');
						
						while ($imgs = readdir($dir2)){
							if (strpos($imgs, '.jpg') !== false){
								$src = $imgs;
							}
						}

						echo '<a href="themepicker.php?story=' . $read . '"  class="theme">
								<img src="books/' . $read . '/' . $src . '" />
								<div class="caption">'
								 . $read2 . 
							 	'</div>
							 </a>';
					}
				}

				closedir($dir); 
			?>
		</div>
	</body>
</html>