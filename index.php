<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/universal.css"/>
	</head>
	<body>
			<h1>Pick a book:</h1>
			<?php
				$dir = opendir('books/');

				while ($read = readdir($dir)){
					if ($read!='.' && $read!='..')
						$read2 = str_replace("_", " ", $read);
					{
						echo '<a href="themepicker.php?story=' . $read . '" class="theme">' . $read2 . '</a>';
					}
				}

				closedir($dir); 
			?>
	</body>
</html>