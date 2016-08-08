//transformando o float em moeda
function numberParaReal(numero) {
	var formatado = "R$ " + numero.toFixed(2).replace(".", ",");
	return formatado;
}

//tranformando o numero de moeda em float. 
function realParaNumber(texto) {
	var valor = parseFloat(texto.replace("R$ ", "").replace(",", "."));
	return valor;
}