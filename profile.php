<?php

	ini_set('display_errors', '1');
	
	require('./app/model/bootstrap.php');
	require('./app/model/session.php');
	include('./app/model/user.php');
	
	$session = new Session();
	$user = new User($session->getUserName());
?>
<html>
	<head>
		<title>Profile</title>
	</head>
	<body style='
		background-image: url("./image/background/kiki_s_creative_flow_by_tysontan-d760h81.png");
		background-size: cover;
		background-position: center top;
	'>
		<?php include './module/left_sidebar_navgate.php'; ?>
		<?php include './module/header.php'; ?>
		<div class="main-frame main-content">
			<div style='min-height: 80%; width: 80%; margin: auto; margin-bottom: 20px; background-color: rgba(255, 255, 255, 0.8); border: solid 2px; border-ridus: 2px;'>
				<img src='<?php echo $user->getAvatarUrl(); ?>' width=200px style='padding: 20px; float: left;'>
				<div style='height: 220px'>
					<div style='padding: 120px'>
						<font style='font-size: 50px; text-shadow: 2px 2px #66ccff;'><?php echo $session->getUserName(); ?></font>
						<br>
						<font style='margin-left: 10px; font-size: 30px;'>
							(User Type: <?php echo $user->getUserType(); ?>, Email: <?php echo $user->getEmail(); ?>)
						</font>
						
						<button id='delete-acc-btn' style='float: right; height: 30px'>Delete Account</button>
					</div>
				</div>
				<hr>
				
				<center>
					<a href="https://www.vultr.com/?ref=8332044"><img src="https://www.vultr.com/media/banners/banner_1200x628.png" width=100%></a>
				</center>
			</div>
			<?php include './module/footer.php'; ?>
		</div>
		
		<script>
			document.getElementById("delete-acc-btn").addEventListener("click", function() {
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if(this.readyState == 4 && this.status == 200) {
						if(this.responseText == "FILESYSTEM_PERMISSION_DENIED") {
							alert(".database folder is being protected, forum data file can not be saved. Plz chmod 777 to .database or give php permission to write the file"
								+ ", Otherwise this forums would not work!!!!!");
								return;
						}
						if(this.responseText == "SUCCESS") {
							alert("Account deleted! now redirect you to login page!");
							window.location.reload();
							return;
						}
						alert(this.responseText);
					}
				};
				xhttp.open("POST", "./app/controller/delete_account.php", true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send();
			});
		</script>
	</body>
<html>
