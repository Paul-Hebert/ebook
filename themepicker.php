<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
			<?php				
				$sub = $_GET['story'];
				$dir = opendir('books/' . $sub . '/');
				echo '<ul>';

				while ($read = readdir($dir)){
					if ($read!='.' && $read!='..')
					{
						echo '<li><a href="books/' . $sub . '/' . $read . '">' . $read . '</a></li>';
					}
				}
						echo '<li><a href="formatter.php?story=' . $sub . '"> Custom Theme </a></li>';

				echo '</ul>';
				closedir($dir); 
			?>
	</body>
</html>