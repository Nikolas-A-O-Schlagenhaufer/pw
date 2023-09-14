async function verifica_moeda() {
  var form = document.getElementById("form");
  var dados = new FormData(form);

  var res = await fetch("php/verifica_moeda.php", {
    method: "POST",
    body: dados,
  });

  var data = await res.json();

  console.log(data);

  var result = document.getElementById("resultado");
  result.innerHTML = data;
  result.classList.remove("hide");
}
