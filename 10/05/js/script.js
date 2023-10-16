window.onload = () => {
  fetch("php/get_apps.php", {
    method: "GET",
  })
    .then((res) => res.json())
    .then((data) => {
      data.forEach((item) => {
        let card = `
        <div class="card">
          <div class="icon">0</div>
          <div class="title"> ${item.name} </div>
          <div class="text"> ${item.descr} </div>
          <div class="btn">
            <button type="button">Read More</button>
          </div>
        </div>
      `;
        document.querySelector(".cards").innerHTML += card;
      });
    });
};
