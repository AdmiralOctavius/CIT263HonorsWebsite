<html>
	<head>
		<meta charset="UTC-8">
		<title>Hello PHP</title>
		<link rel="icon" href="mini-EducationalEmpowerment.png" />
		<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="styles/mainStyle.css">
	</head>
<body>

		<div id="headerContainer">
			<div id="header">
				<img id="headerImage" src="EducationalEmpowerment.png" alt="logo">
			<div id="headerText">
				<h1 >Educational Empowerment</h1>
			</div>
		</div>
			
		</div>
		<div id="navbar">
			<ul>
				<li><a href= "home.html">Home</a></li>
				<li><a href = "contactUs.html">Contact Us</a></li>
				<li><a href = "aboutUs.html">About Us</a></li>
			<ul>
		</div>
		<div id="mainContent">
		
<?php 
	$amtQuestions = 60;
	$questionsCorrect = 0;
	
	
	if($_POST[question1] == "D1"){
		//echo "Got Question 1";
		$questionsCorrect++;
	}
	if($_POST[question2] == "C2"){
		//echo "Got Question 2";
		$questionsCorrect++;
	}
	if($_POST[question3] == "E3"){
		//echo "Got Question 3";
		$questionsCorrect++;
	}
	if($_POST[question4] == "A4"){
		//echo "Got Question 4";
		$questionsCorrect++;
	}
	if($_POST[question5] == "E5"){
		//echo "Got Question 5";
		$questionsCorrect++;
	}
	if($_POST[question6] == "C6"){
		//echo "Got Question 6";
		$questionsCorrect++;
	}
	if($_POST[question7] == "E7"){
		//echo "Got Question 7";
		$questionsCorrect++;
	}
	if($_POST[question8] == "C8"){
		//echo "Got Question 8";
		$questionsCorrect++;
	}
	if($_POST[question9] == "A9"){
		//echo "Got Question 9";
		$questionsCorrect++;
	}
	if($_POST[question10] == "E10"){
		//echo "Got Question 10";
		$questionsCorrect++;
	}
	if($_POST[question11] == "C11"){
		//echo "Got Question 11";
		$questionsCorrect++;
	}
	if($_POST[question12] == "E12"){
		//echo "Got Question 12";
		$questionsCorrect++;
	}
	if($_POST[question13] == "B13"){
		//echo "Got Question 13";
		$questionsCorrect++;
	}
	if($_POST[question14] == "C14"){
		//echo "Got Question 14";
		$questionsCorrect++;
	}
	if($_POST[question15] == "B15"){
		//echo "Got Question 15";
		$questionsCorrect++;
	}
	if($_POST[question16] == "C16"){
		//echo "Got Question 16";
		$questionsCorrect++;
	}
	if($_POST[question17] == "D17"){
		//echo "Got Question 17";
		$questionsCorrect++;
	}
	if($_POST[question18] == "A18"){
		//echo "Got Question 18";
		$questionsCorrect++;
	}
	if($_POST[question19] == "D19"){
		//echo "Got Question 19";
		$questionsCorrect++;
	}
	if($_POST[question20] == "A20"){
		//echo "Got Question 20";
		$questionsCorrect++;
	}
	if($_POST[question21] == "B21"){
		//echo "Got Question 21";
		$questionsCorrect++;
	}
	if($_POST[question22] == "C22"){
		//echo "Got Question 22";
		$questionsCorrect++;
	}
	if($_POST[question23] == "A23"){
		//echo "Got Question 23";
		$questionsCorrect++;
	}
	if($_POST[question24] == "C24"){
		//echo "Got Question 24";
		$questionsCorrect++;
	}
	if($_POST[question25] == "B25"){
		//echo "Got Question 25";
		$questionsCorrect++;
	}
	if($_POST[question26] == "B26"){
		//echo "Got Question 26";
		$questionsCorrect++;
	}
	if($_POST[question27] == "E27"){
		//echo "Got Question 27";
		$questionsCorrect++;
	}
	if($_POST[question28] == "C28"){
		//echo "Got Question 28";
		$questionsCorrect++;
	}
	if($_POST[question29] == "C29"){
		//echo "Got Question 29";
		$questionsCorrect++;
	}
	if($_POST[question30] == "B30"){
		//echo "Got Question 30";
		$questionsCorrect++;
	}
	if($_POST[question31] == "D31"){
		//echo "Got Question 31";
		$questionsCorrect++;
	}
	if($_POST[question32] == "E32"){
		//echo "Got Question 32";
		$questionsCorrect++;
	}
	if($_POST[question33] == "B33"){
		//echo "Got Question 33";
		$questionsCorrect++;
	}
	if($_POST[question34] == "C34"){
		//echo "Got Question 34";
		$questionsCorrect++;
	}
	if($_POST[question35] == "D35"){
		//echo "Got Question 35";
		$questionsCorrect++;
	}
	if($_POST[question36] == "D36"){
		//echo "Got Question 36";
		$questionsCorrect++;
	}
	if($_POST[question37] == "A37"){
		//echo "Got Question 37";
		$questionsCorrect++;
	}
	if($_POST[question38] == "A38"){
		//echo "Got Question 38";
		$questionsCorrect++;
	}
	if($_POST[question39] == "B39"){
		//echo "Got Question 39";
		$questionsCorrect++;
	}
	if($_POST[question40] == "A40") {
		//echo "Got question 40";
		$questionsCorrect++;
	}
	if($_POST[question41] == "E41") {
		//echo "Got question 41";
		$questionsCorrect++;
	}
	if($_POST[question42] == "E42") {
		//echo "Got question 42";
		$questionsCorrect++;
	}
	if($_POST[question43] == "D43") {
		//echo "Got question 43";
		$questionsCorrect++;
	}
	if($_POST[question44] == "B44") {
		//echo "Got question 44";
		$questionsCorrect++;
	}
	if($_POST[question45] == "D45") {
		//echo "Got question 45";
		$questionsCorrect++;
	}
	if($_POST[question46] == "D46") {
		//echo "Got question 46";
		$questionsCorrect++;
	}
	if($_POST[question47] == "B47") {
		//echo "Got question 47";
		$questionsCorrect++;
	}
	if($_POST[question48] == "B48") {
		//echo "Got question 48";
		$questionsCorrect++;
	}
	if($_POST[question49] == "A49") {
		//echo "Got question 49";
		$questionsCorrect++;
	}
	if($_POST[question50] == "A50") {
		//echo "Got question 50";
		$questionsCorrect++;
	}
	if($_POST[question51] == "E51") {
		//echo "Got question 51";
		$questionsCorrect++;
	}
	if($_POST[question52] == "C52") {
		//echo "Got question 52";
		$questionsCorrect++;
	}
	if($_POST[question53] == "B53") {
		//echo "Got question 53";
		$questionsCorrect++;
	}
	if($_POST[question54] == "E54") {
		//echo "Got question 54";
		$questionsCorrect++;
	}
	if($_POST[question55] == "E55") {
		//echo "Got question 55";
		$questionsCorrect++;
	}
	if($_POST[question56] == "E56") {
		//echo "Got question 56";
		$questionsCorrect++;
	}
	if($_POST[question57] == "A57") {
		//echo "Got question 57";
		$questionsCorrect++;
	}
	if($_POST[question58] == "E58") {
		//echo "Got question 58";
		$questionsCorrect++;
	}
	if($_POST[question59] == "E59") {
		//echo "Got question 59";
		$questionsCorrect++;
	}
	if($_POST[question60] == "D60") {
		//echo "Got question 60";
		$questionsCorrect++;
	}
	
	$percentage = ($questionsCorrect / $amtQuestions) * 100;
	
	//$myfile = fopen("testfile.txt", "w");
	$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	$txt = "Congratulations! You Got: " . $questionsCorrect . ". Out of: " . $amtQuestions . " right!\n";
	fwrite($myfile, $txt);
	$txt = "Your percentage was: " . $percentage . ".\n";
	fwrite($myfile, $txt);
	fclose($myfile);
?>
		<p id="Percentage">Congratulations your final score was: <span id="PercentNumber"><?php echo $percentage; ?></span></p>
		<p id="content">To download a packet of study guide material based on your score please click on the second button below. <br>To download the stats from this test, click on the first button.</p>
		<div id="buttonContainer">
			<a href="newfile.txt" download="ResultsPacket.txt" id="DownloadButton">Download Test Results</a>
			<a href="practicemathplacementtest1.pdf" download="StudyGuide.pdf" id="DownloadButton2">Download Study Guide</a>
		</div>
		<div>
			<br> To return to the start of the test, navigate back to the homepage! <br> Thanks for using Educational Empowerment!</p>
		</div>
	</div>
		<footer>
				<ul>
					<li><a href= "home.html">Home</a></li>
					<li><a href = "contactUs.html">Contact Us</a></li>
					<li><a href = "aboutUs.html">About Us</a></li>
				<ul>
		</footer>
	</body>
</html>
