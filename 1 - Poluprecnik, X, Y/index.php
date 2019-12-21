<DOCTYPE !html>
<head>
	<title> Tacka i krug</title>
	<meta charset = "UTF-8">
	<script src="checkForm.js"></script>
</head>
<body>

		<form action = "index.php"		method="post" id="Podaci" onsubmit = "return Validate();">
			<p>Poluprecnik: <br>
				<input type="text" name="poluprecnik">
				</p>
			<p>X koordinata tacke: <br>
				<input type="text" name="xCoord">
				</p>
			<p>Y koordinata tacke: <br>
				<input type="text" name="yCoord">
			</p>
			<input type="submit" value="Posalji">

		</form>
	<?php
		if(!empty($_POST)) {
			$r = $_POST["poluprecnik"];
			$x = $_POST["xCoord"];
			$y = $_POST["yCoord"];
			if ($x**2 + $y**2 < $r**2){
				echo "<p> Tacka se nalazi u krugu <p> ";
			}
			else {
				echo "<p> <p> Tacka se ne nalazi u krugu <p> <p> ";
			}
		}
	?>
</body>