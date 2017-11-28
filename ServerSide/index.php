<!DOCTYPE html>
<html>
	<meta charset="UTC-8">
	<title>Hello PHP</title>
	<link rel="stylesheet" type="text/css" href="index.css">
<body>

<?php
$name = "PHP";
echo "<h1>Hello, $name!</h1>";
echo "<form method='post' id='actTest' action='results.php'>";
?>
<?php
//Hard code this for now, make this in a text file later
$amtQuestions = 60;
for($i = 1; $i <= $amtQuestions; $i++)
{ if($i == 33){ echo "<img src='questions/questionPre33.png' alt='questionPre33'>";}
if($i == 39){ echo "<img src='questions/questionPre39.png' alt='questionPre39'>";}
?>
	<div class="QuestionBlock">
		<h2>Solve the following:</h2>
		<div class="QuestionImages">
			<img src='questions/question<?php echo $i ?>.png' alt='question<?php echo $i ?>'>
		</div>
		<div class="questionResponses">
			<input type="radio" name="question<?= $i ?>" value="A<?= $i ?>" checked>A<br>
			<input type="radio" name="question<?= $i ?>" value="B<?= $i ?>">B<br>
			<input type="radio" name="question<?= $i ?>" value="C<?= $i ?>">C<br>
			<input type="radio" name="question<?= $i ?>" value="D<?= $i ?>">D<br>
			<input type="radio" name="question<?= $i ?>" value="E<?= $i ?>">E
		</div>
	</div>
<?php }
?>
<input type="submit" value="Submit" name="submitForm">
</form>
</body>	
</html>

