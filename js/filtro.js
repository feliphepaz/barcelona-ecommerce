const isShopPage = document.querySelector(".products-archive");

if (isShopPage) {
  const btnFiltro = document.querySelector(".btn-filtrar");
  const filtro = document.querySelector("[data-filtro]");
  const arrow = document.querySelector("[data-rotate]");

  btnFiltro.addEventListener("click", function log() {
    filtro.classList.toggle("show-filters");
    arrow.classList.toggle("rotate-arrow");
  });
}