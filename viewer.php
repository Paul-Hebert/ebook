<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<?php 
				$story = $_GET["story"];
				$theme = $_GET["id"];

				$story2 = str_replace("_", " ", $story);
				echo '<title>' . $story2 . '</title>' ;
			?>
			<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
			<script type="text/javascript" src="js/theme.js"></script>
			<?php echo '<script type="text/javascript">directory = "books/' . $story . '"; theme = "' . $theme . '";</script>' ?>
			<script type="text/javascript" src="js/universal.js"></script>
			<link rel="stylesheet" type="text/css" href="css/universal.css"/>
			<link rel="stylesheet" type="text/css" href="css/theme.css"/>
			<?php echo '<link rel="stylesheet" type="text/css" href="css/themes/theme' . $theme . '.css"/>'; ?>


		<body>
			<div class="bookmark section">
				<img src="imgs/plus.png" class="plus"/>
				<br/>
				<span onclick="makeBookmark()">Set</span>
				<br/>
				<span onclick="getBookmark()">Get</span>
			</div>
			<div class="story">
				<?php
					include "books/" . $story . "/story.php";
				?>
			</div>
		</body>
	</html>