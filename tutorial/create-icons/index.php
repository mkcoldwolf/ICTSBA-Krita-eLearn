<?php 
	require('./../../app/model/bootstrap.php');
	require('./../../app/model/session.php');
?>
<html>
	<head>
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
			background-image: url("./image/background/original-background-full-hd-262248.jpg");
			background-size: cover;
			background-position: center top;
			background-attachment: fixed;
			filter: blur(3px);
		'></div>
		
		<?php include './../../module/left_sidebar_navgate.php' ?>
		<?php include './../../module/header.php' ?>
		
		<div class='main-frame main-content'>
			<div align='center' style='width:80%; margin: auto;'>
				<div class='imageWithText'>
					<img src='./image/Screenshot_3.png' class='imageNormal'>
					<div><font>First, open Krita and you will have to create a new document for canvans of our icon.</font></div>
				</div>
				<div class='imageWithText'>
					<img src='./image/Screenshot_4.png' class='imageNormal'>
					<div><font>And then, in the left, you will see a layer manage window, you can click the add button
								in the left-down corner to add a new transparent background to prepare our drawings.
					</font></div>
				</div>
				<div class='imageWithText'>
					<img src='./image/Screenshot_5.png' class='imageNormal'>
					<div><font>Now comes to the Color Selector in the right-top corner, lets select your favorite colour here
								and we will use this color as the base color of our icon later.
					</font></div>
				</div>
				<div class='imageWithText'>
					<img src='./image/Screenshot_6.png' class='imageNormal'>
					<div><font>In the left tools list, you will see a Polyline Tool, its a tool to help us create Polyline and
								it will auto connect tbose points we clicked with a line.
					</font></div>
				</div>
				<div class='imageWithText'>
					<img src='./image/Screenshot_7.png' class='imageNormal'>
					<div><font>Now, lets draw out how you wants ur icon looks like and press enter on your keyboard.</font></div>
				</div>
				<div class='imageWithText'>
					<img src='./image/Screenshot_8.png' class='imageNormal'>
					<div><font>And now we can use Rectangular Selection Tool to copy the icon we created just before last step
								and paste it into the layer again to double those lines.
					</font></div>
				</div>
				<div class='imageWithText'>
					<img src='./image/Screenshot_9.png' class='imageNormal'>
					<div><font>Select the area of image you would like to copy.</font></div>
				</div>
				<div class='imageWithText'>
					<img src='./image/Screenshot_10.png' class='imageNormal'>
					<div><font>Press shortcut key Ctrl+C (Its for copying things) and Ctrl+V (Its for pasting copied things) and
								you will see a new layer is created with the image inside for you.
					</font></div>
				</div>
				<div class='imageWithText'>
					<img src='./image/Screenshot_11.png' class='imageNormal'>
					<div><font>Now get the Move Tool so you can move those image into the correct position.</font></div>
				</div>
				<div class='imageWithText'>
					<img src='./image/Screenshot_12.png' class='imageNormal'>
					<div><font>Adjust your images to the right position and form an icon, you can repeat those step
								before to create your own icon.
					</font></div>
				</div>
				<div class='imageWithText'>
					<img src='./image/Screenshot_13.png' class='imageNormal'>
					<div><font>Finally, click the eyes left to the background layer, so temply make it invisable;
					<font></div>
				</div>
				<div class='imageWithText'>
					<img src='./image/Screenshot_14.png' class='imageNormal'>
					<div><font>You are done! Now export the image to any where you like!</font></div>
				</div>
			</div>
			<?php include './../../module/footer.php' ?>
		</div>
	</body>
</html>