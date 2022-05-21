function cammbiarTexto(tipo){
	if (tipo == 1){
		document.getElementById("user").innerHTML = "No. Control" 
		document.getElementById("contra").innerHTML = "NIP" 
	}else if(tipo == 2){
		document.getElementById("user").innerHTML = "Usuario"
		document.getElementById("contra").innerHTML = "Contraseña" 
	}else{
		document.getElementById("user").innerHTML = "No. Solicitud"
		document.getElementById("contra").innerHTML = "NIP"
	}
}

//--------------------Formato para número de telefono --------------------------

$("input[id='telph']").on("input", function () {
	$("input[id='telph']").val(destroyMask(this.value));
	this.value = createMask($("input[id='telph']").val());
})

function createMask(string) {
	console.log(string)
	return string.replace("[7-9]{1}[0-9]{9}");
}

function destroyMask(string) {
	console.log(string)
	return string.replace(/\D/g, '').substring(0, 10);
}
