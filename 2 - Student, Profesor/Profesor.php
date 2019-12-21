<DOCTYPE !html>
<head>
	<meta charset = "UTF-8">
	<script src="checkForm.js"></script>
</head>
<body>
	<form action="Profesor.php" method="post" id="ProfesorId" onsubmit="return Validate(1);" >
		<p> Ime <br>
		<input type="text" name="Ime">	
		</p>
		<p> Prezime <br>
		<input type="text" name="Prezime">	
		</p>
		<p> Broj indeksa <br>
		<input type="text" name="BrIdx">	
		</p>
		<p> Broj poena na prvom testu <br>
		<input type="text" name="Poeni1">	
		</p>
		<p> Broj poena na drugom testu <br>
		<input type="text" name="Poeni2">	
		</p>
		<input type="submit" value="Posalji">	
	</form>

	<?php
		if(!empty($_POST)){
			$filename = "spisak.csv";
			$file_handle = fopen($filename,"a");
			if ($file_handle == false){
				echo "<p> Problem sa otvaranjem fajla <p>";
			}
			else {
				$Row = $_POST;
				$Row["Ukupno"] = $Row["Poeni1"] + $Row["Poeni2"];
				fputcsv($file_handle,$Row);
				echo "Uspesno dodat student <br>";
				echo $Row["Ime"];
				echo " ";
				echo $Row["Prezime"];
				echo " ";
				echo $Row["BrIdx"];
				echo " ";
				echo $Row["Poeni1"];
				echo " ";
				echo $Row["Poeni2"];
				echo " ";
				echo "<br>";
				fclose($file_handle);
			}
		}
	?>

</body>