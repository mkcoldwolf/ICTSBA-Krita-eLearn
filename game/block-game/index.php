<?php 
	require('./../../app/model/bootstrap.php');
	require('./../../app/model/session.php');
?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | BlockGameProject</title>
    <link rel="shortcut icon" href="TemplateData/favicon.ico">
    <link rel="stylesheet" href="TemplateData/style.css">
    <script src="TemplateData/UnityProgress.js"></script>  
    <script src="Build/UnityLoader.js"></script>
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "Build/Build.json", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
	
	<?php include './../../module/left_sidebar_navgate.php' ?>
	<?php include './../../module/header.php' ?>
		
	<div class="main-frame main-content">
	
	  <center>
	    <div class="webgl-content" style='display: inline-block; margin-bottom: 40px;'>
	      <div id="gameContainer" style="width: 960px; height: 600px"></div>
	      <div class="footer">
		    <div class="webgl-logo"></div>
		    <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
		    <div class="title">BlockGameProject</div>
	      </div>
	    </div>
	  </center>
	  
	  <?php include './../../module/footer.php' ?>
    </div>
  </body>
</html>