<html>
	<head>
		<title>Sign up</title>
	</head>
	<body>
  
	<div style='
			position: fixed;
			z-index: -1;
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
			background-image: url("./image/background/pixiv-home.png");
			background-size: cover;
			background-position: center top;
			background-attachment: fixed;
			filter: blur(3px);
		'></div>
		
	<div style='width: 80%; margin: auto; margin-top: 10px;'>
	
		<img src="./../image/platform-banner.png" width=100%>
	
		<div style='width: 60%; margin: auto; margin-top: 10px;'>
		
			<a href='./'>
				<button style='
					height: 40px;
					width: 60px;
					background: rgba(102, 204, 255, 0.8);
					font-size: 15px;
					text-transform: uppercase;
				'>go back</button>
			</a>
		
			<form align="center">
				<p>
					<table BORDER="1" style='background-color: rgba(102, 204, 255, 0.6)' width="100%">
					
						<colgroup>
							<col span="1" style="width: 20%;">
						</colgroup>
			
						<tr>
							<TD>User Name :</TD>
							<TD><INPUT TYPE="text" NAME="username" SIZE="50"></TD>
						</tr>
						<tr>
							<TD>Password :</TD>
							<TD><INPUT TYPE="password" NAME="pwd1" SIZE="50"></TD>
						</TR>
							<TD>Password (Confirm) :</TD>
							<TD><INPUT TYPE="password" NAME="pwd2" SIZE="50"></TD>
						</TR>
						<TR>
							<TD>Email :</TD>
							<TD><INPUT TYPE="text" NAME="email" SIZE="50"></TD>
						</TR>
						<tr>
							<td>Account Type: :</td>
							<td>
								<INPUT TYPE="radio" NAME="AccountType" VALUE="normal">Normal
								<INPUT TYPE="radio" NAME="AccountType" VALUE="parent">Parent
							</td>
						</tr>
						<TR>
							<TD>Gender :</TD>
							<TD><INPUT TYPE="radio" NAME="Sex" VALUE="M">Male
							<INPUT TYPE="radio" NAME="Sex" VALUE="F">Femaile</TD>
						</TR>
					</TABLE>
					
					<P>
						<TABLE BORDER="1" style='background-color: rgba(102, 204, 255, 0.6)' width="100%">
						
							<colgroup>
								<col span="1" style="width: 20%;">
							</colgroup>
						
							<tr>
								<td>Paint software have used before: </td>
								<td>
									<input type="checkbox" name="PaintUsed" value="SAI">SAI</input>
									<input type="checkbox" name="PaintUsed" value="Adobe Photoshop">Adobe Photoshop</input>
									<input type="checkbox" name="PaintUsed" value="Clip Studio Paint">Clip Studio Paint</input>
									<input type="checkbox" name="PaintUsed" value="MediBang Paint">MediBang Paint</input>
								</td>
							</tr>
							
							<TR>
								<td>Interest :</td>
								<td>
									<table>
										<tr>
											<td><INPUT TYPE="checkbox" NAME="Subject" VALUE="Computer">Computer</td>
											<td><INPUT TYPE="checkbox" NAME="Subject" VALUE="Swimming">Swimming</td>
											<td><INPUT TYPE="checkbox" NAME="Subject" VALUE="Travel">Travel</td>
											<td><INPUT TYPE="checkbox" NAME="Subject" VALUE="Reading">Reading</td>
											<td><INPUT TYPE="checkbox" NAME="Subject" VALUE="Movie">Movie</td>
											
										<tr>
										<tr>
											<td><INPUT TYPE="checkbox" NAME="Subject" VALUE="Music">Music</td>
											<td><INPUT TYPE="checkbox" NAME="Subject" VALUE="Television">Videos</td>
											<td><INPUT TYPE="checkbox" NAME="Subject" VALUE="Sport">Sport</td>
											<td><INPUT TYPE="checkbox" NAME="Subject" VALUE="Painting">Painting</td>
											<td><INPUT TYPE="checkbox" NAME="Subject" VALUE="Shopping">Shopping</td>
										</tr>
									</table>
								</td>
							</TR>
							<TR>
								<TD>Address :</TD>
								<TD>
									<INPUT TYPE="radio" NAME="address" VALUE="HK">Mainland China (China)
									<br>
									<INPUT TYPE="radio" NAME="address" VALUE="HK">Hong Kong (Hong Kong SAR, CHINA)
									<br>
									<INPUT TYPE="radio" NAME="address" VALUE="Kln">Kowloon (Hong Kong SAR, CHINA)
									<br>
									<INPUT TYPE="radio" NAME="address" VALUE="NT">New Territories (Hong Kong SAR, CHINA)
									<br>
									<INPUT TYPE="radio" NAME="address" VALUE="Others">Others
								</TD>
							</TR>
							<TR>
								<TD>Birthday :</TD>
								<TD>
									<SELECT NAME="Year">
										<?php
											for ($i = 1965; $i <= 2015; $i++) {
												echo "<option value=".$i.">".$i."</option>";
											}
										?>
									</SELECT>-
									  
									<SELECT NAME="Month">
										<?php
											for ($i = 1; $i <= 12; $i++) {
												echo "<option value=".$i.">".$i."</option>";
											}
										?>
									</SELECT>-
									 
									<SELECT NAME="Day">
										<?php
											for ($i = 1; $i <= 31; $i++) {
												echo "<option value=".$i.">".$i."</option>";
											}
										?>
									</SELECT>
									(Year-Month-Day)
								</TD>
							</TR>
						<TR>
							<TD>Remarks :</TD>
							<TD>
								<TEXTAREA NAME="Remarks" ROWS="5" COLS="50"></TEXTAREA>
							</TD>
					</TABLE>
					
					<p>
						<table border=true style='background-color: rgba(102, 204, 255, 0.6)' width="100%">
							<colgroup>
								<col span="1" style="width: 20%;">
							</colgroup>
							
							<tr>
								<td colspan=2>
									<p style='text-align: center;'><font style='
										font-size: 40px;
										color: #ff85c0;
										text-shadow: 2px 2px #ff0000;
									'>
									Come with us, the digital painting world!
									</font></p>
								</td>
							</tr>
							</tr>
								<td>
									<INPUT style='
										width: 100%;
										height: 50px;
										background: rgba(122, 122, 0, 0.8);
										font-size: 30px;
										text-transform: uppercase;
										letter-spacing: 4px;
										' TYPE="reset" NAME="reset" VALUE="Reset">
								</td>
								<td>
									<button style='
										width: 100%;
										height: 50px;
										background: rgba(102, 204, 255, 0.8);
										font-size: 30px;
										text-transform: uppercase;
										letter-spacing: 4px;
										' TYPE="button" id="submit">Submit</button>
								</td>
							</tr>
						</table>
					</p>
				</FORM>
				
			</div>
			
			<?php include "./../module/footer.php"; ?>
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
							alert("Account created successfully, now redirect you to login page!");
							window.location.replace("./../");
							return;
						}
						alert(this.responseText);
					}
				};
				xhttp.open("POST", "./../app/controller/create_account.php", true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send("username=" + document.getElementsByName("username")[0].value
							+ "&pwd1=" + document.getElementsByName("pwd1")[0].value
							+ "&pwd2=" + document.getElementsByName("pwd2")[0].value
							+ "&email=" + document.getElementsByName("email")[0].value
							);
			});
		</script>
	</BODY>
</HTML>