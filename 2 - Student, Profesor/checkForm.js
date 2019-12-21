function CheckFormData(type, form){
	switch (type) {
		case 1:
				if(form.elements.Ime.value.length == 0) {
					alert("Morate uneti ime");
					return false;
				}
				if(form.elements.Prezime.value.length == 0) {
					alert("Morate uneti prezime");
					return false;
				}
				if(form.elements.BrIdx.value.length == 0) {
					alert("Morate uneti index");
					return false;
				}
					if(isNaN(form.elements.BrIdx.value)) {
						alert("Index mora biti broj");
						return false;
					}
				if(form.elements.Poeni1.value.length == 0) {
					alert("Morate uneti poene sa prvog testa");
					return false;
				}
					if(isNaN(form.elements.Poeni1.value)) {
						alert("Poeni prvog testa mora biti broj");
						return false;
					}
				if(form.elements.Poeni2.value.length == 0) {
					alert("Morate uneti poene drugog testa");
					return false;
				}
					if(isNaN(form.elements.Poeni2.value)) {
						alert("Poeni 2 mora biti broj");
						return false;
					}
				return true;
			break;
		case 2:
				if(form.elements.OBrIdx.value.length == 0) {
					alert("Morate uneti index");
					return false;
				}
					if(isNaN(form.elements.OBrIdx.value)) {
						alert("Index mora biti broj");
						return false;
					}
	}
				return true;

}

function Validate(type) {
	switch (type){
		case 1:
				Form = document.getElementById("ProfesorId");
				if (CheckFormData(type,Form)){
					return true;
				}else {
					return false;
				}
				break;
		case 2:
				Form = document.getElementById("StudentId");
				if (CheckFormData(type,Form)){
					return true;
				}else {
					return false;
				}
		}
}