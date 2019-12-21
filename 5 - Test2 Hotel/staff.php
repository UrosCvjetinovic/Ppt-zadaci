<DOCTYPE !html>

<head>
	<title> Pocetna strana Register </title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<script src="checkInput.js"></script>
</head>

<body>
	<div class="Container">
		<?php
			if(empty($_POST)){
				include "logIn.php";
			}
			else {
				$IsStaff = false;
				$filename = "login.csv";
				$file_handler = fopen($filename,"r");
				if($file_handler == false) {
						echo "<p> Nije moguce otvoriti fajl users.csv</p>";
					
				}else{
					while(($Row = fgetcsv($file_handler)) !== false){
						if((strcmp($Row[0],$_POST["Ime"]) == 0) and ((strcmp($Row[1],$_POST["Sifra"]) == 0))) {
							$IsStaff = true;
						}
					}
					fclose($file_handler);
					if($IsStaff){
						$filename = "guests.csv";
						$file_handler = fopen($filename,"r");
						
						if($file_handler == false) {
						
						}else{
							while(($Row = fgetcsv($file_handler)) !== false){
								fputcsv($file_handler, $Row);
								echo "<p>";
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
								echo "</p><br>";
							}
								
						}
						fclose($file_handler);
					}
					else{
						include "logIn.php";
						echo "<p> Ne postoji nalog </p>";
					}
				
				}
			}
		
		
		
		?>
	</div>

</body>