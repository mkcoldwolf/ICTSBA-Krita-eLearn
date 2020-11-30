<?php
	require('./app/model/bootstrap.php');
	require('./app/model/session.php');
?>
<html>
	<head>
		<title>Video</title>
	</head>
	<body>
		
		<div style='
			position: fixed;
			z-index: -1;
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
			background-image: url("./image/background/download-bg.png");
			background-size: cover;
			background-position: center top;
			background-attachment: fixed;
			filter: blur(3px);
		'></div>
	
		<?php include './module/left_sidebar_navgate.php'; ?>
		<?php include './module/header.php'; ?>
		<div class='main-frame main-content'>
			<center>
				<font size="7" style='text-shadow: 2px 2px #ff9ed7;'><b>Download Area</b></font><p>

				<table border="1" style='background-color: rgba(255, 158, 215, 0.8); margin-bottom: 60px'>
					<tr>
						<td><font size="5">Krita 4.3.0 for windows</font><br>SHA256: 39346273dfa9397af61f4caf779e2d3d5d59a43d67248bc827b6704a08e9e59f</td>
						<td><a href="./file/krita-x64-4.3.0-setup.exe"><img src="./image/win10-icon.png" width="120"></a></td>
					</tr>
					<tr>
						<td><font size="5">Krita 4.3.0 for linux</font><br>SHA256: 488a6c27876612fca710609483a265821c6bb802d24edf1e970a544744f1c75d</td>
						<td><a href="./file/krita-4.3.0-x86_64.appimage"><img src="./image/linux-icon.png" width="120"></a></td>
					</tr>
					<tr>
						<td><font size="5">
						Word document about the Krita community
						<br>
						<font size="3">**We strongly discourage using .docx files 
						<br>as it is a commercial format and its deprecated from our website.
						<br>Please consider with the .pdf format below!**</font>
						<font></td>
						<td><a href="./file/The_Krita_Community.docx"><img src="image\word-icon.png" width="120"></a></td>
					</tr>
					<tr>
						<td><font size="5">PDF document about the Krita community<font></td>
						<td><a href="./file/The_Krita_Community.pdf"><img src="image\Docs-icon.png" width="120"></a></td>
					</tr>
					<tr>
						<td><font size="5">Pending for future usage<font></td>
						<td><a href="./file/404.pdf"><img src="image\file-icon.png" width="120"></a></td>
					</tr>
				</table>
			</center>
			<?php include './module/footer.php'; ?>
		</div>
	</body>
</html>