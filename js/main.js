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


