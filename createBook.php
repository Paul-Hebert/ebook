<?php
	$directory = htmlspecialchars($_POST['directory']);
	$ourFileName = 'themes/theme1.php';
	$handle = fopen($ourFileName, 'w+') or die("can't open file");
	fwrite($handle, '<!DOCTYPE html>
	<html>
		<head>
			<?php 
				$story = $_GET["story"];
				$story2 = str_replace("_", " ", $story);
				echo \'<title>\' . $story2 . \'</title>\' ;
			?>
			<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
			<script type="text/javascript" src="../js/theme.js"></script>
			<?php echo \'<script type="text/javascript">directory = "../books/\' . $story . \'"</script>\' ?>
			<script type="text/javascript" src="../js/universal.js"></script>
			<link rel="stylesheet" type="text/css" href="../css/universal.css"/>
			<link rel="stylesheet" type="text/css" href="../css/theme.css"/>
			<style type="text/css">');
					fwrite($handle, '.story{');
						fwrite($handle, 'margin: 0 auto;');
						fwrite($handle, 'width:' . htmlspecialchars($_POST["/width"])  . htmlspecialchars($_POST["/width/unit"]) . ';');
						fwrite($handle, 'background:' . htmlspecialchars($_POST["/background"]) . ';');
					fwrite($handle, '}

					h1,h2,h3,h4,h4,h6{');
						fwrite($handle, 'font-family:' . htmlspecialchars($_POST["h1,h2,h3,h4,h5,h6/font-family"]) . ';');
						fwrite($handle, 'color:' . htmlspecialchars($_POST["h1,h2,h3,h4,h5,h6/color"]) . ';');
						fwrite($handle, 'font-size:' . htmlspecialchars($_POST["h1,h2,h3,h4,h5,h6/font-size"]) . htmlspecialchars($_POST["h1,h2,h3,h4,h5,h6/font-size/unit"]) . ';');
					fwrite($handle, '}

					p{');
						fwrite($handle, 'font-family:' . htmlspecialchars($_POST["p/font-family"]) . ';');
						fwrite($handle, 'color:' . htmlspecialchars($_POST["p/color"]) . ';');
						fwrite($handle, 'font-size:' . htmlspecialchars($_POST["p/font-size"]) . htmlspecialchars($_POST["p/font-size/unit"]) . ';');
						fwrite($handle, 'text-indent:' . htmlspecialchars($_POST["p/text-indent"]) . htmlspecialchars($_POST["p/text-indent/unit"]) . ';');
						fwrite($handle, 'line-height:' . htmlspecialchars($_POST["p/line-height"]) . '%;');
					fwrite($handle, '}

					div{');
						fwrite($handle, 'margin-left:' . htmlspecialchars($_POST["div/margin-left"]) . htmlspecialchars($_POST["div/margin-left/unit"]) . ';');
						fwrite($handle, 'margin-right:' . htmlspecialchars($_POST["div/margin-right"]) . htmlspecialchars($_POST["div/margin-right/unit"]) . ';');
						fwrite($handle, 'margin-top:' . htmlspecialchars($_POST["div/margin-top"]) . htmlspecialchars($_POST["div/margin-top/unit"]) . ';');
						fwrite($handle, 'margin-bottom:' . htmlspecialchars($_POST["div/margin-bottom"]) . htmlspecialchars($_POST["div/margin-bottom/unit"]) . ';');
					fwrite($handle, '}

					img{');
						fwrite($handle, 'width:' . htmlspecialchars($_POST["img/width"]) . htmlspecialchars($_POST["img/width/unit"]) . ';');
						$margin = (100 - htmlspecialchars($_POST["img/width"]))/2 . htmlspecialchars($_POST["img/width/unit"]);
						fwrite($handle, 'margin-left:' . $margin . ';');
					fwrite($handle, '}');
			fwrite($handle, '</style>
		</head>
		<body>');
			if ( $_POST['bookmarks'] == true){
				fwrite($handle,'<div class="section bookmark ">
					<img src="../imgs/plus.png" class="plus"/>
					<span onclick="makeBookmark();">Set</span>
					<br />
					<span onclick="getBookmark();">Get</span>
				</div>');
			}
			fwrite($handle,'<div class="story">
				<?php
					include "../books/" . $story . "/story.php";
				?>
			</div>
		</body>
	</html>');
	fclose($handle);

	echo '<script type="text/javascript">
		window.location="themes/theme1.php?story=' . $directory . '";
	</script>';
?>