async function obter() {
  var form = document.getElementById("formulario");
  var dados = new FormData(form);

  var res = await fetch("php/obter.php", {
    method: "POST",
    body: dados,
  });

  var data = await res.json();

  console.log(data);
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
