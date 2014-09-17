<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/universal.css"/>	</head>
	<body>
		<h1>Pick a theme or create your own:</h1>
			<?php				
				$sub = $_GET['story'];
				$dir = opendir('css/themes/');
				$id = 1;

				while ($read = readdir($dir)){
					if ($read!='.' && $read!='..')
					{
						echo '<a href="viewer.php?story=' . $sub . '&id=' . $id . '"><div class="theme">' . $read . '</div></a>';
						$id++;
					}
				}
						echo '<div class="or">or</div>
						<a href="formatter.php?story=' . $sub . '"><div class="theme"> Custom Theme </div></a>';

				closedir($dir); 
			?>
	</body>
</html>