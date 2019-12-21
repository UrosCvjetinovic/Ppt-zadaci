<DOCTYPE !html>
<head>
	<title> Pocetna </title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<script src="checkForm.js"></script>
</head>

<body>
	<div class="Container">
	<?php
		echo "----Nije zavrseno--";
		if(empty($_POST)){
			include "LogIn.php";
		}
		else {
			$FoundUser = false;
			switch($_POST["id"]){
				case "LogIn":
					$filename = "users.csv";
					$file_handle = fopen($filename, "r");
					if ($file_handle == false) {
						include "LogIn.php";
						echo "<p> Nije moguce otvoriti fajl users.csv</p>";
					}
					else {
						while(($Row = fgetcsv($file_handle)) !== false){
							var_dump($Row);
							if ( (strcmp($Row[0],$_POST["User"]) == 0) and (strcmp($Row[1],$_POST["Password"]) == 0) ){
								$FoundUser = true;
								$permission = $Row[2];
							}
						}
						if($FoundUser){
							switch($permission){
								case 0: 
									include "administrator.php";
									break;
								
								case 1:
									include "profesor1.php";
									break;
								
								case 2:
									include "student.php";
							}
						}else {
							include "LogIn.php";
							echo "Nije pronadjen korisnik";
						}
					}
						break;
					case "Admin":
						$filename = "users.csv";
						$file_handle = fopen($filename, "r");
						if ($file_handle == false) {
							include "Admin.php";
							echo "<p> Nije moguce otvoriti fajl users.csv</p>";
						}else {
							while(($Row = fgetcsv($file_handle)) !== false){
								var_dump($Row);
								if ( (strcmp($Row[0],$_POST["username"]) == 0) and (strcmp($Row[1],$_POST["password"]) == 0) and (strcmp($Row[1],$_POST["permission"]) == 0) ) {
									$FoundUser = true;
								}
							}
							fclose($file_handle);		
							if($FoundUser){
								include "Admin.php";
								echo "<p> Korisnik vec postoji sa tim dozvolama </p>";
							
							}else {
								$filename = "users.csv";
								$file_handle = fopen($filename, "a");
								$Row[0] = $_POST["username"];
								$Row[1] = $_POST["password"];
								$Row[2] = $_POST["permission"];
								fputcsv($file_handle,$Row);
								include "Admin.php";
								var_dump($Row);
								echo "<p> Uspesno dodat korisnik </p>";
							}
						}
						break;
					case "Profesor1":
					
						break;
					case "Student":
					
						break;
				}
			}
	?>
	</div>
	
</body>