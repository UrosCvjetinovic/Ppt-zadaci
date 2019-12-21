<form action="register.php" method="post" name="RegisterForm" onsubmit="return Validate();">
	<p>	Broj kreveta u sobi: 
	<select name="BrKreveta">
		<option value=""> </option>
		<option value="2"> 2 </option>
		<option value="3"> 3 </option>
		<option value="4"> 4 </option>
	</select>
	</p>
	<p>	Ime:
	<input type="text" name="Ime">
	</p>
	<p>	Prezime:
	<input type="text" name="Prezime">
	</p>
	<p>	Kontakt telefon:
	<input type="text" name="Telefon">
	</p>
	<p>	E-mail:
	<input type="email" name="Mejl">
	</p> 
	<p> Rezervisi sobu:
	<input type="submit" value="Registruj">
	</p>
</form>