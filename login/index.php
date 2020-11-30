<?php 
	require('./../app/model/bootstrap.php');
?>
<html>
    <head>
        <title>Login page</title>
		<style>
			#submit:hover {
				background: #2196f3;
				box-shadow: 0 0 10px #2196f3, 0 0 10px #2196f3, 0 0 10px #2196f3;
			}
			#submit:hover>font {
				color: #255784
			}
		</style>
    </head>
    <body>
		<center>
			<img src="./../image/platform-banner.png" width=80% style='margin-top: 5%;'>
		</center>
		
		<div style='
			position: fixed;
			z-index: -1;
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
			background-image: url("./image/background/guangzhou_ta.jpg");
			background-size: cover;
			background-position: center top;
			background-attachment: fixed;
			filter: blur(1px);
		'></div>
		
        <div style='
			width: 80%;
			margin: auto;
			border: solid 6px rgba(102, 204, 255, 0.8);
			border-radius: 6px;
			box-shadow: 0 0 10px #2196f3, 0 0 10px #2196f3, 0 0 10px #2196f3;
			background-color: rgba(102, 204, 255, 0.6);
			margin-top: 10px;'>
			<form>
				<table border=0 align="center" background="../image/lowercolor.jpg" width="70%">
					<tr>
						<td rowspan=2 align="left">
							<img src="./image/welcome.gif" width="100%">
						</td>
						<td align="right" width=40% height=100%>
							<p style='font-size: 18px;'>
								User Name :
								<input type="text" name="username" size=20 maxlength=20 style='border-color: #2196f3; font-size: 18px;'>
							</p>
							<p style='font-size: 18px;'>
								Password :
								<input type="password" name="password" size=20 maxlength=20 style='border-color: #2196f3; font-size: 18px;'>
							</p>
							<button type="button" id="submit" style='
									width: 60%;
									height: 40px;
									border-color: #2196f3;
									letter-spacing: 4px;
									color: #2196f3;
									text-transform: uppercase;
									font-size: 24px;
									transition: 0.2s;
								'>
								<font>
									Sign in
								</font>
							</button>
						</td>
					</tr>
					<tr>
						<td align="right">
							<p>
								<a href="sign-up">Sign up to Krita e-learn platform</a>
							</p>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<script>
		
			document.getElementById("submit").addEventListener("click", function() {
				login();
			});
			document.getElementsByName("password")[0].addEventListener('keypress', function(e) {
				if (e.key === "Enter") {
					login();
				}
			});
			
			function login() {
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if(this.readyState == 4 && this.status == 200) {
						if(this.responseText == "NULL_USERNAME") {
							alert("Username is nothing!");
							return;
						}
						if(this.responseText == "NULL_PASSWORD") {
							alert("Password is nothing!");
							return;
						}
						if(this.responseText == "ACC_NOT_EXIST") {
							alert("The account is not exist in this website, try register one!");
							return;
						}
						if(this.responseText == "ACC_OR_PASS_INCORRECT") {
							alert("Account or username is incorrect!");
							return;
						}
						if(this.responseText == "LOGIN_SUCCESS") {
							window.location.replace("<?php echo $rootDir ?>");
							return;
						}
					}
				};
				xhttp.open("POST", "./auth", true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send("username=" + document.getElementsByName("username")[0].value + "&password=" + document.getElementsByName("password")[0].value);
			}
			
		</script>
    </body>
</html>