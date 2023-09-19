const gravar = async () => {
  const form = document.getElementById("formulario");
  const dados = new FormData(form);
  const res = await fetch("php/gravar.php", {
    method: "POST",
    body: dados,
  });
  const data = await res.json();
  console.log(data);
};
const listar = () => {
  fetch("php/listar.php", {
    method: "GET",
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
    });
};
