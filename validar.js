function validar(){
	var nombre, correo, telefono ,expresion;
	nombre=document.getElementById("nombres").value;
	correo=document.getElementById("correo").value;
	telefono=document.getElementById("telefono").value;

	if (nombres === "" || correo === "" || telefono === "") {
		alert("Todos los campos son obligatorios");
		return false;
	}
	 else if (telefono.length > 9) {
	 	alert("El telefono solo debe ser 9 numeros");
	 	return false;
	 }
	 else if (isNaN(telefono)) {
	 	alert("El telefono ingresado no es numero");
	 	return false;
	 }
} 