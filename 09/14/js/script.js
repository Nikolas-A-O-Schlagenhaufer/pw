const enviar = () => {
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
};
