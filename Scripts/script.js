document.addEventListener("DOMContentLoaded", function () {
  const logo = document.getElementById("logo");
  const nav = document.getElementById("myNav");
  const main = document.getElementById("main");

  logo.addEventListener("click", function () {
    nav.classList.toggle("small-width");
    main.classList.toggle("expanded-main");
    main.classList.toggle("small-main");
  });
});
