function checkFormData(form){
	if(form.elements.User.value.length == 0){
		alert("Morate uneti korisnicko ime");
		return false;
	}
	if(form.elements.Password.value.length == 0){
		alert("Morate uneti sifru");
		return false;
	}
	return true;
}


function Validate(){
	Form = document.getElementById("LogInForm");
	if(checkFormData(Form)){
		return true;
	} else {
		return false;
	}
}