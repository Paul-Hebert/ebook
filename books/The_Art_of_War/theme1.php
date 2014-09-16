<!DOCTYPE html>
	<html>
		<head>
			<title>The Art of War</title>
			<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
			<script type="text/javascript" src="../../js/theme.js"></script>
			<script type="text/javascript" src="../../js/universal.js"></script>
			<link rel="stylesheet" type="text/css" href="../../css/universal.css"/>
			<style type="text/css">img{
						width:50%;
						margin-left:25%;	
					}

					.bookmark.section{
						position:fixed;
						top:0px;
						right:0px;
						max-height:30px;
						text-align:center;
					}

					.bookmark span{
						cursor:pointer
					}body{margin: 0 auto;width:900px;background:#ffffff;}

					h1,h2,h3,h4,h4,h6{font-family:Arial;color:#000000;font-size:30pt;}

					p{font-family:Arial;color:#000000;font-size:14pt;text-indent:2em;}

					div{margin-left:20%;margin-right:20%;margin-top:50px;margin-bottom:50px;}

					img{width:50%;}</style>
		</head>
		<body class="story">
			<div class="section bookmark ">
				<img src="../../imgs/plus.png" class="plus"/>
				<span onclick="makeBookmark();">Set</span>
				<br />
				<span onclick="getBookmark();">Get</span>
			</div><?php include "story.php"; ?></body>
	</html>