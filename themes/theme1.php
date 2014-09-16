<!DOCTYPE html>
	<html>
		<head>
			<?php 
				$story = $_GET["story"];
				$story2 = str_replace("_", " ", $story);
				echo '<title>' . $story2 . '</title>' ;
			?>
			<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
			<script type="text/javascript" src="../js/theme.js"></script>
			<?php echo '<script type="text/javascript">directory = "../books/' . $story . '"</script>' ?>
			<script type="text/javascript" src="../js/universal.js"></script>
			<link rel="stylesheet" type="text/css" href="../css/universal.css"/>
			<link rel="stylesheet" type="text/css" href="../css/theme.css"/>
			<style type="text/css">.story{margin: 0 auto;width:900px;background:#ffffff;}

					h1,h2,h3,h4,h4,h6{font-family:Arial;color:#000000;font-size:30pt;}

					p{font-family:Arial;color:#000000;font-size:14pt;text-indent:2em;line-height:130%;}

					div{margin-left:20%;margin-right:20%;margin-top:50px;margin-bottom:50px;}

					img{width:90%;margin-left:5%;}</style>
		</head>
		<body><div class="story">
				<?php
					include "../books/" . $story . "/story.php";
				?>
			</div>
		</body>
	</html>