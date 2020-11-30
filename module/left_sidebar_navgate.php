<head>
	<link rel="stylesheet" type="text/css" href="<?php echo $rootDir ?>/module/css/left_sidebar_navgate.css" />
</head>
<div class="sidenav" onmouseover="expanSideNav()" >
	<div style='height: 80px; width: 100%; background: black'>test</div>
	<div class="navmenu">
		<a href="<?php echo $rootDir ?>">
			<span></span>
			<img src='<?php echo $rootDir ?>/image/ui/ui_home.png' style='float: left; height: 40px;'>
			<font class="sidenav-button">Home</font>
			<span></span>
		</a>
		<a href="<?php echo $rootDir ?>profile">
			<span></span>
			<img src='<?php echo $rootDir ?>/image/ui/ui_profile.png' style='float: left; height: 40px;'>
			<font class="sidenav-button">Profile</font>
			<span></span>
		</a>
		<button class='tur-collapse'>
			<span></span>
			<img src='<?php echo $rootDir ?>/image/ui/ui_learn.png' style='float: left; height: 40px;'>
			<font id='tur-text' style='font-size: 25px; color: #818181; display: inline-block; margin-top: 6px;'>Tutorial</font>
			<span></span>
		</button>
		<div class="content">
		  <a class="sidenav-button-small" href="<?php echo $rootDir ?>/tutorial/intro">Intro to Krita</a>
		  <a class="sidenav-button-small" href="<?php echo $rootDir ?>/tutorial/create-icons">How to create icons</a>
		  <hr>
		  <a class="sidenav-button-small" href="<?php echo $rootDir ?>/tutorial/video-sample">Video Sample using Krita</a>
		  <hr>
		  <a class="sidenav-button-small" href="<?php echo $rootDir ?>/tutorial/final-quiz">Final quiz</a>
		</div>
		<a href="<?php echo $rootDir ?>download">
			<span></span>
			<img src='<?php echo $rootDir ?>/image/ui/ui_download.png' style='float: left; height: 40px;'>
			<font class="sidenav-button">Download</font>
			<span></span>
		</a>
		<a href="<?php echo $rootDir ?>forum">
			<span></span>
			<img src='<?php echo $rootDir ?>/image/ui/ui_forum.png' style='float: left; height: 40px;'>
			<font class="sidenav-button">Forum</font>
			<span></span>
		</a>
		<a href="<?php echo $rootDir ?>game">
			<span></span>
			<img src='<?php echo $rootDir ?>/image/ui/ui_game.png' style='float: left; height: 40px;'>
			<font class="sidenav-button">Games</font>
			<span></span>
		</a>
		<a href="<?php echo $rootDir ?>logout">
			<span></span>
			<img src='<?php echo $rootDir ?>/image/ui/ui_logout.png' style='float: left; height: 40px;'>
			<font class="sidenav-button">Logout</font>
			<span></span>
		</a>
	</div>
</div>

<script>

	function toggleSideNav() {

		//console.log(document.getElementsByClassName("sidenav")[0].style.width);
		if(document.getElementsByClassName("sidenav")[0].style.width == "160px" || document.getElementsByClassName("sidenav")[0].style.width == "") {
			unexpanSideNav();
		}else if(document.getElementsByClassName("sidenav")[0].style.width == "50px") {
			expanSideNav();
		}
	  
	}
	
	function expanSideNav() {
		document.getElementsByClassName("sidenav")[0].style.width = "160px";
		document.getElementsByClassName("main-frame")[0].style.marginLeft= "160px";
		document.getElementById("framed").style.marginLeft = "160px";
		document.getElementById("sidenav-expan").classList.add('sidenav-expan-true');
		document.getElementById("sidenav-expan").classList.remove('sidenav-expan-false');
		
		document.getElementById("tur-text").style.display = "inline-block";
		for(var key in document.getElementsByClassName("sidenav-button")) {
			if(document.getElementsByClassName("sidenav-button")[key].style != null) {
				document.getElementsByClassName("sidenav-button")[key].style.display = "block";
			}
		}
		
		document.getElementById("headerLogo").style.width = "160px";
		document.getElementById("headerTitle").innerHTML = "Krita E-Learn Platform";
	}
	
	function unexpanSideNav() {
		document.getElementsByClassName("sidenav")[0].style.width = "50px";
		document.getElementsByClassName("main-frame")[0].style.marginLeft = "50px";
		document.getElementById("framed").style.marginLeft = "50px";
		document.getElementById("sidenav-expan").classList.add('sidenav-expan-false');
		document.getElementById("sidenav-expan").classList.remove('sidenav-expan-true');
		
		document.getElementById("tur-text").style.display = "none";
		for(var key in document.getElementsByClassName("sidenav-button")) {
			if(document.getElementsByClassName("sidenav-button")[key].style != null) {
				document.getElementsByClassName("sidenav-button")[key].style.display = "none";
			}
		}
		
		document.getElementById("headerLogo").style.width = "50px";
		document.getElementById("headerTitle").innerHTML = "Krita";
	}	
	
	var coll = document.getElementsByClassName("tur-collapse");
	var i;

	for (i = 0; i < coll.length; i++) {
	  coll[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var content = this.nextElementSibling;
		if (content.style.maxHeight){
		  content.style.maxHeight = null;
		} else {
		  content.style.maxHeight = content.scrollHeight + "px";
		} 
	  });
	}
</script>