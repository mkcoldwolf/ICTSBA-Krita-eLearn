<?php
	require('./app/model/bootstrap.php');
	require('./app/model/session.php');
?>
<html>
  <head>
    <title>Krita Learning HomePage</title>
  </head>
  <body style='
	background-image: url("./image/background/home.png");
	background-size: cover !important;
    background-position: center top;
	'>
	  <!--<frameset rows="15%,*">
		<frame name="top" src="banner.htm" marginheight="0" marginwidth="0" scrolling="no" frameborder=0 noresize="yes">
		<frameset cols="150,*">
		   <frame name="left" src="menu.htm"  marginheight="0" marginwidth="0" scrolling="no" frameborder=0 noresize="yes">
		   <frame name="content" src="forum.htm"  marginheight="0" marginwidth="0" scrolling="yes" frameborder=0 noresize="yes">
		 </frameset>
	   </frameset>-->
	   <?php include './module/left_sidebar_navgate.php'; ?>
	   <?php include './module/header.php'; ?>
	   <div class="main-frame main-content">
         <!--<iframe src="https://mccwtech.net" height=100% width=100%></iframe>-->
		 <div style='margin: auto; margin-top: 600px; margin-bottom: 50px; width: 80%; height: 20%; background-color: rgba(102, 204, 255, 0.8);'>
			<p style='padding: 10px; font-size: 20px;'>
			&nbsp;&nbsp;&nbsp;&nbsp; Krita E-Learn Platform, is a project made under the push of HKDSE, we aim to design and build an E-learning Playform for helping
			Primary students to learn digital painting (which is a part of Junior Computer subject of their school) with approproated
			multimedia elements. By providing such E-learning platform to those children, we can train their creativity, art ability
			which is very important to the future of them. This project is sponsored and supported by <a href='https://mccwtech.net'>MCCW Technology</a>
			and lets get every children to love digital painting with computer such as high-technology activity.
			</p>
		 </div>
		 <?php include './module/footer.php'; ?>
	   </div>
   </body>
<html>
