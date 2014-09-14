<?php
	$directory = $_POST['directory'];
	$directory2 = str_replace("_", " ", $directory);
	$ourFileName = 'books/' . $directory . "/theme1.php";
	$handle = fopen($ourFileName, 'w+') or die("can't open file");
	fwrite($handle, '<!DOCTYPE html>
	<html>
		<head>
			<title>' . $directory2 . '</title>
			<script type="text/javascript" src="../js/theme.js"></script>
			<style type="text/css">');
					fwrite($handle, ' img{
						width:50%;
						margin-left:25%;	
					}');

					fwrite($handle, 'body{');
						fwrite($handle, 'margin: 0 auto;');
						fwrite($handle, 'width:' . $_POST["/width"]  . $_POST["/width/unit"] . ';');
						fwrite($handle, 'background:' . $_POST["/background"] . ';');
					fwrite($handle, '}

					h1,h2,h3,h4,h4,h6{');
						fwrite($handle, 'font-family:' . $_POST["h1,h2,h3,h4,h5,h6/font-family"] . ';');
						fwrite($handle, 'color:' . $_POST["h1,h2,h3,h4,h5,h6/color"] . ';');
						fwrite($handle, 'font-size:' . $_POST["h1,h2,h3,h4,h5,h6/font-size"] . $_POST["h1,h2,h3,h4,h5,h6/font-size/unit"] . ';');
					fwrite($handle, '}

					p{');
						fwrite($handle, 'font-family:' . $_POST["p/font-family"] . ';');
						fwrite($handle, 'color:' . $_POST["p/color"] . ';');
						fwrite($handle, 'font-size:' . $_POST["p/font-size"] . $_POST["p/font-size/unit"] . ';');
						fwrite($handle, 'text-indent:' . $_POST["p/text-indent"] . $_POST["p/text-indent/unit"] . ';');
					fwrite($handle, '}

					div{');
						fwrite($handle, 'margin-left:' . $_POST["div/margin-left"] . $_POST["div/margin-left/unit"] . ';');
						fwrite($handle, 'margin-right:' . $_POST["div/margin-right"] . $_POST["div/margin-right/unit"] . ';');
						fwrite($handle, 'margin-top:' . $_POST["div/margin-top"] . $_POST["div/margin-top/unit"] . ';');
						fwrite($handle, 'margin-bottom:' . $_POST["div/margin-bottom"] . $_POST["div/margin-bottom/unit"] . ';');
					fwrite($handle, '}

					img{');
						fwrite($handle, 'width:' . $_POST["img/width"] . $_POST["img/width/unit"] . ';');
					fwrite($handle, '}');
			fwrite($handle, '</style>
		</head>
		<body class="story">');
			fwrite($handle, '<?php include "story.php"; ?>');
		fwrite($handle, '</body>
	</html>');
	fclose($handle);

	echo '<script type="text/javascript">
		window.location="books/' . $directory . '/theme1.php"
	</script>';
?>