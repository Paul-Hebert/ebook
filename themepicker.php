<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/universal.css"/>	</head>
	<body>
		<div class="themeHolder">
			<h1>Pick a theme or create your own:</h1>
			<div class="themeRow">
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
					echo '</div>
					<div class="or">or</div>
					<a href="formatter.php?story=' . $sub . '"><div class="theme custom"> Custom Theme </div></a>';
					closedir($dir); 
				?>
		</div>
	</body>
</html>