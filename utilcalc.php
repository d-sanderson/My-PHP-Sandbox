<html>
	<head>
		<title>Util Calc</title>
	</head>
	<body>
		<form action="utilcalc.php" method="get">
			PNM: <input type="number" name="pnm">
			<br>
			GAS: <input type="number" name="gas">
			Internet: 32
			<br>
			WATER: <input type="number" name="water">
			<input type="submit">
		</form>

	Answer:<?php echo $_GET["pnm"] +  $_GET["gas"] + $_GET["water"] + 32 / 3;


	?>
	</body>
</html>