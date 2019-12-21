<DOCTYPE !html>

<head>
	<meta charset = "UTF-8">
	<title> Pocetna strana </title>
	<link rel="stylesheet" href="style.css">
	<script src="checkForm.js"></script>
</head>
<body>
	<div class="Container">
		<?php
			if(!empty($_POST)){
				if(!empty($_POST["FormId"])){
					if(strcmp($_POST["FormId"], "LogIn") == 0){
						if((strcmp($_POST["Password"], "admin") == 0) and (strcmp($_POST["User"], "admin") == 0)){
							include "SucessfullLog.php";
						}
						else {
							include "ErrorLog.php";
							}
					}
				}
			}
			else {
				include "LogIn.php";
			}
		?>
	</div>
	
</body>