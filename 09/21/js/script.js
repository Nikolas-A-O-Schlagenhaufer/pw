function enviar() {
  const form = document.getElementById("music-form");
  const data = new FormData(form);

  fetch("php/enviar.php", {
    method: "POST",
    body: data,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
    });
}

// function listar() {
//   fetch("php/listar.php", {
//     method: "GET",
//   })
//     .then((res) => res.json())
//     .then((data) => {
//       alert("Primeira Música: " + data[0]["titulo"]);
//     });
// }

async function listar() {
  const res = await fetch("php/listar.php", {
    method: "GET",
  });
  const data = await res.json();
  alert("Primeira Música: " + data[0]["titulo"]);
}
