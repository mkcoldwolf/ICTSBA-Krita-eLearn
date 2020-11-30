<?php
	require('./app/model/bootstrap.php');
	require('./app/model/session.php');
	require('./app/model/user.php');
?>
	
<html>
	<head>
		<basefont face="Times">
		<title>forum</title>
	</head>
	
	<body style='
		background-image: url("./image/background/electrichearts_20160517_20160820_kiki_02.png");
		background-size: cover;
		background-position: center top;
	'>
	
		<?php include './module/left_sidebar_navgate.php'; ?>
		<?php include './module/header.php'; ?>

		<div class="main-frame main-content">
			<p align="center">
				<img src="./image/forum-banner.png" width="80%"><br>

				<p id="messages">
				
					<?php
						
						$json = file_get_contents(__DIR__."/.database/forum_posts.json");
						$jsonObj = json_decode($json);
						
						foreach($jsonObj as $key => $value) {
							try {
								$user = new User($value->username);
								printPostDiv(date('Y-m-d H:s', $key), $value->username, $user->getEmail(), $user->getUserType(), $user->getAvatarUrl(), $value->message);
							}catch(Exception $e) {
								printPostDiv(date('Y-m-d H:s', $key), $value->username, $e->getMessage(), $e->getMessage(), "null", $value->message);
								continue;
							}
						}
						
						function printPostDiv($time, $username, $email, $user_type, $avatarUrl, $message) {
							echo "<div align='center' style='width:80%; margin: auto;'>";
							echo "<table border=true width=100%; style='background-color: rgba(142, 182, 245, 0.8)'>";
							echo "<tr height=25%>";
							echo "<td rowspan=2 width='100'> <img src='".$avatarUrl."' width='100'> </td>";
							echo "<td>From ".$username." (".$user_type.") at ".$time."<font style='float:right'>".$email."</font>"."</td>";
							echo "</tr>";
							echo "<tr height=75%>";
							echo "<td>".$message."</td>";
							echo "</tr>";
							echo "</table>";
							echo "</div>";
							echo "<br>";
						}
					?>

					<!--<table border=1 align="center" bgcolor="#ffffbb">
						<tr><td rowspan= "2"><img src="" width="100"></td>
						<td>From Bird  14-03-2016</td></tr>
						<tr><td width="565" height="100"><font size="6">ICT is an interesting subject. Support it....^_^</font></td></tr>
					</table>
					<br>
					<table border=1 align="center" bgcolor="#ffffbb">
						<tr><td rowspan= "2"><img src="image\iron.gif" width="100"></td>
						<td>From Iron  24-05-2016</td></tr>
						<tr><td width="565" height="100"><font size="6">Woo! The on-line quiz is very difficult.</font></td></tr>
					</table>
					<br>
					<table border=1 align="center" bgcolor="#ffffbb">
						<tr><td rowspan= "2"><img src="image\batman.png" width="100"></td>
						<td>From Bat  20-09-2016</td></tr>
						<tr><td width="565" height="100"><font size="6">I want to make webpage with HTML. Who can teach me?</font></td></tr>
					</table>
					<br>-->

				</p>
				
				<div style='background-color: rgba(142, 182, 245, 0.8);
							border-radius: 4px;
							border: solid 2px #66ccff;
							width: 80%;
							margin: auto;
							'>
					<div style='width: 70%; margin: auto;'>
						<p style='font-size: 20px;'>Replay to the forum:</p>
						<form name="forum">
							<textarea name="message" cols="80" rows="8" style='background-color: rgba(255, 255, 255, 0.7); width: 100%;'></textarea>
							<br>
							<div align='right' style='height: 30px; margin-top: 5px;'>
								<input type="button" id="submit" value="submit" style='height: 100%; width: 30%'>
							</div>
						</form>
					</div>
				</div>
				
			</p>
			<?php include './module/footer.php'; ?>
		</div>
	
		<script>
			document.getElementById("submit").addEventListener("click", function() {
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if(this.readyState == 4 && this.status == 200) {
						if(this.responseText == "FILESYSTEM_PERMISSION_DENIED") {
							alert(".database folder is being protected, forum data file can not be saved. Plz chmod 777 to .database or give php permission to write the file"
								+ ", Otherwise this forums would not work!!!!!");
								return;
						}
						if(this.responseText == "SUCCESS") {
							location.reload();
						}
					}
				};
				xhttp.open("POST", "./app/controller/post_forum.php", true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send("message=" + document.getElementsByName("message")[0].value);
			});
			</script>
	</body>
</html>
