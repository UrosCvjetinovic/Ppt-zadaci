<DOCTYPE !html>
<head>
	<meta charset = "UTF-8">
	<script src="checkForm.js"></script>
</head>
<body>
	<form action="Student.php" method="post" id="StudentId" onsubmit="return Validate(2);" >
		<p> Broj indeksa <br>
		<input type="text" name="OBrIdx">	
		</p>
		<input type="submit" value="Posalji">	
	</form>

	<?php
	
		if(!empty($_POST)){
			$filename = "spisak.csv";
			$file_handle = fopen($filename,"r");
			$student_find = false;
			if($file_handle == false){
				echo "<p> Problem sa otvaranjem fajla <p>";
			}
			else{
				$No = $_POST["OBrIdx"];
				while (($Row = fgetcsv($file_handle))!== false){
					var_dump($Row);
					if(strcmp($Row[2],$No) === 0){
						echo "Student<br><br>";
						echo $Row[0];
						echo " ";
						echo $Row[1];
						echo " ";
						echo $Row[2];
						echo " ";
						echo $Row[3];
						echo " ";
						echo $Row[4];
						echo " ";
						echo $Row[5];
						echo " ";
						echo "<br>";
						$student_find = true;
						fclose($file_handle);
						break;						
						}						
				}
				if($student_find == false){
					echo "Ne postoje podaci za studenta";
				}
			}
		}
	?>

</body>