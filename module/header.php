<head>
  <link rel="stylesheet" type="text/css" href="<?php echo $rootDir ?>/module/css/header.css" />
</head>
<div id="header">
  <div id="headerLogo" style='width: 160px; transition: 0.5s'>
	<center>
		<img src="<?php echo $rootDir ?>/image/krita-e-learn-icon.png" title="Logo of Krita e-learn platform" height=50 width=50 />
		<div>
			<font id='headerTitle' style='color: white;'>Krita E-Learn Platform</font>
		</div>
	</center>
  </div>
  <!--<img src="MCCWIcon.png" title="Logo of MCCW" align="middle" height="50" width="50" />-->
  <!--<br>-->
  <!--<font size="5" color="aqua">MCCW Network</font>-->
  <div id="framed">
  
	  <button id='sidenav-expan' class='sidenav-expan-true' onClick='toggleSideNav();' style='background-image: url(<?php echo $rootDir ?>/image/ui/sidenav_toggle.png);'></button>
	  <div id="headerTextBody">
		<a href="/forums">
		  <div id="headerText">
			<font size="5" color="aqua">Forums</font>
		  </div>
		</a>
		<a href="/">
		  <div id="headerText">
			<font size="5" color="aqua">Home</font>
		  </div>
		</a>
	  </div>
  </div>
</div>
