async function cadastrar() {
	var form = document.getElementById("form");
	var dados = new FormData(form);

	var res = await fetch("php/cadastrar.php", {
		method: "POST",
		body: dados,
	});

	var data = await res.json();

	console.log(data);
}