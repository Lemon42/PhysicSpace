function Validation(inputName){
	let inputs = document.querySelectorAll('.'+inputName);
	let elementoPreenchidos = 0;
	
	inputs.forEach((element) => {
		if(element.value != ""){
			elementoPreenchidos++;
		}
	});

	if ((elementoPreenchidos + 1) == inputs.length){
		return true;
	}

	alert('Erro no envio de informações\nTente novamete . . .');
	return false;
}