<?php
	$story = htmlspecialchars($_POST['story']);
	$type = htmlspecialchars($_POST['type']);

	$id = 1;
	$dir = opendir('css/themes/');

	while ($read = readdir($dir)){
		if ($read!='.' && $read!='..'){
				$id++;
			}
		}
	$ourFileName = 'css/themes/theme' . $id . '.css';
	
	$handle = fopen($ourFileName, 'w+') or die("can't open file");
					fwrite($handle, 'body{');
						fwrite($handle, 'background:' . htmlspecialchars($_POST["/background"]) . ';');
					fwrite($handle, '}');

					fwrite($handle, '.story{');
						fwrite($handle, 'margin: 0 auto;');
						fwrite($handle, 'width:' . htmlspecialchars($_POST["/width"])  . htmlspecialchars($_POST["/width/unit"]) . ';');
					fwrite($handle, '}

					h1,h2,h3,h4,h4,h6{');
						fwrite($handle, 'font-family:' . htmlspecialchars($_POST["h1,h2,h3,h4,h5,h6/font-family"]) . ';');
						fwrite($handle, 'color:' . htmlspecialchars($_POST["h1,h2,h3,h4,h5,h6/color"]) . ';');
						fwrite($handle, 'font-size:' . htmlspecialchars($_POST["h1,h2,h3,h4,h5,h6/font-size"]) . htmlspecialchars($_POST["h1,h2,h3,h4,h5,h6/font-size/unit"]) . ';');
					fwrite($handle, '}

					p, .story *:not(hr){');
						fwrite($handle, 'font-family:' . htmlspecialchars($_POST["p/font-family"]) . ';');
						fwrite($handle, 'color:' . htmlspecialchars($_POST["p/color"]) . ';');
						fwrite($handle, 'font-size:' . htmlspecialchars($_POST["p/font-size"]) . htmlspecialchars($_POST["p/font-size/unit"]) . ';');
						fwrite($handle, 'text-indent:' . htmlspecialchars($_POST["p/text-indent"]) . htmlspecialchars($_POST["p/text-indent/unit"]) . ';');
						fwrite($handle, 'line-height:' . htmlspecialchars($_POST["p/line-height"]) . '%;');
						fwrite($handle, 'padding-top:' . htmlspecialchars($_POST["p/padding-top"]) . htmlspecialchars($_POST["p/padding-top/unit"]) . ';');
					fwrite($handle, '}

					.story div{');
						fwrite($handle, 'padding-left:' . htmlspecialchars($_POST["div/padding-left"]) . htmlspecialchars($_POST["div/padding-left/unit"]) . ';');
						fwrite($handle, 'padding-right:' . htmlspecialchars($_POST["div/padding-right"]) . htmlspecialchars($_POST["div/padding-right/unit"]) . ';');
						fwrite($handle, 'padding-top:' . htmlspecialchars($_POST["div/padding-top"]) . htmlspecialchars($_POST["div/padding-top/unit"]) . ';');
						fwrite($handle, 'padding-bottom:' . htmlspecialchars($_POST["div/padding-bottom"]) . htmlspecialchars($_POST["div/padding-bottom/unit"]) . ';');
					fwrite($handle, '}

					img{');
						fwrite($handle, 'width:' . htmlspecialchars($_POST["img/width"]) . htmlspecialchars($_POST["img/width/unit"]) . ';');
						$margin = (100 - htmlspecialchars($_POST["img/width"]))/2 . htmlspecialchars($_POST["img/width/unit"]);
						fwrite($handle, 'padding-left:' . $margin . ';');
					fwrite($handle, '}');

					if($_POST['bookmarks'] != true){
						fwrite($handle, '.bookmark{
							display:none;
						}');
					}
		
	fclose($handle);

	echo '<script type="text/javascript">
		window.location="viewer2.php?story=' . $story . '&id=' . $id . '&type=' . $type . '";
	</script>';
?>