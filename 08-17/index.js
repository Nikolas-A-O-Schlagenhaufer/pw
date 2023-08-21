function calcular(operation) {
  switch (operation) {
		case "+":
			var valor1 = parseInt(document.getElementById("nbr-input-1-1").value)
			var valor2 = parseInt(document.getElementById("nbr-input-1-2").value)
			console.log(valor1, valor2);
			var resultado = valor1 + valor2
			document.getElementById("1-result").value = resultado
			break;
		case "-":
			var valor1 = parseInt(document.getElementById("nbr-input-2-1").value)
			var valor2 = parseInt(document.getElementById("nbr-input-2-2").value)
			var resultado = valor1 - valor2
			document.getElementById("2-result").value = resultado
			break;
		case "*":
			var valor1 = parseInt(document.getElementById("nbr-input-3-1").value)
			var valor2 = parseInt(document.getElementById("nbr-input-3-2").value)
			var resultado = valor1 * valor2
			document.getElementById("3-result").value = resultado
			break;
		case "/":
			var valor1 = parseInt(document.getElementById("nbr-input-4-1").value)
			var valor2 = parseInt(document.getElementById("nbr-input-4-2").value)
			var resultado = valor1 / valor2
			document.getElementById("4-result").value = resultado
			break;
	}
}

function limpar(row) {
  document.getElementById(`${row}-result`).value = "";
  document.getElementById(`nbr-input-${row}-1`).value = "";
  document.getElementById(`nbr-input-${row}-2`).value = "";
}
