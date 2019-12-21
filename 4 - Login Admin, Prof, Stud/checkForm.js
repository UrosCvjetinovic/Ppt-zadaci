function checkFormData(form){
	if(form.elements.User.value.length == 0){
		alert("Morate uneti korisnicko ime");
		return false;
	}
	if(form.elements.Password.value.length == 0){
		alert("Morate uneti sifru");
		return false;
	}
}

function Validate(){
	Form = document.getElementById("LogInForm");
	if(ckeckFormData(Form)){
		return true;
	}
	else {
		return false;
	}
	
}