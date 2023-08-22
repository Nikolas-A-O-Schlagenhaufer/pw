function enviar() {
  const form = document.getElementById("form-enviar");
  const dados = new FormData(form);
  const response = fetch("enviar.php", {
    method: "POST",
    body: dados,
  });
  console.log(response);
}
