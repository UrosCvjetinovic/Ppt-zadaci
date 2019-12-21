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
				include "form.php";
			}
			else {
				$HasRoom = false;
				$filename = "rooms.csv";
				$file_handler = fopen($filename,"r+");
				if($file_handler == false) {
						echo "<p> Nije moguce otvoriti fajl users.csv</p>";
					
				}else{
					while(($Row = fgetcsv($file_handler)) !== false){
						var_dump($Row);
						var_dump($_POST);
						if(intval($Row[0]) === intval($_POST["BrKreveta"]) and ($Row[1] > 0)) {
							$HasRoom = true;
							$Row[1] = $Row[1] - 1;
							// fputcsv($file_handler, $Row); Jedan od nacina
							// je da se csv otvori u isto vreme i za citanje i za //pisanje pa se onda promeni red ovaj
						}
					}
					fclose($file_handler);
					if($HasRoom){
						$filename = "guests.csv";
						$file_handler = fopen($filename,"a");
						if($file_handler == false) {
						
						}else{
								include "Registered.php";
								$Row[0] = $_POST["Ime"];
								$Row[1] = $_POST["Prezime"];
								$Row[2] = $_POST["Telefon"];
								$Row[3] = $_POST["Mejl"];
								$Row[4] = $_POST["BrKreveta"];
								fputcsv($file_handler, $Row);
								fclose($file_handler);
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
						}
					}
					else{
						include "NoFreeRooms.php";
					}
				
				}
			}
		
		
		
		?>
	</div>

</body>