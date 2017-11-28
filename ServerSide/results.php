<html>
	<meta charset="UTC-8">
	<title>Hello PHP</title>
<body>

<h1>Hello User!</h1>
 
<?php 
	$amtQuestions = 60;
	$questionsCorrect = 0;
	for($i = 1; $i <= $amtQuestions; $i++){
//Using braces allows you to append variables to strings
		$answer = "A{$i}";
		$question = "question{$i}";
		if($_POST[$question] == $answer){
			echo "<p>Correct!</p>";	
			$questionsCorrect++;
		}
		
		echo "<p>Hi</p>";
		echo "<p>This is the result for question";
		echo $i;
		if($_POST["question10"] == "A10"){
			echo "<p>GotQuestion10</p>";
		}
		echo $questionsCorrect;
	}
	$percentage = ($questionsCorrect / $amtQuestions) * 100;
	echo "<br><br>";
	echo $percentage;
?>

</body>
</html>
