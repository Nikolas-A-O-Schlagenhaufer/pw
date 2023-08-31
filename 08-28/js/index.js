async function obter() {
  var form = document.getElementById("formulario");
  var dados = new FormData(form);

  var promise = await fetch("php/obter.php", {
    method: "POST",
    body: dados,
  });

  var resposta = await promise.json();

  console.log(resposta);
}

function obter2() {
  const form = document.getElementById("formulario");
  const dados = new FormData(form);

  fetch("php/obter.php", {
		method: "POST",
    body: dados,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
    });
}
