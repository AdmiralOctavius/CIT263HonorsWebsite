<!DOCTYPE html>
<html>
	<meta charset="UTC-8">
	<title>Test Begins</title>
	<link rel="stylesheet" type="text/css" href="styles/testStyle.css">
	<link rel="icon" href="images/mini-EducationalEmpowerment.png" />
<body>

<?php
	
$AorF = false;

echo "<form method='post' id='actTest' action='results.php'>";
?>
<?php

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
		<?php 
		if($AorF == false){
			?><div class="questionResponses">
				<label class="questionResponses">
					<input type="radio" name="question<?= $i ?>" value="A<?= $i ?>" checked>A<br>
				</label>
				<label class="questionResponses">
					<input type="radio" name="question<?= $i ?>" value="B<?= $i ?>">B<br>
				</label>
				<label class="questionResponses">
					<input type="radio" name="question<?= $i ?>" value="C<?= $i ?>">C<br>
				</label>
				<label class="questionResponses">
					<input type="radio" name="question<?= $i ?>" value="D<?= $i ?>">D<br>
				</label>
				<label class="questionResponses">
					<input type="radio" name="question<?= $i ?>" value="E<?= $i ?>">E
				</label>
			</div>
			<?php 
			$AorF = true;
		}
		else{
			?>
			<div class="questionResponses">
				<label class="questionResponses">
					<input type="radio" name="question<?= $i ?>" value="A<?= $i ?>" checked>F<br>
				</label>
				<label class="questionResponses">
					<input type="radio" name="question<?= $i ?>" value="B<?= $i ?>">G<br>
				</label>
				<label class="questionResponses">
					<input type="radio" name="question<?= $i ?>" value="C<?= $i ?>">H<br>
				</label>
				<label class="questionResponses">
					<input type="radio" name="question<?= $i ?>" value="D<?= $i ?>">J<br>
				</label>
				<label class="questionResponses">
					<input type="radio" name="question<?= $i ?>" value="E<?= $i ?>">K
				</label>
			</div>
			<?php
				$AorF = false;
				
		}
		?>
	</div>
<?php }
?>
<div id="button">
	<input class="button" type="submit" value="Submit" name="submitForm">
</div>
</form>
</body>	
</html>

