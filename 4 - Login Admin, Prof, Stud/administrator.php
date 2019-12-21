<div class="AdminClass">
	<form action="index.php" method="post" id="AdminForm" onsubmit="return Validate();">
		<input type="text" name="id" value="Admin" hidden="true" >
		
		<p> Korisnicko ime novog korisnika:
		<input type="text" name="username">
		</p>
		<p> Sifra:
		<input type="text" name="password">
		</p>
		<p> Dozvola:
		<input type="text" name="permission">
		</p>
		<input type="submit" value="Posalji">
	</form>
</div>