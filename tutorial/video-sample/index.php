<?php 
	require('./../../app/model/bootstrap.php');
	require('./../../app/model/session.php');
?>
<html>
	<head>
		<style>
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
			background-image: url("./image/background/58839867_p0.jpg");
			background-size: cover;
			background-position: center top;
			background-attachment: fixed;
			filter: blur(3px);
		'></div>
		
		<?php include './../../module/left_sidebar_navgate.php' ?>
		<?php include './../../module/header.php' ?>
		
		<div class='main-frame main-content'>
			<div align='center' style='width:80%; margin: auto; margin-bottom: 160px;'>
				<iframe width=100% height=80% src="https://www.youtube.com/embed/04to4S6Jy6M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<?php include './../../module/footer.php' ?>
		</div>
		
	</body>
</html>