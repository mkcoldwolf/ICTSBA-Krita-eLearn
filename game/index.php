<?php 
	require('./../app/model/bootstrap.php');
	require('./../app/model/session.php');
?>
<html>
	<head>
		<title>Games</title>
	</head>
	
	<body>
	
		<div style='
			position: fixed;
			z-index: -1;
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
			background-image: url("./image/background/one-step-away.png");
			background-size: cover;
			background-position: center top;
			background-attachment: fixed;
			/*filter: blur(3px);*/
		'></div>
		
		<?php include './../module/left_sidebar_navgate.php' ?>
		<?php include './../module/header.php' ?>

		<div class='main-frame main-content'>
			<center>
				<p>
					<font size="7" style='text-shadow: 2px 2px #2196f3;'><b>Mini Games for Learning</b></font>
				<p>

				<table border="1" style='
					margin-bottom: 60px;
					box-shadow: 0 0 10px #2196f3, 0 0 10px #2196f3, 0 0 10px #2196f3;
					background-color: rgba(255, 255, 255, 0.2);
					'>
					<tr>
						<td><font size="5" style='text-shadow: 1px 1px #2196f3;'><b>A Block Obstacle Game.</b></font></td>
						<td><center><a href="./block-game"><img src="./image/block-game.png" height="120"></center></a></td>

						<td><font size="5" style='text-shadow: 1px 1px #2196f3;'><b>A Jigsaw Puzzle Game.</b></font></td>
						<td><center><a href="jigsaw\jigsaw.html" target="content"><img src="image\jigsaw.png" height="120"></center></a></td>
					</tr>

					<tr>
						<td><font size="5" style='text-shadow: 1px 1px #2196f3;'><b>A Simple Calculator.</b></font></td>
						<td><center><a href="calculator.html"><img src="image\calc.gif" height="120"></center></a></td>

						<td><font size="5" style='text-shadow: 1px 1px #2196f3;'><b>A Drawing Board.</b></font></td>
						<td><center><a href="paint.html"><img src="image\paint.png" height="120"></center></a></td>
					</tr>

					<tr>
						<td><font size="5" style='text-shadow: 1px 1px #2196f3;'><b>A Sound Button Board.</b></font></td>
						<td><center><a href="button_sound\button_sound.html"><img src="image\redB.png" height="120"></center></a></td>

						<td><font size="5" style='text-shadow: 1px 1px #2196f3;'><b>A Match Game.</b></font></td>
						<td><center><a href="pairs_game\pairs.html"><img src="image\match.png" height="120"></center></a></td>
					</tr>

					<tr>
						<td><font size="5" style='text-shadow: 1px 1px #2196f3;'><b>An Image Puzzle Game.</b></font></td>
						<td><center><a href="image-puzzle\puzzle.html"><img src="image\i_puzzle.jpg" height="120"></center></a></td>
						
						<td><font size="5" style='text-shadow: 1px 1px #2196f3;'><b>A Hangman Game.</b></font></td>
						<td><center><a href="hangman\hangman.html"><img src="image\hangman.png" height="120"></center></a></td>
					</tr>
				</table>
			</center>
			
			<?php include './../module/footer.php' ?>
		</div>
		
	</body>
	
</html>