<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/universal.css"/>
	</head>
	<body>
		<div class="controls">
			<?php include('includes/sidebar.php');?>
		</div>
				
		<div class="themeHolder">
			<h1>Pick a book:</h1>
			<?php
				function listBooks($type){
					$dir = opendir('books2/' . $type . 's/');

					while ($read = readdir($dir)){
						if ($read!='.' && $read!='..')
						{
							$read2 = str_replace("." . $type, "", $read);
							$dir2 = opendir('books/' . $read . '/');
							
							while ($imgs = readdir($dir2)){
								if (strpos($imgs, '.jpg') !== false){
									$src = $imgs;
								}
							}

							echo '<a href="themepicker2.php?story=' . $read2 . '&type=' . $type . '"  class="theme">
									<div class="caption">'
									 . $read2 . 
								 	'</div>
								 </a>';
						}
					}
					closedir($dir); 
				}

				listBooks('htm');

				listBooks('txt');
			?>
		</div>
	</body>
</html>