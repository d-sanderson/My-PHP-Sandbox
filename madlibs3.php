<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<title>Mad Libs</title>
	</head>
	<body>
		<img src="mad_Libs_Logo.png">
		<form action="madlibs3.php" method="get">

			Body Part:<input type="text" name="bodyPart1">
			<br>
			Body Part:<input type="text" name="bodyPart2">
			<br>
			Number:<input type="text" name="number1">
			<br>
			Adjective:<input type="text" name="adjective1">
			<br>
			Color:<input type="text" name="color1">
			<br>
			Plural Noun:<input type="text" name="pluralNoun1">
			<br>
			Verb:<input type="text" name="verb1">
			<br>
			Verb:<input type="text" name="verb2">
			<br>
			Plural Noun:<input type="text" name="pluralNoun2">
			<br>
			Body Part:<input type="text" name="bodyPart3">
			<br>
			Noun:<input type="text" name="noun1">
			<br>
			Verb:<input type="text" name="verb3">
			<br>
			Adjective: <input type="text" name="adjective2">
			<br>
			Verb:<input type="text" name="verb4">
			<br>
			Verb:<input type="text" name="verb5">
			<br>
			Verb:<input type="text" name="verb6">
			<br>
			Noun:<input type="text" name="noun2">
			<input type="submit">

		</form>

		<a href="madlibs1.php">Next</a>

		<?php
		error_reporting(0);
		$bodyPart1 = $_GET["bodyPart1"];
		$bodyPart2 = $_GET["bodyPart2"];
		$number1 = $_GET["number1"];
		$adjective1 = $_GET["adjective1"];
		$color1 = $_GET["color1"];
		$pluralNoun1 = $_GET["pluralNoun1"];
		$verb1 = $_GET["verb1"];
		$verb2 = $_GET["verb2"];
		$pluralNoun2 = $_GET["pluralNoun2"];
		$bodyPart3 = $_GET["bodyPart3"];
		$noun1 = $_GET["noun1"];
		$verb3 = $_GET["verb3"];
		$adjective2 = $_GET["adjective2"];
		$verb3 = $_GET["verb4"];
		$verb3 = $_GET["verb5"];
		$verb3 = $_GET["verb6"];
		$noun2 = $_GET["noun2"];

		echo "50 Shades Of Madlibs<br>";
		echo "He holds out his <span>$bodyPart1 </span>and in his <span>$bodyPart2</span>, are <span> $number1 </span><br>";
		echo "<span> $adjective1 $color $pluralNoun1 </span>linked with a thick black thread ... <br>";
		echo "Inside me!<span> $verb1 </span>linked with a thick black thread ...<br>";
		echo "Inside me! I<span>$verb2</span> , and all the <span> $pluralNoun2</span> deep in my <br>";
		echo "<span>$bodyPart3</span> clench. My inner <span>$noun1</span>is doing the <span>$verb3</span> of the seven veils.<br>";
		echo "<br> <br>";
		echo "It's a/an <span>$adjective2</span>. Once they're inside me, I can't really $verb4 them<br>";
		echo "but then again I know they're there. I may have to <span>$verb5</span> them - but then again I  <br>";
		echo "know they're there. I may have to $verb6 these. They make me needy, needy for<span> $noun2<span> <br>";




		?>
	</body>
