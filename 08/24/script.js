function cadastrar() {
  const form = document.getElementById("form-cadastrar");
  const dados = new FormData(form);
  if (dados.get("password") !== dados.get("confirm-password")) {
    return alert("As senhas não coincidem");
  }
  fetch("cadastrar.php", {
    method: "POST",
    body: dados,
  });
}
