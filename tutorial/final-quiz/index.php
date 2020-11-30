<?php 
	require('./../../app/model/bootstrap.php');
	require('./../../app/model/session.php');
?>
<html>
	<head>
		<title>On-line Quiz</title>
		<link href ="style.css" rel ="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	</head>


	<body>
	
		<div style='
			position: fixed;
			z-index: -1;
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
			background-image: url("./image/background/apps.jpg");
			background-size: cover;
			background-position: center top;
			background-attachment: fixed;
			filter: blur(3px);
		'></div>
	
		<?php include './../../module/left_sidebar_navgate.php' ?>
		<?php include './../../module/header.php' ?>
		
		<div class='main-frame main-content'>
		
			<div style='margin: auto; width: 80%;'>
		
				<h1 align=center>Multiple Choice Quiz</h1>
				
				<p style='width: 60%; margin: auto; text-align: center; margin-bottom: 20px;'>
				Congratulations! It seems that u have gone thought all of our tutorials, and you have gone so far than the startup
				<br>
				Its time to have a final quiz with us! Lets challenge yourself with those questions below!
				</p>

				<form id = "quiz" name = "quiz" style='margin: auto; margin-bottom: 40px;'>

					<p class = "qus-title-1">What is the name of creator of Krita?</p>
					<input id = "sq" name = "qus-1"> </input>

					<p class = "qus-title-2">What type is Krita software is?</p>
					<input type = "radio" id = "mc" name = "qus-2" value = "1"> Commercial Software<br>
					<input type = "radio" id = "mc" name = "qus-2" value = "2"> Open-Source Software<br>
					<input type = "radio" id = "mc" name = "qus-2" value = "3"> Pirated Software<br>
					<input type = "radio" id = "mc" name = "qus-2" value = "4"> Backend Software<br>

					<p class = "qus-title-3">Where Krita can be used?</p>
					<input type = "radio" id = "mc" name = "qus-3" value = "1"> Education usage<br>
					<input type = "radio" id = "mc" name = "qus-3" value = "2"> Personal usage<br>
					<input type = "radio" id = "mc" name = "qus-3" value = "3"> Commercial usage<br>
					<input type = "radio" id = "mc" name = "qus-3" value = "4"> All of the above<br>
					
					<p class = "qus-title-4">What is this tools shown is called?</p>
					<img src='./image/qus-4-image.png' width=80px height=80px style='float: right; margin-right: 10%;'></img>
					<input type = "radio" id = "mc" name = "qus-4" value = "1"> Rectangular Selection Tool<br>
					<input type = "radio" id = "mc" name = "qus-4" value = "2"> Magic Wand<br>
					<input type = "radio" id = "mc" name = "qus-4" value = "3"> Transform Tool<br>
					<input type = "radio" id = "mc" name = "qus-4" value = "4"> SVG Text Tool<br>
					
					<p class = "qus-title-5">What feature Krita does not have?</p>
					<input type = "radio" id = "mc" name = "qus-5" value = "1"> Animating<br>
					<input type = "radio" id = "mc" name = "qus-5" value = "2"> 3D Drawing<br>
					<input type = "radio" id = "mc" name = "qus-5" value = "3"> Digital Painting<br>
					<input type = "radio" id = "mc" name = "qus-5" value = "4"> Integration with Drawing boards<br>
					
					<p class = "qus-title-6">Which platform Krita does not support?</p>
					<input type = "radio" id = "mc" name = "qus-6" value = "1"> Linux<br>
					<input type = "radio" id = "mc" name = "qus-6" value = "2"> Windows<br>
					<input type = "radio" id = "mc" name = "qus-6" value = "3"> IOS<br>
					<input type = "radio" id = "mc" name = "qus-6" value = "4"> Android<br>

					<center id='result-area'>
						<input id="submit-btn" type="button" value="Submit">
					</center>

				</form>
				
			</div>
			
			<?php include './../../module/footer.php' ?>
		</div>
		
		<script>
		
			document.getElementById('submit-btn').addEventListener('click', function() {
				
				var answer = [];
				for(var i=1; i<=6; i++) {
					answer[i] = document.quiz['qus-' + i].value;
				}
				
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if(this.readyState == 4 && this.status == 200) {
						
						var result = JSON.parse(this.responseText);
								
						var score = 0;
						for(var i=1; i<=6; i++) {
							
							var eleList = document.getElementsByName('qus-' + i);
							
							for(var j=0; j<eleList.length; j++) {	
								var element = eleList[j];
								element.disabled = true;
							}
							
							document.getElementById('submit-btn').disabled = true;
							
							if(result[i].correct == true) {
								score++;
								document.getElementsByClassName('qus-title-'+ i)[0].style.backgroundColor = "rgba(27, 250, 124, 0.8)";
							}
							
							if(result[i].correct == false) {
								
								document.getElementsByClassName('qus-title-'+ i)[0].style.backgroundColor = "rgba(245, 66, 66, 0.8)";
								
								var corrAnsMessage = document.createElement('P');
								corrAnsMessage.classList = ['corrAnsMessage'];
								corrAnsMessage.innerHTML = "The correct answer is " + result[i].correctAns;
								
								document.getElementsByClassName('qus-title-'+ i)[0].parentNode.insertBefore(corrAnsMessage, document.getElementsByClassName('qus-title-'+ i)[0].nextSibling);
							}
							
						}
						
						var pictures = ["./image/perfection.gif", "./image/okay.gif", "./image/do-better.gif"];
						var messages = ["Legendary WORK!!!", "That's okay, Nice try!", "You really have to do better than this......"];
						
						var resultDiv = document.createElement('DIV');
						
						var gif = document.createElement('IMG');
						var message = document.createElement('P');
						
						if(score >= 5) {
							gif.src = pictures[0];
							message.innerHTML = "You got " + score + " score." + "<br>" + messages[0];
						}
						
						if(score <= 4 && score >= 2) {
							gif.src = pictures[1];
							message.innerHTML = "You got " + score + " score." + "<br>" + messages[1];
						}
						
						if(score <= 1) {
							gif.src = pictures[2];
							message.innerHTML = "You got " + score + " score." + "<br>" + messages[2];
						}
						
						resultDiv.append(gif);
						resultDiv.append(message);
						
						document.getElementById('result-area').append(resultDiv);
						
						/*document.getElementById("quiz").style.visibility = "hidden";
						document.getElementById("after_submit").style.visibility = "visible";


						document.getElementById("message").innerHTML = messages[score];
						document.getElementById("number_correct").innerHTML = "You got " + correct + " correct.";
						document.getElementById("picture").src = pictures[score];*/
					}
				};
				xhttp.open("POST", "./check", true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send("answer=" + JSON.stringify(answer));
	
			});
			
		</script>

	</body>
</html>