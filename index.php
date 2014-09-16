<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/universal.css"/>
	</head>
	<body>
			<?php
				$dir = opendir('books/');
				echo '<ul>';

				while ($read = readdir($dir)){
					if ($read!='.' && $read!='..')
						$read2 = str_replace("_", " ", $read);
					{
						echo '<li><a href="themepicker.php?story=' . $read . '">' . $read2 . '</a></li>';
					}
				}

				echo '</ul>';
				closedir($dir); 
			?>
	</body>
</html>