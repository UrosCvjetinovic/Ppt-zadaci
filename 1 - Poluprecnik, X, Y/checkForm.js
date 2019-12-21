function CheckFormData (form) {
	if(form.elements.poluprecnik.value.length == 0) {
		alert("Morate uneti podatke za poluprecnik";
		return false;
	}
	if(isNaN(form.elements.poluprecnik.value)) {
		alert("Poluprecnik mora biti broj");
		return false;
	}
	if(form.elements.xCoord.value.length == 0) {
		alert("Morate uneti podatke za x koordinatu";
		return false;
	}
	if(isNaN(form.elements.xCoord.value)) {
		alert("x koordinata mora biti broj");
		return false;
	}
	if(form.elements.yCoord.value.length == 0) {
		alert("Morate uneti podatke za y koordinatu";
		return false;
	}
	if(isNaN(form.elements.yCoord.value)) {
		alert("y koordinatu mora biti broj");
		return false;
	}
	return true;
}

function Validate() {
	Form = document.getElementById("Podaci");
	alert("Sta koji kurac");
	if (CheckFormData(Form)){
		return true;
	}else {
		return false;
	}
}