<html>
	<head>
		<title>Mad Libs</title>
	</head>
	<body>
		<form action="madlibs.php" method="get">
			Adjective:<input type="text" name="adjective1">
			<br>
			Plural Noun:<input type="text" name="plurarNoun1">
			<br>
			Adjective:<input type="text" name="adjective2">
			<br>
			Part of the Body (Plural):<input type="text" name="bodyparts1 ">
			<br>
			Body Part:<input type="text" name="bodypart1 ">
			<br>
			Noun:<input type="text" name="noun1">
			<br>
			Noun:<input type="text" name="noun2">
			<br>
			Noun:<input type="text" name="noun3">
			<br>
			Noun:<input type="text" name="noun4">
			<br>
			Noun:<input type="text" name="noun5">
			<br>
			Noun:<input type="text" name="noun6">
			<br>
			Noun:<input type="text" name="noun7">
			<br>
			Noun:<input type="text" name="noun8">
			<br>

		</form>

		<a href="madlibs2.php">Next</a>

		<?php

		$adjective1 = $_GET["adjective1"];
		$pluralNoun1 = $_GET["pluralNoun1"];
		$adjective2 = $_GET["adjective2"];
		$bodyparts1 = $_GET["bodyparts1"];
		$bodypart1 = $_GET["bodypart1"];
		$noun1 = $_GET["noun1"];
		$noun2 = $_GET["noun2"];
		$noun3 = $_GET["noun3"];
		$noun4 = $_GET["noun4"];
		$noun5 = $_GET["noun5"];
		$noun6 = $_GET["noun6"];
		$adjective3 = $_GET["adjective3"];
		$noun7 = $_GET["noun7"];
		$noun8 = $_GET["noun8"];

		echo "HORROR MOVIES <br>";
		echo "Here is a list of the most $adjective1 horror<br>";
		echo "$pluralNoun1 ever made in Hollywood! Each of these  <br>";
		echo "$adjective2 films received a rating of two $bodyparts1 -up<br>";
		echo "from Siskel and Ebert.  <br>";
		echo "<ul><li>1. The Hunch $bodypart1  of Notre $noun1 </li><br>";
		echo"<li>2. The $noun2 of the Living $noun3 </li><br>";
		echo "<li>3. $noun4 of Frankenstein</li><br>";
		echo "<li>4. Invasion of $noun5 Snatchers</li><br>";
		echo "<li>5. $noun6 from the $adjective2</li><br>";
		echo "<li>6. $noun7 on the Left</li><br>";
		echo "<li>7. The $noun8 of the Opera</li></ul><br>";



		?>
	</body>
</html>