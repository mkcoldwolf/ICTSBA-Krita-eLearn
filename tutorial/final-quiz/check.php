<?php

	$json = $_POST['answer'];
	$jsonObj = json_decode($json);
	
	$answerList = array("Matthias Ettrich", 2, 4, 1, 2, 3);
	$resultList;
	
	for($i=1; $i<=6; $i++) {
		if($jsonObj[$i] == $answerList[$i-1]) {
			$resultList[$i]->correct = true;
		}else{
			$resultList[$i]->correct = false;
			$resultList[$i]->correctAns = $answerList[$i-1];
		}
	}
	
	echo json_encode($resultList);
	
?>