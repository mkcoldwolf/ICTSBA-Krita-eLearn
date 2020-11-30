<?php
	require('./../../app/model/bootstrap.php');
	require('./../../app/model/session.php');
?>
<html>
	<head>
		<title>Intro to Krita</title>
		<style>
			.imageWithText {
				margin: auto;
				width: 100%;
			}
			.imageWithText div {
				background-color: rgba(102, 204, 255, 0.8);
				padding: 40px;
				min-height: 30%;
				margin-bottom: 200px;
				text-align: left;
			}
			.imageWithText font {
				font-size: 40px;
			}
			
			.imageNormal {
				width: 100%;
				margin: auto;
			}
		</style>
	</head>
	<body>
	
		<div style='
			position: fixed;
			z-index: -1;
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
			background-image: url("./image/background/wallpaper18.jpg");
			background-size: cover;
			background-position: center top;
			background-attachment: fixed;
			filter: blur(3px);
		'></div>
	
		<?php include './../../module/left_sidebar_navgate.php'; ?>
		<?php include './../../module/header.php'; ?>
		<div class="main-frame main-content">
			<div align='center' style='width:80%; margin: auto;'>
				<div class='imageWithText'>
					<img src='./image/Screenshot_1.png' class='imageNormal'>
					<div><font>
						&nbsp;&nbsp;&nbsp;&nbsp; <a href='https://Krita.org'>Krita</a>, is a professtional digital painting software, its not 
						really famous enough yet, but what we, and techradar (a software ranking website) believe that it will becomes famous
						and the main digital painting software in the future due to its powerful features.
						<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp; You may wonder why Krita can be so powerful and even able to take place of other similar 
						software such as SAI or Photoshop? The main reason i could say that , its because Krita is a Open-Source software,
						open source of Krita means that almost every one can work with Krita and develop new feature and fix bugs. With the
						help of those huge community, Krita has grow so fast after their creator Matthias Ettrich post the code into KDE repo.
						<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp; Create Matthias Ettrich did some much great things and he lead the software into
						nowadays. Not just by open sourcing the project, he and his team also create a website and ask donation from
						worldwide people, this makes hiring full time developer to develope the software possible. With the works by
						those hero, Krita is releasing new version so fast, and getting much more popular day by day.
						<br><br>
						&nbsp;&nbsp;&nbsp;&nbsp; If you are interested in digital painting, you should start right now with Krita,
						or even if you already using other software, u should switch to Krita too! Since it is free, powerful, and
						maintained! We have a Krita installer mirror in our download page, you should check it out right now!
					</font></div>
				</div>
			</div>
			<?php include './../../module/footer.php'; ?>
		</div>
   </body>
<html>
