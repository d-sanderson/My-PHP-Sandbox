<html>
	<head>
		<title>Mad Libs</title>
	</head>
	<body>
		<form action="madlibs.php" method="get">
			 Plural Noun:<input type="text" name="pluralNoun1">
			<br>
			Adverb:<input type="text" name="adverb1">
			<br>
			Verb:<input type="text" name="verb1">
			<br>
			Article of Clothing:<input type="text" name="articleofclothing">
			<br>
			Body Part:<input type="text" name="bodypart1">
			<br>
			Adjective:<input type="text" name="adjective1">
			<br>
			Noun:<input type="text" name="noun1">
			<br>
			Plural Noun:<input type="text" name="pluralNoun2">
			<br>
			Body Part:<input type="text" name="bodypart2">
			<br>
			Plural Noun:<input type="text" name="pluralNoun3">
			<br>
			Body Part:<input type="text" name="bodypart3">
			<br>
			Noun:<input type="text" name="noun2">
			<br>
			Noun:<input type="text" name="noun3">
			<br>
			Verb Ending in -ing:<input type="text" name="verbwing">
			<br>
			Adjective:<input type="text" name="adjective2">
			<br>
			Adjective:<input type="text" name="adjective3">
			<br>
			Verb:<input type="text" name="verb2">
			<input type="submit">

		</form>

		<a href="madlibs2.php">Next</a>

<?php

$pluralNoun1 = $_GET["pluralNoun1"];
$adverb1 = $_GET["adverb1"];
$verb1 = $_GET["verb1"];
$articleofClothing = $_GET["articleofclothing"];
$bodypart1 = $_GET["bodypart1"];
$adjective1 = $_GET["adjective1"];
$noun1 = $_GET["noun1"];
$pluralNoun2 = $_GET["pluralNoun2"];
$bodyPart2 =  $_GET["bodypart2"];
$pluralNoun3 = $_GET["pluralNoun3"];
$bodyPart3 = $_GET["bodypart3"];
$noun2 = $_GET["noun2"];
$noun3 = $_GET["noun3"];
$verbwing = $_GET["verbwing"];
$adjective2 = $_GET["adjective2"];
$adjective3 = $_GET["adjective3"];
$verb2 = $_GET["verb2"];

		echo "How to date the Coolest Person in School <br>";
		echo "It's simple turn the $pluralNoun1 . Make him/her want <br>";
		echo "$adverb1 to date you. Make sure you're always dressed <br>";
		echo "to $verb1. Each and everyday, wear a/an $articleofClothing <br>";
		echo "that you know shows of your $bodypart1 to $adjective1 <br>";
		echo "advantage and make your $noun1 look like a million $pluralNoun2<br>";
		echo "Even if the two of you make meaninful $bodyPart2 contact, don't<br>";
		echo "admit it. No hugs or $pluralNoun3. Just shake his/her $bodyPart3 <br>";
		echo "firmly. And remember, when he/she asks you out, even though a chill<br>";
		echo "may run down your $noun2 and you can't stop your $noun3 from $verbwing<br>";
		echo "just play it $adjective2. Take a long pause before answering in a very<br>";
		echo "$adjective3 voice.I'll have to $verb2<br>";
?>
	</body>
</html>